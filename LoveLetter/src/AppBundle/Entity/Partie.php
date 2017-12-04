<?php
// src/AppBundle/Entity/Partie.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Partie")
 */
class Partie
{
    /**
     * @ORM\Id
     * @ORM\Column(name="partie_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id, 
	
	
	/**
	* Une partie à un joueur j1
	* @ManytoOne(targerEntity="Joueur")
	* @JoinColumn(name="partie_j1, referencedColumnName="joueur_id")
	*/
	protected $j1;
	
	/**
	* Une partie à un joueur j2
	* @ManytoOne(targerEntity="Joueur")
	* @JoinColumn(name="partie_j2, referencedColumnName="joueur_id")
	*/
	protected $j2;

	/**
	* Many partie have Many manche
	* ManyToMany(targetEntity="Manche")
	* @JoinTable(name="Partie_manche",
	*	joinColumns={@JoinColumn(name="pm_partie_id", referencedColumnName="partie_id")},
	*	inverseJoinColumns={@JoinColumn(name="pm_manche_id", referencedColumnName="manche_id")}
	*	)
	*/
	protected $manche_number;

    public function __construct($n, $t )
    {
		$nom = $n;
		$type = $p;
    }
	
	
}