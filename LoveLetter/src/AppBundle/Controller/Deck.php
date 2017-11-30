<?php

namespace AppBundle\Controller;

class Deck
{
    protected $arrayCarte;
    protected $verso;

    public function __construct( )
    {
		
		$this->verso = "img/verso.jpg";
			$this->arrayCarte = array();
			array_push($this->arrayCarte, new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Guard"), new Carte("Guard")
				, new Carte("Princess"), new Carte("Countess"), new Carte("King"), new Carte("Prince"), new Carte("Prince")
				, new Carte("Handmaid"), new Carte("Handmaid"), new Carte("Baron"), new Carte("Baron"), new Carte("Priest"), new Carte("Priest"));
			
			
    }
	
	public function getArrayDeck() {
		return $this->arrayCarte;
	}

	public function getVerso(){
		return $this->verso;
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