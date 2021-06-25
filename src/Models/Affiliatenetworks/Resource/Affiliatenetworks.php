<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Affiliatenetworks implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var int Unique id of the resource
     */
    private $id;
    
    /**
     * @var string Affiliate network name
     */
    private $name;
    
    /**
     * @var int Cookie TTL time in minutes until cookie expires.
     */
    private $cookieTtl;
    
    /**
     * @var bool True: When multiple affiliate networks active, set only latest affiliate network. false: Use all affiliate networks.
     */
    private $deduplicate;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return string Affiliate network name
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @return int Cookie TTL time in minutes until cookie expires.
     */
    public function getCookieTtl(): int
    {
        return $this->cookieTtl;
    }
    
    /**
     * @return bool True: When multiple affiliate networks active, set only latest affiliate network. false: Use all affiliate networks.
     */
    public function getDeduplicate(): bool
    {
        return $this->deduplicate;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Affiliatenetworks\Child\Resource\ParentItem
    {
        return $this->parent;
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
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string $name Affiliate network name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param int $cookieTtl Cookie TTL time in minutes until cookie expires.
     * @return self
     */
    public function setCookieTtl(int $cookieTtl): self
    {
        $this->cookieTtl = $cookieTtl;
        $this->propertyFilled('cookieTtl');
        return $this;
    }
    
    /**
     * @param bool $deduplicate True: When multiple affiliate networks active, set only latest affiliate network. false: Use all affiliate networks.
     * @return self
     */
    public function setDeduplicate(bool $deduplicate): self
    {
        $this->deduplicate = $deduplicate;
        $this->propertyFilled('deduplicate');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Child\Resource\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Affiliatenetworks\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
