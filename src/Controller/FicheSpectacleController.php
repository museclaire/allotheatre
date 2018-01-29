<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FicheSpectacleController extends controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        
        return $this->render('index.html.twig');
       
    }
    
    /**
    * @Route("/fiche_spectacle", name="fiche_spectacle")
    */
    public function ficheSpectacleAction()
    {
        
        return $this->render('fiche_spectacle.html.twig');
    }
    
}