<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productkeywords\Productkeywords;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Keyword to add for this product.
     */
    private $keyword;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Keyword to add for this product.
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword Keyword to add for this product.
     * @return self
     */
    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;
        $this->propertyFilled('keyword');
        return $this;
    }
}
