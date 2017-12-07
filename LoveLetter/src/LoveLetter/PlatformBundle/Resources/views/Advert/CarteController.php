<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AppBundle\Controller;

// N'oubliez pas ce use :
use src\AppBundle\Entity\Carte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class CarteController extends Controller
{
	
	public function addAction($r, $r, $t) {
		
			$em = $this->getDoctrine()->getManager();
			
			$carte = new Carte("Guard");
		$carte->setCarteNom("Guard");
		$carte->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Guard.png");
		
		$em->persist($carte);
		
		$em->flush();
			
			
			/*
			
			$em = $this->getDoctrine()->getManager();
			
			
			$carte = new Carte( $_POST['carte_id'] );
			
			$manche2 = $em->getRepository('AppBundle:Manche')->find( $_POST['id_manche'] );
			
			
			$manche2->addMainj1( $carte );
			
			$em->flush();
		
		if (isset($_POST['params']['carte_id']) && $_POST['params']['id_joueur'] == 1 ) {
			$em = $this->getDoctrine()->getManager();
			
			
			//$carte = new Carte( $_POST['carte_id'] );
			
			//$manche2 = $em->getRepository('AppBundle:Manche')->find( $_POST['id_manche'] );
			
			
			$query = $em->createQuery( //creation de la requête
				'INSERT INTO Manche (manche_j1_main) Values :id WHERE manche_id=:manche_id')->setParameters(array('id' => $_POST['params']['carte_id'], 'manche_id' => $_POST['params']['id_manche']) ) ;
			
			$query->execute();
			
			
			//$manche2->addMainj1( $carte );
			
			//$em->flush();
		
		}
		
		return "test";*/
		
	}
	
}