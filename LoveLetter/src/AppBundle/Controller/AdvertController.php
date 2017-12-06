<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AppBundle\Controller;

// N'oubliez pas ce use :
use AppBundle\Entity\Carte;
use AppBundle\Entity\Partie;
use AppBundle\Entity\Joueur;
use AppBundle\Entity\Manche;
use AppBundle\Entity\Deck;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

require 'Plateau.php';
require 'Deck.php';

class AdvertController extends Controller
{
	protected $deck;
	protected $plateau;
	protected $listeCartes;


	public function cartesAction(){
		
		$em = $this->getDoctrine()->getManager();
		
		if ($em->getRepository('AppBundle:Carte')->find(1) === null) {
		
		
		$carte = new Carte("Guard");
		$carte->setCarteNom("Guard");
		$carte->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Guard.png");
		
		$em->persist($carte);
		
		
		$carte2 = new Carte("Priest");
		$carte2->setCarteNom("Priest");
		$carte2->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Priest.png");
		
		$em->persist($carte2);
		
		
		$carte3 = new Carte("Baron");
		$carte3->setCarteNom("Baron");
		$carte3->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Baron.png");
		
		$em->persist($carte3);
		
		
		$carte4 = new Carte("Handmaid");
		$carte4->setCarteNom("Handmaid");
		$carte4->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Handmaid.png");
		
		$em->persist($carte4);
		
		$carte5 = new Carte("Prince");
		$carte5->setCarteNom("Prince");
		$carte5->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Prince.png");
		
		$em->persist($carte5);
		
		
		$carte6 = new Carte("King");
		$carte6->setCarteNom("King");
		$carte6->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/King.png");
		
		$em->persist($carte6);
		
		
		$carte7 = new Carte("Countess");
		$carte7->setCarteNom("Countess");
		$carte7->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Countess.png");
		
		$em->persist($carte7);
		
		
		$carte8 = new Carte("Princess");
		$carte8->setCarteNom("Princess");
		$carte8->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Princess.png");
		
		$em->persist($carte8);
		
		$em->flush();
		
		}
		
		
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
		
		$em = $this->getDoctrine()->getManager();
		
		
		$j1 = $em->getRepository('AppBundle:Joueur')->find(1);
		if ($j1 === null) {
			$j1 = new Joueur();
			$j1->setNom("Jean");
			$j1->setPrenom("Mouloud");
			$em->persist($j1);
		}
		
		$j2 = $em->getRepository('AppBundle:Joueur')->find(2);
		if ($j2 === null) {
			$j2 = new Joueur();
			$j2->setNom("HAJA");
			$j2->setPrenom("BLBLBL");
			$em->persist($j2);
		}
		
		$em->flush();
		
		
		$partie = new Partie();
		$partie->addJoueur($j1);
		$partie->addJoueur($j2);
		
		$manche = new Manche();
		$manche->setPartie($partie);
		
		$em->persist($partie);
		$em->persist($manche);
		
		$em->flush();
		
		
		$manche2 = $em->getRepository('AppBundle:Manche')->find($manche->getId() );
		
		$deck = new Deck();
		$deck->melanger();
		
		
		foreach($deck->getArrayDeck() as $c) {
			$carte = $em->getRepository('AppBundle:Carte')->find( $deck->getId( $c->getCarteNom() ) );
			$manche2->addCarte($carte);
		}
		
		$manche2->addMainj1( $deck->getArrayDeck()[3]);
		$manche2->addMainj2( $deck->getArrayDeck()[4]);
		
		
		$em->persist($partie);
		$em->persist($manche2);
		
		$em->flush();

		$this->plateau = new Plateau();
		
		//$this->deck->melanger();
		
		$this->listeCartes = array();
		
		$this->deck = array();
		
		
		
		foreach($deck->getArrayDeck() as $c) {
			array_push($this->listeCartes, $c->getCarteNom());
			array_push($this->deck, $c->getUrl());
		}
		
		
        $content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:plateau.html.twig',
        		array('plateau' => $this->plateau->getUrl(),
        				 'verso' => $deck->getVerso(),
        				 'first' => $deck->getCarteDuDeck(0)->getUrl(),
        				 'second' => $deck->getCarteDuDeck(1)->getUrl(),
        				 'trois' => $deck->getCarteDuDeck(2)->getUrl(),
						 'deck' => $this->deck,
						 'nom' => $this->listeCartes,
						 'id_partie' => $partie->getId(),
						 'id_manche' => $manche2->getId() ));
    	return new Response($content);
	}
	
}