<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    
    /**
     * @ORM\Column(type="string", length=255)
     */

    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_confirmation_email;

    /**
     * @Assert\NotBlank
    */
    /**
     * @ORM\Column(type="string", length=255)
    */
    
    private $mot_de_passe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profil;

   /**
 * @ORM\Column(type="integer")
 */
    private $email_confirme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function get_email_confirme(): ?int
    {
        return $this->email_confirme;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function set_email_confirme(int $email_confirme): self
    {
        $this->email_confirme = $email_confirme;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getemail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCodeConfirmationEmail(): ?string
    {
        return $this->code_confirmation_email;
    }

    public function setCodeConfirmationEmail(string $code_confirmation_email): self
    {
        $this->code_confirmation_email = $code_confirmation_email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    public function getProfil(): ?string
    {
        return $this->profil;
    }

    public function setProfil(string $profil): self
    {
        $this->profil = $profil;

        return $this;
    }
}
