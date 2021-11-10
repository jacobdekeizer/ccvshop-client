<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Apppsp\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string The name of the PSP. This is how the App PSP is identified
     */
    private string $name;

    /**
     * @var string The description will be shown to the merchant above the settings in the webshop's backend.
     */
    private string $description;

    /**
     * @var string|null This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     */
    private ?string $icon;

    /**
     * @var string This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     */
    private string $endpoint;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Apppsp\Paymethod\Paymethod[] Array of paymethods of the psp.
     */
    private array $paymethods;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string The name of the PSP. This is how the App PSP is identified
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
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Apppsp\Paymethod\Paymethod[] Array of paymethods of the psp.
     */
    public function getPaymethods(): array
    {
        return $this->paymethods;
    }

    /**
     * @param string $name The name of the PSP. This is how the App PSP is identified
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $description The description will be shown to the merchant above the settings in the webshop's backend.
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string|null $icon This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param string $endpoint This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Apppsp\Paymethod\Paymethod ...$paymethods $paymethods Array of paymethods of the psp.
     * @return self
     */
    public function setPaymethods(\JacobDeKeizer\Ccv\Models\Internal\Entity\Apppsp\Paymethod\Paymethod ...$paymethods): self
    {
        $this->paymethods = $paymethods;
        return $this;
    }
}
