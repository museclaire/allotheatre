<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitePublicController extends controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {

        return $this->render('SitePublic/index.html.twig');

    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contactAction()
    {

        return $this->render('SitePublic/contact.html.twig');
    }

   
}
