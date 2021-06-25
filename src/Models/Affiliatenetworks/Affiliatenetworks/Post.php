<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Affiliate network name
     */
    private $name;

    /**
     * @var int|null Cookie TTL time in minutes until cookie expires.
     */
    private $cookieTtl;

    /**
     * @var bool|null True: When multiple affiliate networks active, set only latest affiliate network. false: Use all affiliate networks.
     */
    private $deduplicate;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Affiliate network name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int|null Cookie TTL time in minutes until cookie expires.
     */
    public function getCookieTtl(): ?int
    {
        return $this->cookieTtl;
    }

    /**
     * @return bool|null True: When multiple affiliate networks active, set only latest affiliate network. false: Use all affiliate networks.
     */
    public function getDeduplicate(): ?bool
    {
        return $this->deduplicate;
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
     * @param int|null $cookieTtl Cookie TTL time in minutes until cookie expires.
     * @return self
     */
    public function setCookieTtl(?int $cookieTtl): self
    {
        $this->cookieTtl = $cookieTtl;
        $this->propertyFilled('cookieTtl');
        return $this;
    }

    /**
     * @param bool|null $deduplicate True: When multiple affiliate networks active, set only latest affiliate network. false: Use all affiliate networks.
     * @return self
     */
    public function setDeduplicate(?bool $deduplicate): self
    {
        $this->deduplicate = $deduplicate;
        $this->propertyFilled('deduplicate');
        return $this;
    }
}