<?php
// src/AppBundle/Entity/Tour.php

namespace AppBundle\Entity;


class Tour
{
    /**
     * @ORM\nom
     * @ORM\Column(name="tour_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nom
	
	protected $type;

    public function __construct($n, $t )
    {
		$nom = $n;
		$type = $p;
    }
	
	
}