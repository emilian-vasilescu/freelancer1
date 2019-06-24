<?php


namespace App\Model;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Model\AssetType\AssetModel;
use App\Model\AssetType\FinancialAsset;
use App\Model\AssetType\Pension;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Assets
 * @package App\Model
 * @ApiResource(
 *     normalizationContext={"groups"={"profile_read"}},
 *     attributes={"pagination_enabled"=false}
 *     )
 */
class HumanAssets
{
    /**
     * @var int
     * @ApiProperty(identifier=true)
     * @Groups({"ignored_property"})
     */
    protected $id = 1;

    /**
     * @var AssetModel
     * @Groups({"profile_read"})
     */
    private $cash;

    /**
     * @var FinancialAsset
     * @Groups({"profile_read"})
     */
    private $stock;

    /**
     * @var FinancialAsset
     * @Groups({"profile_read"})
     */
    private $bond;

    /**
     * @var FinancialAsset
     * @Groups({"profile_read"})
     */
    private $realEstate;

    /**
     * @var Pension
     * @Groups({"profile_read"})
     */
    private $pension;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * @return AssetModel
     */
    public function getCash(): AssetModel
    {
        return $this->cash;
    }

    /**
     * @param AssetModel $cash
     */
    public function setCash(AssetModel $cash): void
    {
        $this->cash = $cash;
    }

    /**
     * @return FinancialAsset
     */
    public function getStock(): FinancialAsset
    {
        return $this->stock;
    }

    /**
     * @param FinancialAsset $stock
     */
    public function setStock(FinancialAsset $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return FinancialAsset
     */
    public function getBond(): FinancialAsset
    {
        return $this->bond;
    }

    /**
     * @param FinancialAsset $bond
     */
    public function setBond(FinancialAsset $bond): void
    {
        $this->bond = $bond;
    }

    /**
     * @return FinancialAsset
     */
    public function getRealEstate(): FinancialAsset
    {
        return $this->realEstate;
    }

    /**
     * @param FinancialAsset $realEstate
     */
    public function setRealEstate(FinancialAsset $realEstate): void
    {
        $this->realEstate = $realEstate;
    }

    /**
     * @return Pension
     */
    public function getPension(): Pension
    {
        return $this->pension;
    }

    /**
     * @param Pension $pension
     */
    public function setPension(Pension $pension): void
    {
        $this->pension = $pension;
    }
}