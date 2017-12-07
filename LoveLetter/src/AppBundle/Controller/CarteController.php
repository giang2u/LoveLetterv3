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
	
	public function addAction($id,$r,  $manche) {
			
			
			var_dump($_POST['carte_id']);
				//if (isset($_POST['carte_id']) && $_POST['id_joueur'] == 1 ) 
			
			$em = $this->getDoctrine()->getManager();
			
			$carte = new Carte("Guard");
		$carte->setCarteNom("Guard");
		$carte->setCarteUrl("/LoveLetterv3/LoveLetter/web/img/Guard.png");
		
		$em->persist($carte);
		
		$em->flush();
			
			/*
			$carte = new Carte( $id );
			
			$manche2 = $em->getRepository('AppBundle:Manche')->find( $manche );
			
			$manche2->addMainj1( $carte );
			
			$em->persist($manche2);
			
			$em->flush();
			
			
			$carte = new Carte( $_POST['carte_id'] );
			
			$manche2 = $em->getRepository('AppBundle:Manche')->find( $_POST['id_manche']);
			
			$manche2->addMainj1( $carte );
			
			$em->persist($manche2);
			
			$em->flush();
			
			
			$query = $em->createQuery( //creation de la requête
				'INSERT INTO Manche (manche_j1_main) Values :id WHERE manche_id=:manche_id')->setParameters(array('id' => $_POST['carte_id'], 'manche_id' => $_POST['id_manche']) ) ;
				
				
			$query->execute();

			
			$query = $em->createQuery(	
				'INSERT INTO Manche (manche_j1_main) Values :id WHERE manche_id=:manche_id')->setParameters(array('id' => $id, 'manche_id' => $manche ) ) ;
			
			$query->execute();
		
	*/
		
		
	}
	
}