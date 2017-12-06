<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AppBundle\Controller;

// N'oubliez pas ce use :
//use src\AppBundle\Entity\Carte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class CarteController extends Controller
{
	
	public function addAction(Request $request) {
		
		
		
		if (isset($_POST['carte_nom']) && $_POST['id_joueur'] == 1 ) {
		$em = $this->getDoctrine()->getManager();
		
		
		$carte = new Carte( $_POST['carte_nom'] );
		
		$manche2 = $em->getRepository('AppBundle:Manche')->find( $_POST['id_manche'] );
		
		$manche2->addMainj1( $carte );
		
		$em->flush();
		
		}
		/*$carte = new Carte("Guard");
		
		$em = $this->getDoctrine()->getManager();
		
		$em->persist($carte);
		
		$em->flush();
		
		
		 $content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:cartes.html.twig',
        		$this->listeCartes);
    	return new Response($content);
		
		*/
		
	}
	
}