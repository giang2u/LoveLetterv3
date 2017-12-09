<?php
// src/AppBundle/Entity/Carte.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


use AppBundle\Entity\Carte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @ORM\Entity
 */
class Carte
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\Column(name="carte_url", type="string", length=255)
     */
	protected $carte_url;
	
	/**
	 * @ORM\Column(name="carte_nom",type="string",length=100)
	*/
	protected $carte_nom;
	

	protected $retourne;
	

    function  __construct($n)
    {
		$this->carte_nom = $n;
		$this->retournee = true;
		switch ($this->carte_nom) {
			case "Princess":
				$this->carte_nom = "Princess";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Princess.png";
				break;
			case "Countess":
				$this->carte_nom = "Countess";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Countess.png";
				break;
			case "King":
				$this->carte_nom = "King";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/King.png";
				break;
			case "Prince":
				$this->carte_nom = "Prince";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Prince.png";
				break;
			case "Handmaid":
				$this->carte_nom = "Handmaid";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Handmaid.png";
				break;
			case "Baron":
				$this->carte_nom = "Baron";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Baron.png";
				break;
			case "Priest":
				$this->carte_nom = "Priest";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Priest.png";
				break;
			case "Guard":
				$this->carte_nom = "Guard";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Guard.png";
				break;
			default:
				$this->carte_nom = "Guard";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Guard.png";
				break;
		}
    }
	
	public function createCarte($n, $url) {
		
		$em = $this->getDoctrine()->getManager();
		
		$carte = new Carte("Guard");
		$carte->setCarteNom($n);
		$carte->setCarteUrl($url);
		
		$em->persist($carte);
		
		$em->flush();
		
	}
	
	public function setCarte($n,$url) {
		$em = $this->getDoctrine()->getManager();
		
		$carte = $em->getRepository('AppBundle:Carte')->find(1);
		$carte->setCarteNom("Guard");
		
		$em->flush();
	}
	
	public function setNom($n) {
		$this->carte_nom = $n;
		switch ($this->carte_nom) {
			case "Princess":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Princess.png";
				break;
			case "Countess":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Countess.png";
				break;
			case "King":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/King.png";
				break;
			case "Prince":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Prince.png";
				break;
			case "Handmaid":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Handmaid.png";
				break;
			case "Baron":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Baron.png";
				break;
			case "Priest":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Priest.png";
				break;
			case "Guard":
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Guard.png";
				break;
			default:
				$this->carte_nom = "Guard";
				$this->carte_url = "/LoveLetterv3/LoveLetter/web/img/Guard.png";
				break;
		}
	}
	
	public function getNom() {
		return $this->carte_nom;
	}
	
	public function getUrl() {
		return $this->carte_url;
	}
	
	public function getVerso() {
		return $this->retourne;
	}
	
	public function setVerso($b) {
		$this->retourne = $b;
	}
	
	
	
	

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set carteUrl
     *
     * @param string $carteUrl
     *
     * @return Carte
     */
    public function setCarteUrl($carteUrl)
    {
        $this->carte_url = $carteUrl;

        return $this;
    }

    /**
     * Get carteUrl
     *
     * @return string
     */
    public function getCarteUrl()
    {
        return $this->carte_url;
    }

    /**
     * Set carteNom
     *
     * @param string $carteNom
     *
     * @return Carte
     */
    public function setCarteNom($carteNom)
    {
        $this->carte_nom = $carteNom;

        return $this;
    }

    /**
     * Get carteNom
     *
     * @return string
     */
    public function getCarteNom()
    {
        return $this->carte_nom;
    }
}
