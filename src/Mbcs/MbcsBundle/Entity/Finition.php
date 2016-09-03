<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finition
 *
 * @ORM\Table(name="finition")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\FinitionRepository")
 */
class Finition
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;


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
     * @return Finition
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
    
    public function getVersion()
    {
        return $this->version;    
    }
    public function setVersion($version)
    {
        $this->version=$version;
    }



}
