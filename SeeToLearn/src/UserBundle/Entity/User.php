<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */

    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */

    private $langue;

    /**
     * @var int
     *
     * @ORM\Column(name="nombremotlu", type="integer")
     */

    private $nombremotlu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="nombretextelu", type="integer")
     */

    private $nombretextelu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="dureelecture", type="integer")
     */

    private $dureelecture = 0;

    /**
     * Set id
     *
     * @param int $id
     *
     * @return User
     */

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return int
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
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return User
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set langue
     *
     * @param string $langue
     *
     * @return User
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set nombremotlu
     *
     * @param int $nombremotlu
     *
     * @return User
     */
    public function setNombremotlu($nombremotlu)
    {
        $this->nombremotlu = $nombremotlu;

        return $this;
    }

    /**
     * Get nombremotlu
     *
     * @return int
     */
    public function getNombremotlu()
    {
        return $this->nombremotlu;
    }

    /**
     * Set nombretextelu
     *
     * @param int $nombremotlu
     *
     * @return User
     */
    public function setNombretextelu($nombretextelu)
    {
        $this->nombretextelu = $nombretextelu;

        return $this;
    }

    /**
     * Get nombretextelu
     *
     * @return int
     */
    public function getNombretextelu()
    {
        return $this->nombretextelu;
    }

    /**
     * Set dureelecture
     *
     * @param int $dureelecture
     *
     * @return User
     */
    public function setDureelecture($dureelecture)
    {
        $this->dureelecture = $dureelecture;

        return $this;
    }

    /**
     * Get dureelecture
     *
     * @return int
     */
    public function getDureelecture()
    {
        return $this->dureelecture;
    }
}

