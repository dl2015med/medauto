<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipSerie
 *
 * @ORM\Table(name="equip_serie")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\EquipSerieRepository")
 */
class EquipSerie
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
