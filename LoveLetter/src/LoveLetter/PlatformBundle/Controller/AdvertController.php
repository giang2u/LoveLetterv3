<?php

namespace LoveLetter\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:index.html.twig');
    	return new Response($content);
    }

    public function newUsersAction(){
    	$content = $this->get('templating')->render('LoveLetterPlatformBundle:Advert:newusers.html.twig');
    	return new Response($content);
    }
}
