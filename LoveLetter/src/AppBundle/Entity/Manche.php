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
	 * @ORM\Column(name="manche_j1_main", type="array")
	 */
	private $mainj1;
	
	/**
	 * @ORM\Column(name="manche_j2_main", type="array")
	 */
	private $mainj2;

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

    /**
     * Set mainj1
     *
     * @param array $mainj1
     *
     * @return Manche
     */
    public function setMainj1($mainj1)
    {
        $this->mainj1 = $mainj1;

        return $this;
    }
	
	
	/**
     * Add mainj1
     *
     * @param integer $carte_id
     *
     * @return Manche
     */
	public function addMainj1($carte_id)
    {
        $this->mainj1[] = $carte_id;

        return $this;
    }

    /**
     * Get mainj1
     *
     * @return array
     */
    public function getMainj1()
    {
        return $this->mainj1;
    }
	
	
	public function removeMainj1( $carte_id )
    {
        $this->mainj1->removeElement($carte_id);
    }

    /**
     * Set mainj2
     *
     * @param array $mainj2
     *
     * @return Manche
     */
    public function setMainj2($mainj2)
    {
        $this->mainj2 = $mainj2;

        return $this;
    }
	
	
	/**
     * Add mainj2
     *
     * @param integer $carte_id
     *
     * @return Manche
     */
	public function addMainj2($carte_id)
    {
        $this->mainj2[] = $carte_id;

        return $this;
    }

    /**
     * Get mainj2
     *
     * @return array
     */
    public function getMainj2()	
    {
        return $this->mainj2;
    }
	
	
	
	public function removeMainj2($carte_id)
    {
        $this->mainj2->removeElement($carte_id);
    }
	
	
	
}
