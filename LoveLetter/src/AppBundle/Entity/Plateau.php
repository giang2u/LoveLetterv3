<?php
// src/AppBundle/Entity/Plateau.php

//namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


 
class Plateau
{
  

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