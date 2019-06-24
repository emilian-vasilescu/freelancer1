<?php


namespace App\Model\AssetType;


use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class AssetProperty
 * @ApiResource(
 *     attributes={"pagination_enabled"=false}
 *     )
 */
class AssetProperty
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
