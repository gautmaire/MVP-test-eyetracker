<?php

namespace MotBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;

/**
 * MotLu
 *
 * @ORM\Table(name="mot_lu")
 * @ORM\Entity(repositoryClass="MotBundle\Repository\MotLuRepository")
 */
class MotLu
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
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer")
     */
    private $poids;

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
     * @return MotLu
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
     * @return MotLu
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return int
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     *
     * @return MotLu
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
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

