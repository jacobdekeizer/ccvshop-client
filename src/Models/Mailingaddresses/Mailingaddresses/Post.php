<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Name of mailingaddress owner
     */
    private $name;

    /**
     * @var string|null Companyname of mailingaddress owner
     */
    private $companyname;

    /**
     * @var string Mailingaddress
     */
    private $email;

    /**
     * @var string Language of mailingaddress owner
     */
    private $language;

    /**
     * @var bool|null Is mailingaddress enabled
     */
    private $enable;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Name of mailingaddress owner
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null Companyname of mailingaddress owner
     */
    public function getCompanyname(): ?string
    {
        return $this->companyname;
    }

    /**
     * @return string Mailingaddress
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string Language of mailingaddress owner
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return bool|null Is mailingaddress enabled
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * @param string $name Name of mailingaddress owner
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $companyname Companyname of mailingaddress owner
     * @return self
     */
    public function setCompanyname(?string $companyname): self
    {
        $this->companyname = $companyname;
        $this->propertyFilled('companyname');
        return $this;
    }

    /**
     * @param string $email Mailingaddress
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        $this->propertyFilled('email');
        return $this;
    }

    /**
     * @param string $language Language of mailingaddress owner
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;
        $this->propertyFilled('language');
        return $this;
    }

    /**
     * @param bool|null $enable Is mailingaddress enabled
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        $this->propertyFilled('enable');
        return $this;
    }
}
