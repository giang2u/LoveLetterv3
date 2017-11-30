<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Joueur")
 */
class Joueur
{
    /**
     * @ORM\Id
     * @ORM\Column(name="joueur_id", type="string", length=100)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	
	/**
     * @ORM\Column(name="joueur_nom", type="string", length=100)
     */
	protected $nom;
	
	
	/**
     * @ORM\Column(name="joueur_prenom", type="string", length=100)
     */
	protected $prenom;

    public function __construct($i, $n, $p )
    {
		$id = $i;
		$nom = $n;
		$prenom = $p;
    }
}