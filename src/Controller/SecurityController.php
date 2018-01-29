<?php 
namespace App\Controller;

use App\Form\InscriptionType;
use App\Form\EditInscriptionType;
use App\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
//TEST 
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
//FIN TEST

class SecurityController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */ 
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $inscription = new Inscription();
        $form = $this->createForm(InscriptionType::class, $inscription);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

             //3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($inscription, $inscription->getPassword());
           $inscription->setPassword($password);
            //dump($inscription);
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            return $this->redirectToRoute('accueil');
        }

        return $this->render(
            'security/register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * ça, c'est une méthode de Symfony, elle permet la connexion, on touche pas
     * @Route("/login_check", name="login_check")
     */
    public function check()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }




    /**TEST*/
    /**
     * @Route("/connexion", name="connexion")
     */
   public function loginAction(Request $request, AuthenticationUtils $authUtils)
{
    // get the login error if there is one
    $error = $authUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authUtils->getLastUsername();

    return $this->render('security/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
}
    


    /**
     * la méthode pour se déconnecter, gérer par Symfony, donc on laisse la méthode de base
     * la route est définie dans le fichier security.yaml -> vérifier que le chemin soit le même qu'ici
     * @Route("/deconnexion", name="deconnexion")
     */
    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }


    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexionAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/connexion.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error
        ));
    }

     /**
    * @Route("/profil", name="profil")
    */
    public function showAction()
    {

        $list_user = $this ->getDoctrine()
                ->getRepository(Inscription::class)
                ->findAll();
        return $this->render('profil.html.twig', array( 'list_user' => $list_user ));

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }

    
    /**
     * @Route("/admin", name="admin")
     */
    
    public function adminAction(AuthorizationCheckerInterface $authChecker)
    {
        if (false === $authChecker->isGranted('ROLE_ADMIN')) {
               return $this->redirectToRoute('profil');
        }
    
    return $this->render('security/admin.html.twig');
    
    }
 
 /**
 * @Route("admin/inscription", name="user_show")
 */
public function listingAction()
{
    $user = $this->getDoctrine()
        ->getRepository(Inscription::class)
        ->findAll();

    if (!$user) {
        throw $this->createNotFoundException(
            'Aucun membre trouvé pour l id '.$id
        );
    }

   
    $list_user = $this ->getDoctrine()
                ->getRepository(Inscription::class)
                ->findAll();
return $this->render('security/admin_show.html.twig', array( 'list_user' => $list_user ));
}

 /**
 * @Route("admin/inscription/delete/{id}", name="user_delete")
 */
public function deleteUserAction($id)
{
    // $em récupère le manager de doctrine
     $em = $this->getDoctrine()->getManager(); 
    // dans user_delete, on récupère l'utilisateur à supprimer grâce au manager de doctrine
    $user_delete = $em ->getRepository(Inscription::class)
                       ->find($id);
    // si user_delete est null, c'est qu'on trouve pas de membre avec cet id
   if (!$user_delete) {
       throw $this->createNotFoundException(
           'Aucun membre trouvé pour l id '.$id
        );
    }

   // on supprime le membre grâce au manager de doctrine
   $em->remove($user_delete);
   $em->flush();
   
    // retour de la réponse /!\ L'utilisateur n'existe plus, on ne peut plus faire getId() mais on peut toujours afficher l'id passer en paramètre de la route
   return new Response('Suppression du membre '.$id);
  } 
    
    /**
 * @Route("admin/inscription/edit/{id}", name="user_edit")
 */
public function editUserAction(Request $request, $id)
{
    // $em récupère le manager de doctrine
    $em = $this->getDoctrine()->getManager(); 
    // dans user_edit, on récupère l'utilisateur à editer grâce au manager de doctrine
    $user_edit = $em ->getRepository(Inscription::class)
                       ->find($id);
    // si user_edit est null, c'est qu'on trouve pas de membre avec cet id
   if (!$user_edit) {
       throw $this->createNotFoundException(
           'Aucun membre trouvé pour l id '.$id
        );
    }
    // Formulaire à éditer
    
        // 1) build the form
        $form = $this->createForm(EditInscriptionType::class, $user_edit);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //dump($inscription);
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user_edit);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            return $this->redirectToRoute('accueil');
        }

        return $this->render(
            'security/editRegister.html.twig',
            array('form' => $form->createView())
        );
    }
        
}


}


class SalleController extends controller
{
    /**
     * @Route("/salle", name="salle")
     */
    public function indexAction()
    {
        
        return $this->render('index.html.twig');
       
    }
    
    /**
    * @Route("/fiche_salle", name="fiche_salle")
    */
    public function ficheSalleAction()
    {
        
        return $this->render('fiche_salle.html.twig', array('form' => $form->createView()));
    }

}