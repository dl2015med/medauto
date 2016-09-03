<?php

namespace Mbcs\MbcsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipOption
 *
 * @ORM\Table(name="equip_option")
 * @ORM\Entity(repositoryClass="Mbcs\MbcsBundle\Repository\EquipOptionRepository")
 */
class EquipOption
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
