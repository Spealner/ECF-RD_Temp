<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity=Roles::class, mappedBy="users")
     */
    private $roles;

    public function __construct()
    {
        $this->chambreFroide = new ArrayCollection();
        $this->roles = new ArrayCollection();
    }

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\OneToMany(targetEntity=ChambreFroide::class, mappedBy="user")
     */
    private $chambreFroide;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     * @return Collection|Roles[]
     */
    public function getRoles(): Collection
    {
        return $this->roles;
    }

    public function addRole(Roles $roles): self
    {
        if (!$this->roles->contains($roles)) {
            $this->roles[] = $roles;
            $roles->addUser($this);
        }

        return $this;
    }

    public function removeRole(Roles $roles): self
    {
        if ($this->roles->contains($roles)) {
            $this->roles->removeElement($roles);
            $roles->removeUser($this);
        }

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getChambreFroide(): Collection
    {
        return $this->chambreFroide;
    }

    public function addChambreFroide(chambreFroide $chambreFroide): self
    {
        if (!$this->chambreFroide->contains($chambreFroide)) {
            $this->chambreFroide[] = $chambreFroide;
            $chambreFroide->setUser($this);
        }

        return $this;
    }

    public function removeChambreFroide(ChambreFroide $chambreFroide): self
    {
        if ($this->chambreFroide->contains($chambreFroide)) {
            $this->chambreFroide->removeElement($chambreFroide);
            if ($chambreFroide->getUser() === $this) {
                $chambreFroide->setUser(null);
            }
        }

        return $this;
    }
}
