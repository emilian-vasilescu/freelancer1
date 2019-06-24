<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Model\HumanAssets;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(attributes={
 *  "normalization_context"={"groups"={"profile_read"}},
 *  "order"={"id": "DESC"}
 * })
 * @ORM\Entity(repositoryClass="App\Repository\HumanRepository")
 */
class Human
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"profile_read"})
     */
    private $name;

    /**
     * @var HumanAssets
     * @ORM\Column(type="json")
     * @Groups({"profile_read"})
     */
    private $humanAssets;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return HumanAssets
     */
    public function getHumanAssets(): HumanAssets
    {
        return $this->humanAssets;
    }

    /**
     * @param HumanAssets $humanAssets
     */
    public function setHumanAssets(HumanAssets $humanAssets): void
    {
        $this->humanAssets = $humanAssets;
    }

}
