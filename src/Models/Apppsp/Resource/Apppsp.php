<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Apppsp\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Apppsp implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique ID of the resource
     */
    private $id;

    /**
     * @var string The name of the PSP. This is how the App PSP is identified in the backend of the merchant.
     */
    private $name;

    /**
     * @var string The description will be shown to the merchant above the settings in the webshop's backend.
     */
    private $description;

    /**
     * @var string|null This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     */
    private $icon;

    /**
     * @var string This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     */
    private $endpoint;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod[] Array of paymethods of the PSP.
     */
    private $paymethods;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apppsp\Child\Resource\ParentItem|null App
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
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique ID of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string The name of the PSP. This is how the App PSP is identified in the backend of the merchant.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string The description will be shown to the merchant above the settings in the webshop's backend.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @return string This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod[] Array of paymethods of the PSP.
     */
    public function getPaymethods(): array
    {
        return $this->paymethods;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apppsp\Child\Resource\ParentItem|null App
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Apppsp\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null $id Unique ID of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $name The name of the PSP. This is how the App PSP is identified in the backend of the merchant.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $description The description will be shown to the merchant above the settings in the webshop's backend.
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param string|null $icon This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        $this->propertyFilled('icon');
        return $this;
    }

    /**
     * @param string $endpoint This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;
        $this->propertyFilled('endpoint');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod[] $paymethods Array of paymethods of the PSP.
     * @return self
     */
    public function setPaymethods(array $paymethods): self
    {
        $this->paymethods = $paymethods;
        $this->propertyFilled('paymethods');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apppsp\Child\Resource\ParentItem|null $parent App
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Apppsp\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'paymethods') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
