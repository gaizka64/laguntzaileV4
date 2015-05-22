<?php

namespace laguntzaile\BenevolesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table(name="responsable", uniqueConstraints={@ORM\UniqueConstraint(name="responsable_id_personne_id_poste_key", columns={"id_personne", "id_poste"})}, indexes={@ORM\Index(name="IDX_52520D07920C4E9B", columns={"id_poste"}), @ORM\Index(name="IDX_52520D075F15257A", columns={"id_personne"})})
 * @ORM\Entity
 */
class Responsable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="responsable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Poste
     *
     * @ORM\ManyToOne(targetEntity="Poste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_poste", referencedColumnName="id")
     * })
     */
    private $idPoste;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id")
     * })
     */
    private $idPersonne;



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
     * Set idPoste
     *
     * @param \laguntzaile\BenevolesBundle\Entity\Poste $idPoste
     * @return Responsable
     */
    public function setIdPoste(\laguntzaile\BenevolesBundle\Entity\Poste $idPoste = null)
    {
        $this->idPoste = $idPoste;

        return $this;
    }

    /**
     * Get idPoste
     *
     * @return \laguntzaile\BenevolesBundle\Entity\Poste 
     */
    public function getIdPoste()
    {
        return $this->idPoste;
    }

    /**
     * Set idPersonne
     *
     * @param \laguntzaile\BenevolesBundle\Entity\Personne $idPersonne
     * @return Responsable
     */
    public function setIdPersonne(\laguntzaile\BenevolesBundle\Entity\Personne $idPersonne = null)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }

    /**
     * Get idPersonne
     *
     * @return \laguntzaile\BenevolesBundle\Entity\Personne 
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }
}
