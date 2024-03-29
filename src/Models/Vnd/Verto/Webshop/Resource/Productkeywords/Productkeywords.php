<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productkeywords implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Product keyword
     */
    private string $keyword;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Child\ParentItem|null Contains link to parent product
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Product keyword
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Child\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Child\ParentItem
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
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Child\ParentItem|null $parent Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
