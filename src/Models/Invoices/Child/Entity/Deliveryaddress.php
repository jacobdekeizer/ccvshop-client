<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoices\Child\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Deliveryaddress implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Gender, can be null.
     */
    private $gender;

    /**
     * @var string|null Initials, optional
     */
    private $initials;

    /**
     * @var string|null Full name
     */
    private $fullName;

    /**
     * @var string|null Company name
     */
    private $company;

    /**
     * @var string|null Address line 1. Either use address_line_1 and address_line_2 or street and housenumber.
     */
    private $addressLine1;

    /**
     * @var string|null Address line 2. Note: see address_line_1.
     */
    private $addressLine2;

    /**
     * @var string|null Street name.  Note: see address_line_1.
     */
    private $street;

    /**
     * @var int|null House number.  Note: see address_line_1.
     */
    private $housenumber;

    /**
     * @var string|null House number suffix.  Note: see address_line_1.
     */
    private $housenumberSuffix;

    /**
     * @var string|null Zipcode
     */
    private $zipcode;

    /**
     * @var string|null City
     */
    private $city;

    /**
     * @var string|null Province or state
     */
    private $province;

    /**
     * @var string|null Country full name.
     */
    private $country;

    /**
     * @var string|null Country Alpha-2 code. See ISO 3166-1
     */
    private $countryCode;

    /**
     * @var string|null Telephone number
     */
    private $telephone;

    /**
     * @var string|null Mobile phone number
     */
    private $mobile;

    /**
     * @var string|null Comment left for the recepient
     */
    private $comment;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Gender, can be null.
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @return string|null Initials, optional
     */
    public function getInitials(): ?string
    {
        return $this->initials;
    }

    /**
     * @return string|null Full name
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @return string|null Company name
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @return string|null Address line 1. Either use address_line_1 and address_line_2 or street and housenumber.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @return string|null Address line 2. Note: see address_line_1.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @return string|null Street name.  Note: see address_line_1.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return int|null House number.  Note: see address_line_1.
     */
    public function getHousenumber(): ?int
    {
        return $this->housenumber;
    }

    /**
     * @return string|null House number suffix.  Note: see address_line_1.
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
     * @return string|null City
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null Province or state
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @return string|null Country full name.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null Country Alpha-2 code. See ISO 3166-1
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null Telephone number
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @return string|null Mobile phone number
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @return string|null Comment left for the recepient
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $gender Gender, can be null.
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        $this->propertyFilled('gender');
        return $this;
    }

    /**
     * @param string|null $initials Initials, optional
     * @return self
     */
    public function setInitials(?string $initials): self
    {
        $this->initials = $initials;
        $this->propertyFilled('initials');
        return $this;
    }

    /**
     * @param string|null $fullName Full name
     * @return self
     */
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        $this->propertyFilled('fullName');
        return $this;
    }

    /**
     * @param string|null $company Company name
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        $this->propertyFilled('company');
        return $this;
    }

    /**
     * @param string|null $addressLine1 Address line 1. Either use address_line_1 and address_line_2 or street and housenumber.
     * @return self
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;
        $this->propertyFilled('addressLine1');
        return $this;
    }

    /**
     * @param string|null $addressLine2 Address line 2. Note: see address_line_1.
     * @return self
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;
        $this->propertyFilled('addressLine2');
        return $this;
    }

    /**
     * @param string|null $street Street name.  Note: see address_line_1.
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;
        $this->propertyFilled('street');
        return $this;
    }

    /**
     * @param int|null $housenumber House number.  Note: see address_line_1.
     * @return self
     */
    public function setHousenumber(?int $housenumber): self
    {
        $this->housenumber = $housenumber;
        $this->propertyFilled('housenumber');
        return $this;
    }

    /**
     * @param string|null $housenumberSuffix House number suffix.  Note: see address_line_1.
     * @return self
     */
    public function setHousenumberSuffix(?string $housenumberSuffix): self
    {
        $this->housenumberSuffix = $housenumberSuffix;
        $this->propertyFilled('housenumberSuffix');
        return $this;
    }

    /**
     * @param string|null $zipcode Zipcode
     * @return self
     */
    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;
        $this->propertyFilled('zipcode');
        return $this;
    }

    /**
     * @param string|null $city City
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        $this->propertyFilled('city');
        return $this;
    }

    /**
     * @param string|null $province Province or state
     * @return self
     */
    public function setProvince(?string $province): self
    {
        $this->province = $province;
        $this->propertyFilled('province');
        return $this;
    }

    /**
     * @param string|null $country Country full name.
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        $this->propertyFilled('country');
        return $this;
    }

    /**
     * @param string|null $countryCode Country Alpha-2 code. See ISO 3166-1
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        $this->propertyFilled('countryCode');
        return $this;
    }

    /**
     * @param string|null $telephone Telephone number
     * @return self
     */
    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        $this->propertyFilled('telephone');
        return $this;
    }

    /**
     * @param string|null $mobile Mobile phone number
     * @return self
     */
    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;
        $this->propertyFilled('mobile');
        return $this;
    }

    /**
     * @param string|null $comment Comment left for the recepient
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        $this->propertyFilled('comment');
        return $this;
    }
}
