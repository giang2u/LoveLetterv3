<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manche
 *
 * @ORM\Table(name="manche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MancheRepository")
 */
class Manche
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Partie")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $partie;
	
	
	/**
	 * @ORM\Column(name="manche_deck", type="array")
	 */
	private $cartes;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set partie
     *
     * @param \AppBundle\Entity\Partie $partie
     *
     * @return Manche
     */
    public function setPartie(\AppBundle\Entity\Partie $partie)
    {
        $this->partie = $partie;

        return $this;
    }

    /**
     * Get partie
     *
     * @return \AppBundle\Entity\Partie
     */
    public function getPartie()
    {
        return $this->partie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartes = array();
    }

    /**
     * Add carte
     *
     * @param \AppBundle\Entity\Carte $carte
     *
     * @return Manche
     */
    public function addCarte(\AppBundle\Entity\Carte $carte)
    {
        $this->cartes[] = $carte;

        return $this;
    }

    /**
     * Remove carte
     *
     * @param \AppBundle\Entity\Carte $carte
     */
    public function removeCarte(\AppBundle\Entity\Carte $carte)
    {
        $this->cartes->removeElement($carte);
    }

    /**
     * Get cartes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartes()
    {
        return $this->cartes;
    }

    /**
     * Set cartes
     *
     * @param array $cartes
     *
     * @return Manche
     */
    public function setCartes($cartes)
    {
        $this->cartes = $cartes;

        return $this;
    }
}
