<?php
// src/AppBundle/Entity/Carte.php

namespace AppBundle\Entity;

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

    public function __construct($n)
    {
		$nom = $n;
		switch ($nom) {
			case "Princess":
				$url = "../../../img/Princess.png";
				break;
			case "Countess":
				$url = "../../../img/Countess.png";
				break;
			case "King":
				$url = "../../../img/King.png";
				break;
			case "Prince":
				$url = "../../../img/Prince.png";
				break;
			case "Handmaid":
				$url = "../../../img/Handmaid.png";
				break;
			case "Baron":
				$url = "../../../img/Baron.png";
				break;
			case "Priest":
				$url = "../../../img/Priest.png";
				break;
			case "Guard":
				$url = "../../../img/Guard.png";
				break;
		}
    }
	
	public function setNom($n) {
		$nom = $n;
		switch ($nom) {
			case "Princess":
				$url = "../../../img/Princess.png";
				break;
			case "Countess":
				$url = "../../../img/Countess.png";
				break;
			case "King":
				$url = "../../../img/King.png";
				break;
			case "Prince":
				$url = "../../../img/Prince.png";
				break;
			case "Handmaid":
				$url = "../../../img/Handmaid.png";
				break;
			case "Baron":
				$url = "../../../img/Baron.png";
				break;
			case "Priest":
				$url = "../../../img/Priest.png";
				break;
			case "Guard":
				$url = "../../../img/Guard.png";
				break;
		}
	}
	
	public function getNom() {
		return $nom;
	}
	
	public function getUrl() {
		return $url;
	}
	
	
}