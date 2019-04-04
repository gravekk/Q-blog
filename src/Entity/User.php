<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @ORM\Column(type="string", length=180)
     */


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $short_info;

    /**
     * @ORM\Column(type="datetime")
     */
    private $add_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $born_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $friend;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $feeds;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $followers;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $followed;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

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
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
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
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }



    public function getShortInfo(): ?string
    {
        return $this->short_info;
    }

    public function setShortInfo(?string $short_info): self
    {
        $this->short_info = $short_info;

        return $this;
    }

    public function getAddDate(): ?\DateTimeInterface
    {
        return $this->add_date;
    }

    public function setAddDate(\DateTimeInterface $add_date): self
    {
        $this->add_date = $add_date;

        return $this;
    }

    public function getBornDate(): ?\DateTimeInterface
    {
        return $this->born_date;
    }

    public function setBornDate(?\DateTimeInterface $born_date): self
    {
        $this->born_date = $born_date;

        return $this;
    }

    public function getFriend(): ?string
    {
        return $this->friend;
    }

    public function setFriend(string $friend): self
    {
        $this->friend = $friend;

        return $this;
    }

    public function getFeeds(): ?string
    {
        return $this->feeds;
    }

    public function setFeeds(?string $feeds): self
    {
        $this->feeds = $feeds;

        return $this;
    }

    public function getFollowers(): ?string
    {
        return $this->followers;
    }

    public function setFollowers(?string $followers): self
    {
        $this->followers = $followers;

        return $this;
    }

    public function getFollowed(): ?string
    {
        return $this->followed;
    }

    public function setFollowed(?string $followed): self
    {
        $this->followed = $followed;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }
}
