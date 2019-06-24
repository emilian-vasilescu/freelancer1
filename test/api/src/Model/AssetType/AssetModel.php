<?php


namespace App\Model\AssetType;


use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class AssetModel
 * @package App\Model\Asset
 * @ApiResource(
 *     attributes={"pagination_enabled"=false},
 *     normalizationContext={"groups"={"profile_read"}}
 *     )
 */
class AssetModel
{
    /**
     * @var string
     * @ApiProperty(identifier=true)
     * @Groups({"profile_read"})
     */
    protected $code;

    /**
     * @var int
     * @Groups({"profile_read"})
     */
    private $minRate = 0;

    /**
     * @var int
     * @Groups({"profile_read"})
     */
    private $maxRate = 1;

    /**
     * @var bool
     * @Groups({"profile_read"})
     */
    private $available = true;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

    /**
     * @return int
     */
    public function getMinRate(): int
    {
        return $this->minRate;
    }

    /**
     * @param int $minRate
     */
    public function setMinRate(int $minRate): void
    {
        $this->minRate = $minRate;
    }

    /**
     * @return int
     */
    public function getMaxRate(): int
    {
        return $this->maxRate;
    }

    /**
     * @param int $maxRate
     */
    public function setMaxRate(int $maxRate): void
    {
        $this->maxRate = $maxRate;
    }

}