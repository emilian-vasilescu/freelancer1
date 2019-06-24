<?php


namespace App\Model\AssetType;


use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Pension
 * @ApiResource(
 *     attributes={"pagination_enabled"=false},
 *     normalizationContext={"groups"={"profile_read"}}
 *     )
 */
class Pension
{
    /**
     * @var string
     * @ApiProperty(identifier=true)
     * @Groups({"profile_read"})
     */
    protected $code;

    /**
     * @var bool
     * @Groups({"profile_read"})
     */
    private $available = true;

    /**
     * @var AssetProperty|array<string, AssetProperty>
     * @Groups({"profile_read"})
     */
    private $assetProperty;

    public function __construct()
    {
        $this->assetProperty = [];
    }

    /**
     * @return AssetProperty|array<string, AssetProperty>
     */
    public function getAssetProperty()
    {
        return $this->assetProperty;
    }

    /**
     * @param AssetProperty|array<string, AssetProperty> $assetProperty
     */
    public function setAssetProperty($assetProperty): void
    {
        $this->assetProperty = $assetProperty;
    }

    /**
     * @param AssetProperty $pilar
     */
    public function addAssetProperty(AssetProperty $pilar)
    {

        $this->assetProperty[$pilar->getCode()] = $pilar;
    }

    /**
     * @param AssetProperty $pilar
     */
    public function removeAssetProperty(AssetProperty $pilar)
    {
        unset($this->assetProperty[$pilar->getCode()]);
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

}
