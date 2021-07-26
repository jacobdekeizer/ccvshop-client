<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Labels\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Labels implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string Uri to the image. These images will be shown as icons as 16x16.
     */
    private $imageLocation;

    /**
     * @var string|null Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     */
    private $tooltip;

    /**
     * @var bool If TRUE this label will be added as filter on the product collection page.
     */
    private $showOnProducts;

    /**
     * @var bool If TRUE this label will be added as filter on the order collection page.
     */
    private $showOnOrders;

    /**
     * @var bool If TRUE this label will be added as filter on the invoice collection page.
     */
    private $showOnInvoices;

    /**
     * @var string Href to this resource
     */
    private $href;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string Uri to the image. These images will be shown as icons as 16x16.
     */
    public function getImageLocation(): string
    {
        return $this->imageLocation;
    }

    /**
     * @return string|null Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     */
    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    /**
     * @return bool If TRUE this label will be added as filter on the product collection page.
     */
    public function getShowOnProducts(): bool
    {
        return $this->showOnProducts;
    }

    /**
     * @return bool If TRUE this label will be added as filter on the order collection page.
     */
    public function getShowOnOrders(): bool
    {
        return $this->showOnOrders;
    }

    /**
     * @return bool If TRUE this label will be added as filter on the invoice collection page.
     */
    public function getShowOnInvoices(): bool
    {
        return $this->showOnInvoices;
    }

    /**
     * @return string Href to this resource
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $imageLocation Uri to the image. These images will be shown as icons as 16x16.
     * @return self
     */
    public function setImageLocation(string $imageLocation): self
    {
        $this->imageLocation = $imageLocation;
        $this->propertyFilled('imageLocation');
        return $this;
    }

    /**
     * @param string|null $tooltip Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     * @return self
     */
    public function setTooltip(?string $tooltip): self
    {
        $this->tooltip = $tooltip;
        $this->propertyFilled('tooltip');
        return $this;
    }

    /**
     * @param bool $showOnProducts If TRUE this label will be added as filter on the product collection page.
     * @return self
     */
    public function setShowOnProducts(bool $showOnProducts): self
    {
        $this->showOnProducts = $showOnProducts;
        $this->propertyFilled('showOnProducts');
        return $this;
    }

    /**
     * @param bool $showOnOrders If TRUE this label will be added as filter on the order collection page.
     * @return self
     */
    public function setShowOnOrders(bool $showOnOrders): self
    {
        $this->showOnOrders = $showOnOrders;
        $this->propertyFilled('showOnOrders');
        return $this;
    }

    /**
     * @param bool $showOnInvoices If TRUE this label will be added as filter on the invoice collection page.
     * @return self
     */
    public function setShowOnInvoices(bool $showOnInvoices): self
    {
        $this->showOnInvoices = $showOnInvoices;
        $this->propertyFilled('showOnInvoices');
        return $this;
    }

    /**
     * @param string $href Href to this resource
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
