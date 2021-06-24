<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Labels\Labels;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Uri to the image. These images will be shown as icons as 16x16.
     */
    private $imageLocation;

    /**
     * @var string|null Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     */
    private $tooltip;

    /**
     * @var bool|null If TRUE this label will be added as filter on the product collection page.
     */
    private $showOnProducts;

    /**
     * @var bool|null If TRUE this label will be added as filter on the order collection page.
     */
    private $showOnOrders;

    /**
     * @var bool|null If TRUE this label will be added as filter on the invoice collection page.
     */
    private $showOnInvoices;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
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
     * @return bool|null If TRUE this label will be added as filter on the product collection page.
     */
    public function getShowOnProducts(): ?bool
    {
        return $this->showOnProducts;
    }

    /**
     * @return bool|null If TRUE this label will be added as filter on the order collection page.
     */
    public function getShowOnOrders(): ?bool
    {
        return $this->showOnOrders;
    }

    /**
     * @return bool|null If TRUE this label will be added as filter on the invoice collection page.
     */
    public function getShowOnInvoices(): ?bool
    {
        return $this->showOnInvoices;
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
     * @param bool|null $showOnProducts If TRUE this label will be added as filter on the product collection page.
     * @return self
     */
    public function setShowOnProducts(?bool $showOnProducts): self
    {
        $this->showOnProducts = $showOnProducts;
        $this->propertyFilled('showOnProducts');
        return $this;
    }

    /**
     * @param bool|null $showOnOrders If TRUE this label will be added as filter on the order collection page.
     * @return self
     */
    public function setShowOnOrders(?bool $showOnOrders): self
    {
        $this->showOnOrders = $showOnOrders;
        $this->propertyFilled('showOnOrders');
        return $this;
    }

    /**
     * @param bool|null $showOnInvoices If TRUE this label will be added as filter on the invoice collection page.
     * @return self
     */
    public function setShowOnInvoices(?bool $showOnInvoices): self
    {
        $this->showOnInvoices = $showOnInvoices;
        $this->propertyFilled('showOnInvoices');
        return $this;
    }
}
