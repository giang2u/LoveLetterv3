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
		for ($i =0; $i < 16; $i++) {
			$r = rand(1,8);
			
			switch ($r) {
				case 1:
					array_push($arrayCarte, new Carte("Princess");
					break;
				case 2:
					array_push($arrayCarte, new Carte("Countess");
					break;
				case 3:
					array_push($arrayCarte, new Carte("King");
					break;
				case 4:
					array_push($arrayCarte, new Carte("Prince");
					break;
				case 5":
					array_push($arrayCarte, new Carte("Handmaid");
					break;
				case 6:
					array_push($arrayCarte, new Carte("Baron");
					break;
				case 7:
					array_push($arrayCarte, new Carte("Priest");
					break;
				case 8:
					array_push($arrayCarte, new Carte("Guard");
					break;
			}
		}
			
    }
	
	
}