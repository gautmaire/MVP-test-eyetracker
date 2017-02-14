<?php

namespace MotBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use TextBundle\Entity\Text;

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
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    /**
     * Set id
     *
     * @param int $id
     *
     * @return MotDico
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
     * Set langue
     *
     * @param string $langue
     *
     * @return MotDico
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

}

