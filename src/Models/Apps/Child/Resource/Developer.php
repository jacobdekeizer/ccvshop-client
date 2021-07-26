<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Apps\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Developer implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Id of the developer.
     */
    private $id;

    /**
     * @var string|null E-mail address of the developer.
     */
    private $email;

    /**
     * @var string|null Website of the developer.
     */
    private $website;

    /**
     * @var string|null Full name of the developer.
     */
    private $name;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Id of the developer.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null E-mail address of the developer.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null Website of the developer.
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @return string|null Full name of the developer.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param int|null $id Id of the developer.
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $email E-mail address of the developer.
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        $this->propertyFilled('email');
        return $this;
    }

    /**
     * @param string|null $website Website of the developer.
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        $this->propertyFilled('website');
        return $this;
    }

    /**
     * @param string|null $name Full name of the developer.
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
