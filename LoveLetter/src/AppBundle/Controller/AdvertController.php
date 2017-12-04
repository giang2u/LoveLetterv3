<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AppBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity;

require 'Plateau.php';
require 'Deck.php';

class AdvertController extends Controller
{
	protected $deck;
	protected $plateau;
	protected $listeCartes;

	public function cartesAction(){

		$this->deck = new Deck();

		$this->listeCartes = array(
			'King' => $this->deck->getCarte('King')->getUrl(),
			'Guard' => $this->deck->getCarte('Guard')->getUrl(),
			'Countess' => $this->deck->getCarte('Countess')->getUrl(),
			'Princess' => $this->deck->getCarte('Princess')->getUrl(),
			'Prince' => $this->deck->getCarte('Prince')->getUrl(),
			'Handmaid' => $this->deck->getCarte('Handmaid')->getUrl(),
			'Baron' => $this->deck->getCarte('Baron')->getUrl(),
			'Priest' => $this->deck->getCarte('Priest')->getUrl(),
			);

        $content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:cartes.html.twig',
        		$this->listeCartes);
    	return new Response($content);
	}
	
	public function plateauAction(){

		$this->plateau = new Plateau();
		
		$this->deck = new Deck();
		
		$this->deck->melanger();
		
		$this->listeCartes = array();
		
		$deck = array();
		
		
		
		foreach($this->deck->getArrayDeck() as $c) {
			array_push($this->listeCartes, $c->getNom());
			array_push($deck, $c->getUrl());
		}
		
		
        $content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:plateau.html.twig',
        		array('plateau' => $this->plateau->getUrl(), 'verso' => $this->deck->getVerso(), 'deck' => $deck, 'nom' => $this->listeCartes));
    	return new Response($content);
	}
	
}