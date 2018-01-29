<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpectacleRepository")
 */
class Spectacle
{

	 /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

     /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id_compagnie;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $style;

     /**
     * @ORM\Column(type="string", length=64)
     */
    private $sousStyle;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

     /**
     * @ORM\Column(type="string", length=30)
     */
    private $age;

     /**
     * @ORM\Column(type="string", length=35)
     */
    private $langue;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $affiche;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $teaser;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $auteur;

     /**
     * @ORM\Column(type="text", length=400)
     */
    private $interpretes;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $mise_en_scene;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $charge_diffusion;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $regisseur;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $note;

     /**
     * @ORM\Column(type="string", length=10)
     */
    private $duree;

     /**
     * @ORM\Column(type="text", length=400)
     */
    private $resume;


    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCompagnie()
    {
        return $this->id_compagnie;
    }

    /**
     * @param mixed $id_compagnie
     *
     * @return self
     */
    public function setIdCompagnie($id_compagnie)
    {
        $this->id_compagnie = $id_compagnie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     *
     * @return self
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSousStyle()
    {
        return $this->sousStyle;
    }

    /**
     * @param mixed $sousStyle
     *
     * @return self
     */
    public function setSousStyle($sousStyle)
    {
        $this->sousStyle = $sousStyle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     *
     * @return self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param mixed $langue
     *
     * @return self
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * @param mixed $affiche
     *
     * @return self
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @param mixed $teaser
     *
     * @return self
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     *
     * @return self
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterpretes()
    {
        return $this->interpretes;
    }

    /**
     * @param mixed $interpretes
     *
     * @return self
     */
    public function setInterpretes($interpretes)
    {
        $this->interpretes = $interpretes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMiseEnScene()
    {
        return $this->mise_en_scene;
    }

    /**
     * @param mixed $mise_en_scene
     *
     * @return self
     */
    public function setMiseEnScene($mise_en_scene)
    {
        $this->mise_en_scene = $mise_en_scene;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChargeDiffusion()
    {
        return $this->charge_diffusion;
    }

    /**
     * @param mixed $charge_diffusion
     *
     * @return self
     */
    public function setChargeDiffusion($charge_diffusion)
    {
        $this->charge_diffusion = $charge_diffusion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegisseur()
    {
        return $this->regisseur;
    }

    /**
     * @param mixed $regisseur
     *
     * @return self
     */
    public function setRegisseur($regisseur)
    {
        $this->regisseur = $regisseur;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     *
     * @return self
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * @param mixed $resume
     *
     * @return self
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }


}


    