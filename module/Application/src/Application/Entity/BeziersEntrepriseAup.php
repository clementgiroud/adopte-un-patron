<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersEntrepriseAup
 *
 * @ORM\Table(name="beziers_entreprise_aup", indexes={@ORM\Index(name="statut", columns={"statut"})})
 * @ORM\Entity
 */
class BeziersEntrepriseAup
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", length=65535, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="recruteurs", type="string", length=255, nullable=false)
     */
    private $recruteurs;

    /**
     * @var \Application\Entity\BeziersStatutJuridiqueAup
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BeziersStatutJuridiqueAup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statut", referencedColumnName="id")
     * })
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
     * Set nom
     *
     * @param string $nom
     *
     * @return BeziersEntrepriseAup
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return BeziersEntrepriseAup
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return BeziersEntrepriseAup
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return BeziersEntrepriseAup
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
     * Set recruteurs
     *
     * @param string $recruteurs
     *
     * @return BeziersEntrepriseAup
     */
    public function setRecruteurs($recruteurs)
    {
        $this->recruteurs = $recruteurs;

        return $this;
    }

    /**
     * Get recruteurs
     *
     * @return string
     */
    public function getRecruteurs()
    {
        return $this->recruteurs;
    }

    /**
     * Set statut
     *
     * @param \Application\Entity\BeziersStatutJuridiqueAup $statut
     *
     * @return BeziersEntrepriseAup
     */
    public function setStatut(\Application\Entity\BeziersStatutJuridiqueAup $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \Application\Entity\BeziersStatutJuridiqueAup
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
