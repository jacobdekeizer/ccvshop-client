<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Paymethods;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Paymethods implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int The id of the Payment Service Provider. This can be used to filter in the order resource.
     */
    private int $id;

    /**
     * @var string The name of the Payment Service Provider.
     */
    private string $psp;

    /**
     * @var string The Payment method, can be a sub brand of the psp.
     */
    private string $method;

    /**
     * @var string Combination of psp and method. This is also found in the paymethod field in orders.
     */
    private string $combinedName;

    /**
     * @var string This is similar to combined_name, but with a more human readable translation.
     */
    private string $label;

    /**
     * @var bool True if extra costs are added to an order with this paymethod is used.
     */
    private bool $extraCosts;

    /**
     * @var float The fixed amount that will be added to the order costs.
     */
    private float $extraCostsFixed;

    /**
     * @var float The percantage amount that will be added to the order costs.
     */
    private float $extraCostsPercentage;

    /**
     * @var string|null Link to the App PSP resource. Will be null if this paymethod is not owned by a app psp. If you don't own this app psp, an error 500 will be thrown.
     */
    private ?string $apppsp;

    /**
     * @var string|null Link to the App PSP Paymethod resource. Will be null if this paymethod is not owned by a app psp. If you don't own this app psp, an error 500 will be thrown.
     */
    private ?string $apppsppaymethod;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return int The id of the Payment Service Provider. This can be used to filter in the order resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string The name of the Payment Service Provider.
     */
    public function getPsp(): string
    {
        return $this->psp;
    }

    /**
     * @return string The Payment method, can be a sub brand of the psp.
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string Combination of psp and method. This is also found in the paymethod field in orders.
     */
    public function getCombinedName(): string
    {
        return $this->combinedName;
    }

    /**
     * @return string This is similar to combined_name, but with a more human readable translation.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return bool True if extra costs are added to an order with this paymethod is used.
     */
    public function getExtraCosts(): bool
    {
        return $this->extraCosts;
    }

    /**
     * @return float The fixed amount that will be added to the order costs.
     */
    public function getExtraCostsFixed(): float
    {
        return $this->extraCostsFixed;
    }

    /**
     * @return float The percantage amount that will be added to the order costs.
     */
    public function getExtraCostsPercentage(): float
    {
        return $this->extraCostsPercentage;
    }

    /**
     * @return string|null Link to the App PSP resource. Will be null if this paymethod is not owned by a app psp. If you don't own this app psp, an error 500 will be thrown.
     */
    public function getApppsp(): ?string
    {
        return $this->apppsp;
    }

    /**
     * @return string|null Link to the App PSP Paymethod resource. Will be null if this paymethod is not owned by a app psp. If you don't own this app psp, an error 500 will be thrown.
     */
    public function getApppsppaymethod(): ?string
    {
        return $this->apppsppaymethod;
    }

    /**
     * @param int $id The id of the Payment Service Provider. This can be used to filter in the order resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $psp The name of the Payment Service Provider.
     * @return self
     */
    public function setPsp(string $psp): self
    {
        $this->psp = $psp;
        return $this;
    }

    /**
     * @param string $method The Payment method, can be a sub brand of the psp.
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param string $combinedName Combination of psp and method. This is also found in the paymethod field in orders.
     * @return self
     */
    public function setCombinedName(string $combinedName): self
    {
        $this->combinedName = $combinedName;
        return $this;
    }

    /**
     * @param string $label This is similar to combined_name, but with a more human readable translation.
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @param bool $extraCosts True if extra costs are added to an order with this paymethod is used.
     * @return self
     */
    public function setExtraCosts(bool $extraCosts): self
    {
        $this->extraCosts = $extraCosts;
        return $this;
    }

    /**
     * @param float $extraCostsFixed The fixed amount that will be added to the order costs.
     * @return self
     */
    public function setExtraCostsFixed(float $extraCostsFixed): self
    {
        $this->extraCostsFixed = $extraCostsFixed;
        return $this;
    }

    /**
     * @param float $extraCostsPercentage The percantage amount that will be added to the order costs.
     * @return self
     */
    public function setExtraCostsPercentage(float $extraCostsPercentage): self
    {
        $this->extraCostsPercentage = $extraCostsPercentage;
        return $this;
    }

    /**
     * @param string|null $apppsp Link to the App PSP resource. Will be null if this paymethod is not owned by a app psp. If you don't own this app psp, an error 500 will be thrown.
     * @return self
     */
    public function setApppsp(?string $apppsp): self
    {
        $this->apppsp = $apppsp;
        return $this;
    }

    /**
     * @param string|null $apppsppaymethod Link to the App PSP Paymethod resource. Will be null if this paymethod is not owned by a app psp. If you don't own this app psp, an error 500 will be thrown.
     * @return self
     */
    public function setApppsppaymethod(?string $apppsppaymethod): self
    {
        $this->apppsppaymethod = $apppsppaymethod;
        return $this;
    }
}
