<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersStatutJuridiqueAup
 *
 * @ORM\Table(name="beziers_statut_juridique_aup")
 * @ORM\Entity
 */
class BeziersStatutJuridiqueAup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;



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
     * Set statut
     *
     * @param string $statut
     *
     * @return BeziersStatutJuridiqueAup
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
