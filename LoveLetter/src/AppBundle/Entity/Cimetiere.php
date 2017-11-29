<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Cimetiere
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $arrayCarte;

    public function __construct()
    {
		$this->arrayCarte = array();
    }
	
	public getCarte() {
		return $this->arrayCarte;
	}
	
	
}