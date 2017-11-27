<?php
// src/AppBundle/Entity/User.php

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
    case 0:
       $url = "Princess";
        break;
    case 1:
         $url = "Countess";
        break;
    case 2:
        $url = ;
        break;
}
    }
	
	
}