<?php


namespace JacobDeKeizer\Ccv\Models\Orders;


class Address
{
    private $gender;
    private $fullName;
    private $initials;
    private $company;
    private $addressLine_1;
    private $addressLine_2;
    private $street;
    private $housenumber;
    private $housenumberSuffix;
    private $zipcode;
    private $city;
    private $province;
    private $telephone;
    private $mobile;
    private $comment;
    private $country;
    private $countryCode;

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function getInitials(): ?string
    {
        return $this->initials;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function getAddressLine_1(): ?string
    {
        return $this->addressLine_1;
    }

    public function getAddressLine_2(): ?string
    {
        return $this->addressLine_2;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getHousenumber(): int
    {
        return $this->housenumber;
    }

    public function getHousenumberSuffix(): ?string
    {
        return $this->housenumberSuffix;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function setInitials(?string $initials): self
    {
        $this->initials = $initials;
        return $this;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function setAddressLine_1(?string $addressLine_1): self
    {
        $this->addressLine_1 = $addressLine_1;
        return $this;
    }

    public function setAddressLine_2(?string $addressLine_2): self
    {
        $this->addressLine_2 = $addressLine_2;
        return $this;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

    public function setHousenumber(int $housenumber): self
    {
        $this->housenumber = $housenumber;
        return $this;
    }

    public function setHousenumberSuffix(?string $housenumberSuffix): self
    {
        $this->housenumberSuffix = $housenumberSuffix;
        return $this;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;
        return $this;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}