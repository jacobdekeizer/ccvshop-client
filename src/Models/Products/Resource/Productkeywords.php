<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productkeywords implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Product keyword
     */
    private $keyword;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent product
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
     * @return string Product keyword
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $keyword Product keyword
     * @return self
     */
    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;
        $this->propertyFilled('keyword');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null $parent Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
