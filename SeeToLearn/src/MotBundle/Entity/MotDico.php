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
     * @ORM\ManyToMany(targetEntity="TextBundle\Entity\Text", cascade={"persist"})
     */
    private $text;

    public function __construct()
    {
        $this->text = new ArrayCollection();
    }

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

    public function addText(Text $text)
    {
        $this->text[] = $text;
        return $this;
    }

    public function removeText(Text $text)
    {
        $this->text->removeElement($text);
    }

    public function getText()
    {
        return $this->text;
    }
}

