<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Redirects\Redirects;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string When a visitor requests this url, he will be forwarded to target_url. This source_url will also be relative and must be unique.
     */
    private $sourceUrl;
    
    /**
     * @var string Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     */
    private $targetUrl;
    
    /**
     * @var bool Inactive redirects will be ignored.
     */
    private $active;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string When a visitor requests this url, he will be forwarded to target_url. This source_url will also be relative and must be unique.
     */
    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }
    
    /**
     * @return string Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     */
    public function getTargetUrl(): string
    {
        return $this->targetUrl;
    }
    
    /**
     * @return bool Inactive redirects will be ignored.
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    
    /**
     * @param string $sourceUrl When a visitor requests this url, he will be forwarded to target_url. This source_url will also be relative and must be unique.
     * @return self
     */
    public function setSourceUrl(string $sourceUrl): self
    {
        $this->sourceUrl = $sourceUrl;
        $this->propertyFilled('sourceUrl');
        return $this;
    }
    
    /**
     * @param string $targetUrl Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     * @return self
     */
    public function setTargetUrl(string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        $this->propertyFilled('targetUrl');
        return $this;
    }
    
    /**
     * @param bool $active Inactive redirects will be ignored.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }
}
