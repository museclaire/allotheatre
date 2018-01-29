<?php 
namespace App\Controller;


use App\Form\UserType;
use App\Entity\User;
use App\Form\InscriptionType;
use App\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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

            return $this->redirectToRoute('profil');
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
<<<<<<< HEAD
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
    
=======

    
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

     * @Route("/login", name="login")
     */
    // public function login(Request $request)
    // {
    // }
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error
        ));
    }

    /**

    * Renvoie le profil utilisateur
    * @Route("/profil", name="profil")
    */
    public function showAction()
    {

        return $this->render('security/profil.html.twig',array(
        ));

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }

>>>>>>> daf63ea2b894cb413c1e100943f94d07a4d6e7d4
}