<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Services\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Company implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null E-mail of the service.
     */
    private $email;

    /**
     * @var string|null Website of the service.
     */
    private $website;

    /**
     * @var string|null Website name of the service.
     */
    private $websitename;

    /**
     * @var string|null Phonenumber of the service.
     */
    private $phone;

    /**
     * @var string|null Company name whom provide the service.
     */
    private $company;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null E-mail of the service.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null Website of the service.
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @return string|null Website name of the service.
     */
    public function getWebsitename(): ?string
    {
        return $this->websitename;
    }

    /**
     * @return string|null Phonenumber of the service.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null Company name whom provide the service.
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $email E-mail of the service.
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        $this->propertyFilled('email');
        return $this;
    }

    /**
     * @param string|null $website Website of the service.
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        $this->propertyFilled('website');
        return $this;
    }

    /**
     * @param string|null $websitename Website name of the service.
     * @return self
     */
    public function setWebsitename(?string $websitename): self
    {
        $this->websitename = $websitename;
        $this->propertyFilled('websitename');
        return $this;
    }

    /**
     * @param string|null $phone Phonenumber of the service.
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        $this->propertyFilled('phone');
        return $this;
    }

    /**
     * @param string|null $company Company name whom provide the service.
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        $this->propertyFilled('company');
        return $this;
    }
}
