<?php
// src/AppBundle/Entity/Carte.php

namespace AppBundle\Controller;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Carte
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nom, $url;

    function  __construct($n = 'King')
    {
		$this->nom = $n;
		switch ($this->nom) {
			case "Princess":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Princess.png";
				break;
			case "Countess":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Countess.png";
				break;
			case "King":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/King.png";
				break;
			case "Prince":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Prince.png";
				break;
			case "Handmaid":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Handmaid.png";
				break;
			case "Baron":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Baron.png";
				break;
			case "Priest":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Priest.png";
				break;
			case "Guard":
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Guard.png";
				break;
			default:
				$this->nom = "Guard";
				$this->url = "/LoveLetterv3/LoveLetter/web/img/Guard.png";
				break;
		}
    }

	public function setNom($n) {
		$this->nom = $n;
		switch ($this->nom) {
			case "Princess":
				$this->url = "img/Princess.png";
				break;
			case "Countess":
				$this->url = "img/Countess.png";
				break;
			case "King":
				$this->url = "img/King.png";
				break;
			case "Prince":
				$this->url = "img/Prince.png";
				break;
			case "Handmaid":
				$this->url = "img/Handmaid.png";
				break;
			case "Baron":
				$this->url = "img/Baron.png";
				break;
			case "Priest":
				$this->url = "img/Priest.png";
				break;
			case "Guard":
				$this->url = "img/Guard.png";
				break;
			default:
				$this->nom = "Guard";
				$this->url = "img/Guard.png";
				break;
		}
	}
	
	public function getNom() {
		return $this->nom;
	}
	
	public function getUrl() {
		return $this->url;
	}
	
	
}