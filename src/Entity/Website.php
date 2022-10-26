<?php

namespace App\Entity;

use App\Repository\WebsiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WebsiteRepository::class)
 */
class Website
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
    private $domainname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $websitetype;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomainname(): ?string
    {
        return $this->domainname;
    }

    public function setDomainname(string $domainname): self
    {
        $this->domainname = $domainname;

        return $this;
    }

    public function getWebsitetype(): ?string
    {
        return $this->websitetype;
    }

    public function setWebsitetype(string $websitetype): self
    {
        $this->websitetype = $websitetype;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
