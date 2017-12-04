<?php
// src/AppBundle/Entity/Cimetiere.php

namespace AppBundle\Entity;


class Cimetiere
{
   
    protected $arrayCarte;

    public function __construct()
    {
		$this->arrayCarte = array();
    }
	
	public getCarte() {
		return $this->arrayCarte;
	}
	
	
}