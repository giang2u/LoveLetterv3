<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AppBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity;

include '../Entity/Plateau.php';
require 'Deck.php';

class AdvertController extends Controller
{
	protected $deck, $plateau;
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

        $content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:cartes.html.twig',
        		$this->plateau);
    	return new Response($content);
	}
	
	

}