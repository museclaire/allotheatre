<?php 
namespace App\Controller;

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