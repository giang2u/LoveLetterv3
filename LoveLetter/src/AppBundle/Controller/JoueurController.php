<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AppBundle\Controller;

// N'oubliez pas ce use :
/*use AppBundle\Entity\Carte;
use AppBundle\Entity\Partie;
use AppBundle\Entity\Joueur;*/
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class JoueurController extends Controller
{


	public function joueurAction($n,$pre){
		/*
		$em = $this->getDoctrine()->getManager();
		
		$j = new Joueur();
		$j->setNom($n);
		$j->setPrenom($pre);
		
		$em->persist($j);
		
		
		$carte = new Carte("Guard");
		$carte->setCarteNom("Princess");
		$carte->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Princess.png");
		
		
		
		$carte = $em->getRepository('AppBundle:Carte')->find(1);
		$carte->setCarteNom("Guard");
		
		
		$em->flush();
		
		
		
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
    	return new Response($content);*/
	}
	
	
}