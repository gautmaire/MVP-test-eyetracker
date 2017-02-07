<?php

namespace MotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MotDico
 *
 * @ORM\Table(name="mot_dico")
 * @ORM\Entity(repositoryClass="MotBundle\Repository\MotDicoRepository")
 */
class MotDico
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
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="DictionnaireBundle\Entity\Dictionnaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dictionnaire;

    /**
    * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User", cascade={"persist"})
    */
    private $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
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
     * Set valeur
     *
     * @param string $valeur
     *
     * @return MotDico
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set nombre
     *
     * @param integer $nombre
     *
     * @return MotDico
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get nombre
     *
     * @return integer
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setDictionnaire(Dictionnaire $dictionnaire)
    {
        $this->dictionnaire = $dictionnaire;
        return $this;
    }

    public function getDictionnaire()
    {
        return $this->dictionnaire;
    }

    public function addUser(User $user)
    {
        $this->user[] = $user;
        return $this;
    }

    public function removeUser(User $user)
    {
        $this->user->removeElement($user);
    }

    public function getUser()
    {
        return $this->user;
    }
}

