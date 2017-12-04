<?php
// src/AppBundle/Entity/Partie_manche.php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Partie_manche")
 */
class Partie_manche
{
    /**
     * @OneToOne(targetEntity="Joueur")
     * @JoinColumn(name="manche_joueur_id_gagnant", referencedColumnName="joueur_id")
     */
    protected $numManche;
	
	/**
     * @OneToOne(targetEntity="Joueur")
     * @JoinColumn(name="manche_joueur_id_gagnant", referencedColumnName="joueur_id")
     */
    protected $numManche;


	
	
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