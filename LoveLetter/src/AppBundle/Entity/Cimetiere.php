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
    protected $nom, $type;

    public function __construct($n, $t )
    {
		$nom = $n;
		$type = $p;
    }
	
	
}