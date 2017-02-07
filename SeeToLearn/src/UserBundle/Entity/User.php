<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use LangueBundle\Entity\NiveauLangue;

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
     * @ORM\ManyToMany(targetEntity="LangueBundle\Entity\NiveauLangue", cascade={"persist"})
     */

    private $niveaulangue;

    /**
     * @ORM\ManyToMany(targetEntity="TextBundle\Entity\Text", cascade={"persist"})
     */

    private $text;

    public function __construct()
    {
        $this->niveaulangue = new ArrayCollection();
        $this->text = new ArrayCollection();
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

    public function addNiveauLangue(NiveauLangue $niveaulangue)
    {
        $this->niveaulangue[] = $niveaulangue;
        return $this;
    }

    public function removeNiveauLangue(NiveauLangue $niveauLangue)
    {
        $this->niveaulangue->removeElement($niveauLangue);
    }

    public function getNiveauLangue()
    {
        return $this->niveaulangue;
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

