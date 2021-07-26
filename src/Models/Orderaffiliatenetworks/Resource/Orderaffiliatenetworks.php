<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orderaffiliatenetworks implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var string|null Order affiliate network name.
     */
    private $name;

    /**
     * @var string|null The transaction id of the affiliate network.
     */
    private $transactionId;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return string Link to self.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string|null Order affiliate network name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null The transaction id of the affiliate network.
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param string|null $name Order affiliate network name.
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $transactionId The transaction id of the affiliate network.
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;
        $this->propertyFilled('transactionId');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
