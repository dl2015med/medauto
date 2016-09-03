<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\HistoriqueRepository")
 */
class Historique
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
     * @ORM\ManyToOne(targetEntity="Mbcs\MbcsBundle\Entity\Voiture")
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=150)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOp", type="date")
     */
    private $dateOp;


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
     * Set intitule
     *
     * @param string $intitule
     * @return Historique
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateOp
     *
     * @param \DateTime $dateOp
     * @return Historique
     */
    public function setDateOp($dateOp)
    {
        $this->dateOp = $dateOp;

        return $this;
    }

    /**
     * Get dateOp
     *
     * @return \DateTime 
     */
    public function getDateOp()
    {
        return $this->dateOp;
    }

    public function setVoiture($voiture)
    {
        $this->voiture = $voiture;
        return $this;
    }
    public function getVoiture()
    {
        return $this->voiture;
    }
}
