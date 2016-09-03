<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table(name="version")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\VersionRepository")
 */
class Version
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
     * @ORM\OneToOne(targetEntity="Mbcs\MbcsBundle\Entity\Modele", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $modele;
    
    /**
     * @ORM\OneToOne(targetEntity="Mbcs\MbcsBundle\Entity\Moteur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $moteur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortie", type="date", nullable=true)
     */
    private $dateSortie;


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
     * @return Version
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
     * Set image
     *
     * @param string $image
     * @return Version
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
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     * @return Version
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }
    public function getModele()
    {
        return $this->modele;
    }
    
    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;
        return $this;
    }
    public function getMoteur()
    {
        return $this->moteur;
    }
}
