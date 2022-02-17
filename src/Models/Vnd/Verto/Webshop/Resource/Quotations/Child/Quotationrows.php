<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Quotations\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Quotationrows implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to products that are included in this quotation.
     */
    private ?string $href;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Link to products that are included in this quotation.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param string|null $href Link to products that are included in this quotation.
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }
}