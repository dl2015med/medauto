<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\VoitureRepository")
 */
class Voiture
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
     * @ORM\ManyToOne(targetEntity="Mbcs\MbcsBundle\Entity\Version")
     * @ORM\JoinColumn(nullable=false)
     */
    private $version;

    /**
     * @ORM\ManyToOne(targetEntity="Mbcs\MbcsBundle\Entity\Situation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $situation;

    /**
     * @var string
     *
     * @ORM\Column(name="immat", type="string", length=15)
     */
    private $immat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCircul", type="date")
     */
    private $dateCircul;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="nbportes", type="smallint", nullable=true)
     */
    private $nbportes;

    /**
     * @var int
     *
     * @ORM\Column(name="nbplaces", type="smallint", nullable=true)
     */
    private $nbplaces;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=15, nullable=true)
     */
    private $couleur;


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
     * Set immat
     *
     * @param string $immat
     * @return Voiture
     */
    public function setImmat($immat)
    {
        $this->immat = $immat;

        return $this;
    }

    /**
     * Get immat
     *
     * @return string 
     */
    public function getImmat()
    {
        return $this->immat;
    }

    /**
     * Set dateCircul
     *
     * @param \DateTime $dateCircul
     * @return Voiture
     */
    public function setDateCircul($dateCircul)
    {
        $this->dateCircul = $dateCircul;

        return $this;
    }

    /**
     * Get dateCircul
     *
     * @return \DateTime 
     */
    public function getDateCircul()
    {
        return $this->dateCircul;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Voiture
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Voiture
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set nbportes
     *
     * @param integer $nbportes
     * @return Voiture
     */
    public function setNbportes($nbportes)
    {
        $this->nbportes = $nbportes;

        return $this;
    }

    /**
     * Get nbportes
     *
     * @return integer 
     */
    public function getNbportes()
    {
        return $this->nbportes;
    }

    /**
     * Set nbplaces
     *
     * @param integer $nbplaces
     * @return Voiture
     */
    public function setNbplaces($nbplaces)
    {
        $this->nbplaces = $nbplaces;

        return $this;
    }

    /**
     * Get nbplaces
     *
     * @return integer 
     */
    public function getNbplaces()
    {
        return $this->nbplaces;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Voiture
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setSituation($situation)
    {
        $this->situation = $situation;
        return $this;
    }

    public function getSituation()
    {
        return $this->situation;
    }

}
