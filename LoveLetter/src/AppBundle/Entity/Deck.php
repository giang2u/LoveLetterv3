<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Deck
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $arrayCarte;

    public function __construct( )
    {
		
			array_push($arrayCarte, new Carte("Guard");
			
			array_push($arrayCarte, new Carte("Guard");
			
			array_push($arrayCarte, new Carte("Guard");
			
			array_push($arrayCarte, new Carte("Guard");
			
			array_push($arrayCarte, new Carte("Princess");
				
			array_push($arrayCarte, new Carte("Countess");
	
			array_push($arrayCarte, new Carte("King");
	
			array_push($arrayCarte, new Carte("Prince");
			
			array_push($arrayCarte, new Carte("Prince");

			array_push($arrayCarte, new Carte("Handmaid");
			
			array_push($arrayCarte, new Carte("Handmaid");

			array_push($arrayCarte, new Carte("Baron");
			
			array_push($arrayCarte, new Carte("Baron");
		
			array_push($arrayCarte, new Carte("Priest");
			
			array_push($arrayCarte, new Carte("Priest");
				
			array_push($arrayCarte, new Carte("Guard");
			}
		}
			
    }
	
	public function melanger() {
		if (!empty($arrayCarte) {
			for ($i = 0; $i < 25; $i++) {
				$r = rand(0,15);
				
				$rr = rand(0,15);
				while($rr = $r) {
					$rr = rand(0,15);
				}
				
				
				$carte = $arrayCarte[$r];
				
				$arrayCarte[$r] = $arrayCarte{$rr];
				
				$arrayCarte[$rr] = $carte;
				
			}
	}
	
	
}