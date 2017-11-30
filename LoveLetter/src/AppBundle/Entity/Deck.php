<?php
// src/AppBundle/Entity/Deck.php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Deck")
 */
class Deck
{
    /**
     * @ORM\deck_id
     * @ORM\Column(name="deck_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $deck_id;
	
	/**
	* Many partie have Many manche
	* ManyToMany(targetEntity="Manche")
	* ManyToMany(targetEntity="carte")
	* @JoinTable(name="deck_carte_manche",
	*	joinColumns={@JoinColumn(name="dcm_deck_id", referencedColumnName="deck_id")},
	*	inverseJoinColumns={@JoinColumn(name="dcm_manche_id", referencedColumnName="manche_id"), 
							@JoinColumn(name="dcm_carte_nom",referencedColumnName="carte_nom")}
	*	)
	*/
	protected $deck_carte_manche;

    public function __construct( )
    {
		
			$this->arrayCarte = array();
			array_push($this->arrayCarte, new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Guard")
				, new Carte("Princess"), new Carte("Countess"), new Carte("King"), new Carte("Prince"), new Carte("Prince")
				, new Carte("Handmaid"), new Carte("Handmaid"), new Carte("Baron"), new Carte("Baron"), new Carte("Priest"), new Carte("Priest"));
			
			/*array_push($this->arrayCarte, new Carte("Guard");
			
			array_push($this->arrayCarte, new Carte("Guard");
			
			array_push($this->arrayCarte, new Carte("Guard");
			
			array_push($this->arrayCarte, new Carte("Princess");
				
			array_push($this->arrayCarte, new Carte("Countess");
	
			array_push($this->arrayCarte, new Carte("King");
	
			array_push($this->arrayCarte, new Carte("Prince");
			
			array_push($this->arrayCarte, new Carte("Prince");

			array_push($this->arrayCarte, new Carte("Handmaid");
			
			array_push($this->arrayCarte, new Carte("Handmaid");

			array_push($this->arrayCarte, new Carte("Baron");
			
			array_push($this->arrayCarte, new Carte("Baron");
		
			array_push($this->arrayCarte, new Carte("Priest");
			
			array_push($this->arrayCarte, new Carte("Priest");
				
			array_push($this->arrayCarte, new Carte("Guard");*/
			
    }
	
	public function getArrayDeck() {
		return $this->arrayCarte;
	}
	
	public function melanger() {
		if (!empty($this->arrayCarte)) {
			for ($i = 0; $i < 25; $i++) {
				$r = rand(0,15);
				
				$rr = rand(0,15);
				while($rr == $r) {
					$rr = rand(0,15);
				}
				
				$carte = $this->arrayCarte[$r];
				
				$this->arrayCarte[$r] = $this->arrayCarte[$rr];
				
				$this->arrayCarte[$rr] = $carte;
				
			}
		}
	}
	
	
}