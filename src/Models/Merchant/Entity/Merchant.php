<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Merchant\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Merchant implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var string|null Gender, can be null.
     */
    private $gender;

    /**
     * @var string|null First name
     */
    private $firstName;

    /**
     * @var string|null Last name
     */
    private $lastName;

    /**
     * @var string|null Full name
     */
    private $fullName;

    /**
     * @var string|null Company name
     */
    private $company;

    /**
     * @var string|null E-mail address
     */
    private $email;

    /**
     * @var string|null Address line
     */
    private $addressLine;

    /**
     * @var string|null Street name
     */
    private $street;

    /**
     * @var string|null House number with possible suffix
     */
    private $housenumber;

    /**
     * @var string|null Zipcode
     */
    private $zipcode;

    /**
     * @var string|null City
     */
    private $city;

    /**
     * @var string|null Country full
     */
    private $country;

    /**
     * @var string|null Country in 2 characters.
     */
    private $countryCode;

    /**
     * @var string|null Telephone number
     */
    private $telephone;

    /**
     * @var string|null Tax number
     */
    private $taxNumber;

    /**
     * @var string|null Chamber of Commerce number
     */
    private $cocNumber;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Merchant\Child\Entity\ParentItem|null Contains link to parent resource.
     */
    private $parent;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string|null Gender, can be null.
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @return string|null First name
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null Last name
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
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
     * @return string|null E-mail address
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null Address line
     */
    public function getAddressLine(): ?string
    {
        return $this->addressLine;
    }

    /**
     * @return string|null Street name
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return string|null House number with possible suffix
     */
    public function getHousenumber(): ?string
    {
        return $this->housenumber;
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
     * @return string|null Country full
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null Country in 2 characters.
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
     * @return string|null Tax number
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * @return string|null Chamber of Commerce number
     */
    public function getCocNumber(): ?string
    {
        return $this->cocNumber;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Merchant\Child\Entity\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Merchant\Child\Entity\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
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
     * @param string|null $firstName First name
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        $this->propertyFilled('firstName');
        return $this;
    }

    /**
     * @param string|null $lastName Last name
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        $this->propertyFilled('lastName');
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
     * @param string|null $email E-mail address
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        $this->propertyFilled('email');
        return $this;
    }

    /**
     * @param string|null $addressLine Address line
     * @return self
     */
    public function setAddressLine(?string $addressLine): self
    {
        $this->addressLine = $addressLine;
        $this->propertyFilled('addressLine');
        return $this;
    }

    /**
     * @param string|null $street Street name
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;
        $this->propertyFilled('street');
        return $this;
    }

    /**
     * @param string|null $housenumber House number with possible suffix
     * @return self
     */
    public function setHousenumber(?string $housenumber): self
    {
        $this->housenumber = $housenumber;
        $this->propertyFilled('housenumber');
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
     * @param string|null $country Country full
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        $this->propertyFilled('country');
        return $this;
    }

    /**
     * @param string|null $countryCode Country in 2 characters.
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
     * @param string|null $taxNumber Tax number
     * @return self
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
        $this->propertyFilled('taxNumber');
        return $this;
    }

    /**
     * @param string|null $cocNumber Chamber of Commerce number
     * @return self
     */
    public function setCocNumber(?string $cocNumber): self
    {
        $this->cocNumber = $cocNumber;
        $this->propertyFilled('cocNumber');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Merchant\Child\Entity\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Merchant\Child\Entity\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
