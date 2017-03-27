<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersTableStatistiquesAup
 *
 * @ORM\Table(name="beziers_table_statistiques_aup")
 * @ORM\Entity
 */
class BeziersTableStatistiquesAup
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
     * @ORM\Column(name="candidats", type="integer", nullable=false)
     */
    private $candidats;

    /**
     * @var integer
     *
     * @ORM\Column(name="offres", type="integer", nullable=false)
     */
    private $offres;

    /**
     * @var integer
     *
     * @ORM\Column(name="recruteurs", type="integer", nullable=false)
     */
    private $recruteurs;

    /**
     * @var integer
     *
     * @ORM\Column(name="evenement", type="integer", nullable=false)
     */
    private $evenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="news", type="integer", nullable=false)
     */
    private $news;

    /**
     * @var integer
     *
     * @ORM\Column(name="messages", type="integer", nullable=false)
     */
    private $messages;



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
     * Set candidats
     *
     * @param integer $candidats
     *
     * @return BeziersTableStatistiquesAup
     */
    public function setCandidats($candidats)
    {
        $this->candidats = $candidats;

        return $this;
    }

    /**
     * Get candidats
     *
     * @return integer
     */
    public function getCandidats()
    {
        return $this->candidats;
    }

    /**
     * Set offres
     *
     * @param integer $offres
     *
     * @return BeziersTableStatistiquesAup
     */
    public function setOffres($offres)
    {
        $this->offres = $offres;

        return $this;
    }

    /**
     * Get offres
     *
     * @return integer
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Set recruteurs
     *
     * @param integer $recruteurs
     *
     * @return BeziersTableStatistiquesAup
     */
    public function setRecruteurs($recruteurs)
    {
        $this->recruteurs = $recruteurs;

        return $this;
    }

    /**
     * Get recruteurs
     *
     * @return integer
     */
    public function getRecruteurs()
    {
        return $this->recruteurs;
    }

    /**
     * Set evenement
     *
     * @param integer $evenement
     *
     * @return BeziersTableStatistiquesAup
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

    /**
     * Set news
     *
     * @param integer $news
     *
     * @return BeziersTableStatistiquesAup
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return integer
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set messages
     *
     * @param integer $messages
     *
     * @return BeziersTableStatistiquesAup
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get messages
     *
     * @return integer
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
