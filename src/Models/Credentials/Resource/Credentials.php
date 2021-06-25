<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Credentials\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Credentials implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var string Credential label
     */
    private $label;

    /**
     * @var string|null Createdate of this credential
     */
    private $createdate;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Credential label
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string|null Createdate of this credential
     */
    public function getCreatedate(): ?string
    {
        return $this->createdate;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $label Credential label
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        $this->propertyFilled('label');
        return $this;
    }

    /**
     * @param string|null $createdate Createdate of this credential
     * @return self
     */
    public function setCreatedate(?string $createdate): self
    {
        $this->createdate = $createdate;
        $this->propertyFilled('createdate');
        return $this;
    }
}