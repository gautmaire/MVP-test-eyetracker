<?php

namespace TextBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;

/**
 * Text
 *
 * @ORM\Table(name="text")
 * @ORM\Entity(repositoryClass="TextBundle\Repository\TextRepository")
 */
class Text
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
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    /**
     * @var Text
     *
     * @ORM\Column(name="resume", type="text")
     */
    private $resume;

    /**
     * @var Text
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrelu", type="integer", options={"default" : 0})
     */
    private $nombrelu;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer", options={"default" : 0})
     */
    private $note;


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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Text
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Text
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
     * Set langue
     *
     * @param string $langue
     *
     * @return Text
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
     * Set resume
     *
     * @param Text $resume
     *
     * @return Text
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return Text
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set contenu
     *
     * @param Text $contenu
     *
     * @return Text
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return Text
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set niveau
     *
     * @param string $titre
     *
     * @return Text
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
     * Set nombrelu
     *
     * @param int $nombrelu
     *
     * @return Text
     */
    public function setNombrelu($nombrelu)
    {
        $this->nombrelu = $nombrelu;

        return $this;
    }

    /**
     * Get nombrelu
     *
     * @return Text
     */
    public function getNombrelu()
    {
        return $this->nombrelu;
    }

    /**
     * Set note
     *
     * @param int $note
     *
     * @return Text
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return Text
     */
    public function getNote()
    {
        return $this->note;
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

