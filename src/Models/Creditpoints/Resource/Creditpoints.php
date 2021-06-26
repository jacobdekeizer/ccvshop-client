<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Creditpoints\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Creditpoints implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var string|null The amount of available creditpoints
     */
    private $amount;
    
    /**
     * @var string|null Contains the date of the last mutation
     */
    private $lastMutationDate;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    private $parent;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\Mutations|null Contains link to mutation resource.
     */
    private $mutations;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return string|null The amount of available creditpoints
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }
    
    /**
     * @return string|null Contains the date of the last mutation
     */
    public function getLastMutationDate(): ?string
    {
        return $this->lastMutationDate;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\ParentItem
    {
        return $this->parent;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\Mutations|null Contains link to mutation resource.
     */
    public function getMutations(): ?\JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\Mutations
    {
        return $this->mutations;
    }
    
    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param string|null $amount The amount of available creditpoints
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        $this->propertyFilled('amount');
        return $this;
    }
    
    /**
     * @param string|null $lastMutationDate Contains the date of the last mutation
     * @return self
     */
    public function setLastMutationDate(?string $lastMutationDate): self
    {
        $this->lastMutationDate = $lastMutationDate;
        $this->propertyFilled('lastMutationDate');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\Mutations|null $mutations Contains link to mutation resource.
     * @return self
     */
    public function setMutations(?\JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource\Mutations $mutations): self
    {
        $this->mutations = $mutations;
        $this->propertyFilled('mutations');
        return $this;
    }
}
