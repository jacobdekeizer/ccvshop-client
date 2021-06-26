<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productrelevant\Productrelevant;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Unique id of the child product. This is product will show on the parent product page as a relevant product.
     */
    private $childProductId;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return int Unique id of the child product. This is product will show on the parent product page as a relevant product.
     */
    public function getChildProductId(): int
    {
        return $this->childProductId;
    }
    
    /**
     * @param int $childProductId Unique id of the child product. This is product will show on the parent product page as a relevant product.
     * @return self
     */
    public function setChildProductId(int $childProductId): self
    {
        $this->childProductId = $childProductId;
        $this->propertyFilled('childProductId');
        return $this;
    }
}
