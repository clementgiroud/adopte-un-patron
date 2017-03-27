<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersImagesEvenementAup
 *
 * @ORM\Table(name="beziers_images_evenement_aup")
 * @ORM\Entity
 */
class BeziersImagesEvenementAup
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
     * @ORM\Column(name="chemin", type="string", length=255, nullable=false)
     */
    private $chemin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="principale", type="boolean", nullable=false)
     */
    private $principale;

    /**
     * @var integer
     *
     * @ORM\Column(name="evenement", type="integer", nullable=false)
     */
    private $evenement;



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
     * Set chemin
     *
     * @param string $chemin
     *
     * @return BeziersImagesEvenementAup
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set principale
     *
     * @param boolean $principale
     *
     * @return BeziersImagesEvenementAup
     */
    public function setPrincipale($principale)
    {
        $this->principale = $principale;

        return $this;
    }

    /**
     * Get principale
     *
     * @return boolean
     */
    public function getPrincipale()
    {
        return $this->principale;
    }

    /**
     * Set evenement
     *
     * @param integer $evenement
     *
     * @return BeziersImagesEvenementAup
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return integer
     */
    public function getEvenement()
    {
        return $this->evenement;
    }
}
