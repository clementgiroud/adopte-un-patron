<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersCandidatureAup
 *
 * @ORM\Table(name="beziers_candidature_aup", indexes={@ORM\Index(name="candidat", columns={"candidat", "annonces"}), @ORM\Index(name="annonces", columns={"annonces"}), @ORM\Index(name="IDX_3B3C36736AB5B471", columns={"candidat"})})
 * @ORM\Entity
 */
class BeziersCandidatureAup
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
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \Application\Entity\BeziersUsersAup
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BeziersUsersAup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidat", referencedColumnName="id")
     * })
     */
    private $candidat;

    /**
     * @var \Application\Entity\BeziersAnnoncesAup
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BeziersAnnoncesAup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="annonces", referencedColumnName="id")
     * })
     */
    private $annonces;



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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return BeziersCandidatureAup
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set candidat
     *
     * @param \Application\Entity\BeziersUsersAup $candidat
     *
     * @return BeziersCandidatureAup
     */
    public function setCandidat(\Application\Entity\BeziersUsersAup $candidat = null)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return \Application\Entity\BeziersUsersAup
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set annonces
     *
     * @param \Application\Entity\BeziersAnnoncesAup $annonces
     *
     * @return BeziersCandidatureAup
     */
    public function setAnnonces(\Application\Entity\BeziersAnnoncesAup $annonces = null)
    {
        $this->annonces = $annonces;

        return $this;
    }

    /**
     * Get annonces
     *
     * @return \Application\Entity\BeziersAnnoncesAup
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }
}
