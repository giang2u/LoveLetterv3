<?php
// src/AppBundle/Entity/Deck.php

namespace AppBundle\Entity;


class Deck
{
   
    protected $deck_id;
	

	protected $deck_carte_manche;
	
	protected $deck_carte_id;
	
	protected $verso, $verso_test;


    public function __construct( )
    {
			$this->verso = "img/verso.jpg";
		$this->verso_test = "verso";
			$this->arrayCarte = array();
			array_push($this->arrayCarte, new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Countess") 
				, new Carte("King"),  new Carte("Prince"),  new Carte("Prince"), new Carte("Guard"),  new Carte("Guard")
				, new Carte("Handmaid"), new Carte("Handmaid"), new Carte("Baron"), new Carte("Baron"), new Carte("Priest"), new Carte("Priest"));
		
			
			
			/*array_push($this->arrayCarte, new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Baron"), new Carte("Countess") 
				, new Carte("King"),  new Carte("Baron"),  new Carte("Prince"), new Carte("Baron"),  new Carte("Guard")
				, new Carte("Handmaid"), new Carte("Handmaid"), new Carte("Baron"), new Carte("Baron"), new Carte("Priest"), new Carte("Priest"));
			
			
			array_push($this->arrayCarte, new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Princess"), new Carte("Countess") 
				, new Carte("King"),  new Carte("Prince"),  new Carte("Prince"), new Carte("Guard"),  new Carte("Guard")
				, new Carte("Handmaid"), new Carte("Handmaid"), new Carte("Baron"), new Carte("Baron"), new Carte("Priest"), new Carte("Priest"));
			*/
			
			
			$this->deck_carte_id = array(
				 "Guard" => 1,
        		 "Priest" => 2,
        		 "Baron" => 3,
        		 "Handmaid" => 4,
				 "Prince" => 5,
				 "King" => 6,
				 "Countess" => 7,
				 "Princess" => 8);
			
    }
	
	
	public function getArrayDeck() {
		return $this->arrayCarte;
	}
	
	public function getCarte( $n ){
		if( $n === 'King'){
			return $this->arrayCarte[7];
		}
		if( $n === 'Guard'){
			return $this->arrayCarte[0];
		}
		if( $n === 'Countess'){
			return $this->arrayCarte[6];
		}
		if( $n === 'Princess'){
			return $this->arrayCarte[5];
		}
		if( $n === 'Prince'){
			return $this->arrayCarte[8];
		}
		if( $n === 'Handmaid'){
			return $this->arrayCarte[10];
		}
		if( $n === 'Baron'){
			return $this->arrayCarte[12];
		}
		if( $n === 'Priest'){
			return $this->arrayCarte[14];
		}
		return $this->arrayCarte[0];
	}
	
	public function getCarteDuDeck($n){
    	return $this->arrayCarte[$n];
    }

	
	public function getId($nom) {
		return $this->deck_carte_id[$nom];
	}
	
	public function getArrayId() {
		return $this->deck_carte_id;
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
	
		public function getVerso(){
		return $this->verso;
	}
	
	
}