<?php


namespace App\Model\AssetType;


use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FinancialAsset
 * @ApiResource(
 *     attributes={"pagination_enabled"=false},
 *     normalizationContext={"groups"={"profile_read"}}
 *     )
 */
class FinancialAsset
{
    /**
     * @var string
     * @ApiProperty(identifier=true)
     * @Groups({"profile_read"})
     */
    protected $code;

    /**
     * @var AssetModel|array<string, string>
     * @Groups({"profile_read"})
     */
    private $asset;

    /**
     * @var bool
     * @Groups({"profile_read"})
     */
    private $available = true;

    /**
     * @var int
     * @Groups({"profile_read"})
     * @Assert\NotBlank()
     */
    private $minRate = 0;

    /**
     * @var int
     * @Groups({"profile_read"})
     */
    private $maxRate = 1;

    public function __construct()
    {
        $this->asset = [];
    }

    /**
     * @return AssetModel|array<string, string>
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * @param AssetModel|array<string, string> $asset
     */
    public function setAsset($asset): void
    {
        $this->asset = $asset;
    }

    /**
     * add specific asset to the stocks collection
     * @param AssetModel $assetProperty
     */
    public function addAsset(AssetModel $assetProperty)
    {
        $this->asset[$assetProperty->getCode()] = $assetProperty;
    }

    /**
     * remove specific asset
     * @param AssetModel $assetProperty
     */
    public function removeAsset(AssetModel $assetProperty)
    {
       unset($this->asset[$assetProperty->getCode()]);
    }

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
