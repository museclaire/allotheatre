<?php

// src/Controller/ProductController.php
namespace App\Controller;


use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InscriptionController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setUsername('Grabbs');
        $user->setEmail('grabbs@panda.fr');
        $user->setPassword('123456789');
        $user->setRoles('ROLE_USER');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Sauvegarde du membre '.$user->getId());
    }
    
 /**
 * @Route("/user/{id}", name="user_show")
 */
public function testshowAction($id)
{
    $user = $this->getDoctrine()
        ->getRepository(Inscription::class)
        ->find($id);

    if (!$user) {
        throw $this->createNotFoundException(
            'Aucun membre trouvé pour l id '.$id
        );
    }

  
    $list_user = $this ->getDoctrine()
                ->getRepository(Inscription::class)
                ->findAll();
return $this->render('profil.html.twig', array( 'list_user' => $list_user ));
}
    /**
 * @Route("/user/{id}", name="user_show")
 */
public function showAction($id)
{
    $user = $this->getDoctrine()
        ->getRepository(Inscription::class)
        ->find($id);

    if (!$user) {
        throw $this->createNotFoundException(
            'Aucun membre trouvé pour l id '.$id
        );
    }

  
    $list_user = $this ->getDoctrine()
                ->getRepository(Inscription::class)
                ->findAll();
return $this->render('profil.html.twig', array( 'list_user' => $list_user ));
}
}