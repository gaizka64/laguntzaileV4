<?php

namespace laguntzaile\BenevolesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lot
 *
 * @ORM\Table(name="lot", indexes={@ORM\Index(name="lot_date_de_creation_idx", columns={"date_de_creation"}), @ORM\Index(name="lot_traite_idx", columns={"traite"})})
 * @ORM\Entity
 */
class Lot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lot_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_creation", type="datetime", nullable=false)
     */
    private $dateDeCreation = 'now()';

    /**
     * @var integer
     *
     * @ORM\Column(name="cle", type="integer", nullable=false)
     */
    private $cle = '(((((2)::double precision ^ (31)::double precision) - (1)::double precision) * random()))::integer';

    /**
     * @var boolean
     *
     * @ORM\Column(name="traite", type="boolean", nullable=false)
     */
    private $traite = false;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", nullable=true)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="expediteur", type="string", nullable=true)
     */
    private $expediteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", inversedBy="idLot")
     * @ORM\JoinTable(name="lot_personne",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_lot", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_personne", referencedColumnName="id")
     *   }
     * )
     */
    private $idPersonne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Affectation", inversedBy="idLot")
     * @ORM\JoinTable(name="lot_affectation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_lot", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_affectation", referencedColumnName="id")
     *   }
     * )
     */
    private $idAffectation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPersonne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idAffectation = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set titre
     *
     * @param string $titre
     * @return Lot
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateDeCreation
     *
     * @param \DateTime $dateDeCreation
     * @return Lot
     */
    public function setDateDeCreation($dateDeCreation)
    {
        $this->dateDeCreation = $dateDeCreation;

        return $this;
    }

    /**
     * Get dateDeCreation
     *
     * @return \DateTime 
     */
    public function getDateDeCreation()
    {
        return $this->dateDeCreation;
    }

    /**
     * Set cle
     *
     * @param integer $cle
     * @return Lot
     */
    public function setCle($cle)
    {
        $this->cle = $cle;

        return $this;
    }

    /**
     * Get cle
     *
     * @return integer 
     */
    public function getCle()
    {
        return $this->cle;
    }

    /**
     * Set traite
     *
     * @param boolean $traite
     * @return Lot
     */
    public function setTraite($traite)
    {
        $this->traite = $traite;

        return $this;
    }

    /**
     * Get traite
     *
     * @return boolean 
     */
    public function getTraite()
    {
        return $this->traite;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Lot
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set expediteur
     *
     * @param string $expediteur
     * @return Lot
     */
    public function setExpediteur($expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return string 
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Add idPersonne
     *
     * @param \laguntzaile\BenevolesBundle\Entity\Personne $idPersonne
     * @return Lot
     */
    public function addIdPersonne(\laguntzaile\BenevolesBundle\Entity\Personne $idPersonne)
    {
        $this->idPersonne[] = $idPersonne;

        return $this;
    }

    /**
     * Remove idPersonne
     *
     * @param \laguntzaile\BenevolesBundle\Entity\Personne $idPersonne
     */
    public function removeIdPersonne(\laguntzaile\BenevolesBundle\Entity\Personne $idPersonne)
    {
        $this->idPersonne->removeElement($idPersonne);
    }

    /**
     * Get idPersonne
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Add idAffectation
     *
     * @param \laguntzaile\BenevolesBundle\Entity\Affectation $idAffectation
     * @return Lot
     */
    public function addIdAffectation(\laguntzaile\BenevolesBundle\Entity\Affectation $idAffectation)
    {
        $this->idAffectation[] = $idAffectation;

        return $this;
    }

    /**
     * Remove idAffectation
     *
     * @param \laguntzaile\BenevolesBundle\Entity\Affectation $idAffectation
     */
    public function removeIdAffectation(\laguntzaile\BenevolesBundle\Entity\Affectation $idAffectation)
    {
        $this->idAffectation->removeElement($idAffectation);
    }

    /**
     * Get idAffectation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAffectation()
    {
        return $this->idAffectation;
    }
}
