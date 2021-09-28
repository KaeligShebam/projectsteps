<?php

namespace App\Entity;

use App\Repository\StepsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StepsRepository::class)
 */
class Steps
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable="true")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="customer")
     */
    private $customer;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $customerbrief;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $comingsoon;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $customercontentreception;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $picturesreception;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $webdesignprogress;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $webdesignwait;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $webdesignvalidated;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $webintegration;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $webtraining;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $online;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentcustomerbrief;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentcomingsoon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentcustomercontentreception;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentpicturesreception;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentwebdesignprogress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentwebdesignwait;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentwebdesignvalidated;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentwebintegration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentwebtraining;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentonline;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getCustomerbrief(): ?bool
    {
        return $this->customerbrief;
    }

    public function setCustomerbrief(?bool $customerbrief): self
    {
        $this->customerbrief = $customerbrief;

        return $this;
    }

    public function getComingsoon(): ?bool
    {
        return $this->comingsoon;
    }

    public function setComingsoon(?bool $comingsoon): self
    {
        $this->comingsoon = $comingsoon;

        return $this;
    }

    public function getCustomercontentreception(): ?bool
    {
        return $this->customercontentreception;
    }

    public function setCustomercontentreception(?bool $customercontentreception): self
    {
        $this->customercontentreception = $customercontentreception;

        return $this;
    }

    public function getPicturesreception(): ?bool
    {
        return $this->picturesreception;
    }

    public function setPicturesreception(?bool $picturesreception): self
    {
        $this->picturesreception = $picturesreception;

        return $this;
    }

    public function getWebdesignprogress(): ?bool
    {
        return $this->webdesignprogress;
    }

    public function setWebdesignprogress(?bool $webdesignprogress): self
    {
        $this->webdesignprogress = $webdesignprogress;

        return $this;
    }

    public function getWebdesignwait(): ?bool
    {
        return $this->webdesignwait;
    }

    public function setWebdesignwait(?bool $webdesignwait): self
    {
        $this->webdesignwait = $webdesignwait;

        return $this;
    }

    public function getWebdesignvalidated(): ?bool
    {
        return $this->webdesignvalidated;
    }

    public function setWebdesignvalidated(?bool $webdesignvalidated): self
    {
        $this->webdesignvalidated = $webdesignvalidated;

        return $this;
    }

    public function getWebintegration(): ?bool
    {
        return $this->webintegration;
    }

    public function setWebintegration(?bool $webintegration): self
    {
        $this->webintegration = $webintegration;

        return $this;
    }

    public function getWebtraining(): ?bool
    {
        return $this->webtraining;
    }

    public function setWebtraining(?bool $webtraining): self
    {
        $this->webtraining = $webtraining;

        return $this;
    }

    public function getOnline(): ?\DateTimeInterface
    {
        return $this->online;
    }

    public function setOnline(?\DateTimeInterface $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getCommentcustomerbrief(): ?string
    {
        return $this->commentcustomerbrief;
    }

    public function setCommentcustomerbrief(?string $commentcustomerbrief): self
    {
        $this->commentcustomerbrief = $commentcustomerbrief;

        return $this;
    }

    public function getCommentcomingsoon(): ?string
    {
        return $this->commentcomingsoon;
    }

    public function setCommentcomingsoon(?string $commentcomingsoon): self
    {
        $this->commentcomingsoon = $commentcomingsoon;

        return $this;
    }

    public function getCommentcustomercontentreception(): ?string
    {
        return $this->commentcustomercontentreception;
    }

    public function setCommentcustomercontentreception(?string $commentcustomercontentreception): self
    {
        $this->commentcustomercontentreception = $commentcustomercontentreception;

        return $this;
    }

    public function getCommentpicturesreception(): ?string
    {
        return $this->commentpicturesreception;
    }

    public function setCommentpicturesreception(?string $commentpicturesreception): self
    {
        $this->commentpicturesreception = $commentpicturesreception;

        return $this;
    }

    public function getCommentwebdesignprogress(): ?string
    {
        return $this->commentwebdesignprogress;
    }

    public function setCommentwebdesignprogress(?string $commentwebdesignprogress): self
    {
        $this->commentwebdesignprogress = $commentwebdesignprogress;

        return $this;
    }

    public function getCommentwebdesignwait(): ?string
    {
        return $this->commentwebdesignwait;
    }

    public function setCommentwebdesignwait(?string $commentwebdesignwait): self
    {
        $this->commentwebdesignwait = $commentwebdesignwait;

        return $this;
    }

    public function getCommentwebdesignvalidated(): ?string
    {
        return $this->commentwebdesignvalidated;
    }

    public function setCommentwebdesignvalidated(?string $commentwebdesignvalidated): self
    {
        $this->commentwebdesignvalidated = $commentwebdesignvalidated;

        return $this;
    }

    public function getCommentwebintegration(): ?string
    {
        return $this->commentwebintegration;
    }

    public function setCommentwebintegration(?string $commentwebintegration): self
    {
        $this->commentwebintegration = $commentwebintegration;

        return $this;
    }

    public function getCommentwebtraining(): ?string
    {
        return $this->commentwebtraining;
    }

    public function setCommentwebtraining(?string $commentwebtraining): self
    {
        $this->commentwebtraining = $commentwebtraining;

        return $this;
    }

    public function getCommentonline(): ?string
    {
        return $this->commentonline;
    }

    public function setCommentonline(?string $commentonline): self
    {
        $this->commentonline = $commentonline;

        return $this;
    }

}
