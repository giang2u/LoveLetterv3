<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Manche
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $numManche, $j1, $j2, $gagnant, $enCours = false, $arrayTour;

    public function __construct($n, $j, $jj)
    {
		$numManche = $n;
		$j1 =$j;
		$j2 = $jj;
		$enCours = true;
		$gagnant = "null";
    }
	
	public getEnCOurs() {
		return $enCOurs;
	}
	
	public setEnCours($b) {
		$enCOurs = $b;
	}
	
	public setGagnant($joueur) {
		$gagnant = $joueur;
	}
	
	public addTour($tour) {
		array_push($arrayTour, $tour);
	}	
	
}