<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Settings\Child\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class StockLevelWarnings implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null The lower threshold for product stock. If the stock is less than this it's considered 'red'. Value will be null if stock is disabled.
     */
    private $lowThreshold;

    /**
     * @var int|null The upper threshold for product stock. If the stock is more than this it's considered 'green'. Value will be null if stock is disabled.
     */
    private $highThreshold;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null The lower threshold for product stock. If the stock is less than this it's considered 'red'. Value will be null if stock is disabled.
     */
    public function getLowThreshold(): ?int
    {
        return $this->lowThreshold;
    }

    /**
     * @return int|null The upper threshold for product stock. If the stock is more than this it's considered 'green'. Value will be null if stock is disabled.
     */
    public function getHighThreshold(): ?int
    {
        return $this->highThreshold;
    }

    /**
     * @param int|null $lowThreshold The lower threshold for product stock. If the stock is less than this it's considered 'red'. Value will be null if stock is disabled.
     * @return self
     */
    public function setLowThreshold(?int $lowThreshold): self
    {
        $this->lowThreshold = $lowThreshold;
        $this->propertyFilled('lowThreshold');
        return $this;
    }

    /**
     * @param int|null $highThreshold The upper threshold for product stock. If the stock is more than this it's considered 'green'. Value will be null if stock is disabled.
     * @return self
     */
    public function setHighThreshold(?int $highThreshold): self
    {
        $this->highThreshold = $highThreshold;
        $this->propertyFilled('highThreshold');
        return $this;
    }
}
