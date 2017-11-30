<?php
// src/AppBundle/Entity/User.php

//namespace AppBundle\Entity;
namespace AppBundle\Controller;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
 
class Plateau
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $url, $carteJ1, $carteJ2;

    public function __construct( )
    {
		$this->url = "img/plateau.jpg";
		$this->carteJ1 = array();
		$this->carteJ2 = array();
    }
	
	
	public function getUrl() {
		return $this->url;
	}
	
	
}