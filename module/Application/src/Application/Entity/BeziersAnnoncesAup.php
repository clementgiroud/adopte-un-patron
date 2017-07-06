<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersAnnoncesAup
 *
 * @ORM\Table(name="beziers_annonces_aup", indexes={@ORM\Index(name="contrat", columns={"contrat"})})
 * @ORM\Entity
 */
class BeziersAnnoncesAup
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
     * @var integer
     *
     * @ORM\Column(name="salaire", type="smallint", nullable=false)
     */
    private $salaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="smallint", nullable=false)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="experience", type="smallint", nullable=false)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=255, nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=255, nullable=false)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", length=65535, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255, nullable=true)
     */
    private $grade;

    /**
     * @var \Application\Entity\BeziersTypeDeContratAup
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BeziersTypeDeContratAup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contrat", referencedColumnName="id")
     * })
     */
    private $contrat;



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
     * Set salaire
     *
     * @param integer $salaire
     *
     * @return BeziersAnnoncesAup
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return integer
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return BeziersAnnoncesAup
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return BeziersAnnoncesAup
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return BeziersAnnoncesAup
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return BeziersAnnoncesAup
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

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return BeziersAnnoncesAup
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return BeziersAnnoncesAup
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return BeziersAnnoncesAup
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set contrat
     *
     * @param \Application\Entity\BeziersTypeDeContratAup $contrat
     *
     * @return BeziersAnnoncesAup
     */
    public function setContrat(\Application\Entity\BeziersTypeDeContratAup $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \Application\Entity\BeziersTypeDeContratAup
     */
    public function getContrat()
    {
        return $this->contrat;
    }
}
