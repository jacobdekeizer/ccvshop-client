<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orders\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class PickupAddress implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null City.
     */
    private ?string $city;

    /**
     * @var string|null Code.
     */
    private ?string $code;

    /**
     * @var string|null Company name.
     */
    private ?string $company;

    /**
     * @var string|null Country.
     */
    private ?string $country;

    /**
     * @var int|null House number.
     */
    private ?int $housenumber;

    /**
     * @var string|null Street name.
     */
    private ?string $street;

    /**
     * @var string|null House number suffix.
     */
    private ?string $housenumberSuffix;

    /**
     * @var string|null Zipcode
     */
    private ?string $zipcode;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @return string|null Company name.
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @return string|null Country.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return int|null House number.
     */
    public function getHousenumber(): ?int
    {
        return $this->housenumber;
    }

    /**
     * @return string|null Street name.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return string|null House number suffix.
     */
    public function getHousenumberSuffix(): ?string
    {
        return $this->housenumberSuffix;
    }

    /**
     * @return string|null Zipcode
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param string|null $city City.
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string|null $code Code.
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string|null $company Company name.
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @param string|null $country Country.
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param int|null $housenumber House number.
     * @return self
     */
    public function setHousenumber(?int $housenumber): self
    {
        $this->housenumber = $housenumber;
        return $this;
    }

    /**
     * @param string|null $street Street name.
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string|null $housenumberSuffix House number suffix.
     * @return self
     */
    public function setHousenumberSuffix(?string $housenumberSuffix): self
    {
        $this->housenumberSuffix = $housenumberSuffix;
        return $this;
    }

    /**
     * @param string|null $zipcode Zipcode
     * @return self
     */
    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;
        return $this;
    }
}