<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * moteur
 *
 * @ORM\Table(name="moteur")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\MoteurRepository")
 */
class Moteur
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
     * @ORM\OneToOne(targetEntity="Mbcs\MbcsBundle\Entity\Energie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $energie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="fabRef", type="string", length=50, nullable=true)
     */
    private $fabRef;

    /**
     * @var float
     *
     * @ORM\Column(name="puissance", type="float", nullable=true)
     */
    private $puissance;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return moteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set fabRef
     *
     * @param string $fabRef
     * @return moteur
     */
    public function setFabRef($fabRef)
    {
        $this->fabRef = $fabRef;

        return $this;
    }

    /**
     * Get fabref
     *
     * @return string 
     */
    public function getFabRef()
    {
        return $this->fabRef;
    }

    /**
     * Set puissance
     *
     * @param float $puissance
     * @return moteur
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return float 
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    public function setEnergie($energie)
    {
        $this->energie = $energie;
        return $this;
    }

    public function getEnergie()
    {
        return $this->energie;
    }
}
