<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productreviews implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self.
     */
    private $href;
    
    /**
     * @var int Unique id of the resource.
     */
    private $id;
    
    /**
     * @var int The ID of the product the review refers to.
     */
    private $productid;
    
    /**
     * @var string|null Review createdate.
     */
    private $createdate;
    
    /**
     * @var string The contents of the review.
     */
    private $content;
    
    /**
     * @var int Amount of points the reviewer has awarded.
     */
    private $points;
    
    /**
     * @var string The reviewer's name.
     */
    private $name;
    
    /**
     * @var bool Is the review approved for publishing.
     */
    private $approved;
    
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
     * @return int Unique id of the resource.
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return int The ID of the product the review refers to.
     */
    public function getProductid(): int
    {
        return $this->productid;
    }
    
    /**
     * @return string|null Review createdate.
     */
    public function getCreatedate(): ?string
    {
        return $this->createdate;
    }
    
    /**
     * @return string The contents of the review.
     */
    public function getContent(): string
    {
        return $this->content;
    }
    
    /**
     * @return int Amount of points the reviewer has awarded.
     */
    public function getPoints(): int
    {
        return $this->points;
    }
    
    /**
     * @return string The reviewer's name.
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @return bool Is the review approved for publishing.
     */
    public function getApproved(): bool
    {
        return $this->approved;
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
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param int $productid The ID of the product the review refers to.
     * @return self
     */
    public function setProductid(int $productid): self
    {
        $this->productid = $productid;
        $this->propertyFilled('productid');
        return $this;
    }
    
    /**
     * @param string|null $createdate Review createdate.
     * @return self
     */
    public function setCreatedate(?string $createdate): self
    {
        $this->createdate = $createdate;
        $this->propertyFilled('createdate');
        return $this;
    }
    
    /**
     * @param string $content The contents of the review.
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        $this->propertyFilled('content');
        return $this;
    }
    
    /**
     * @param int $points Amount of points the reviewer has awarded.
     * @return self
     */
    public function setPoints(int $points): self
    {
        $this->points = $points;
        $this->propertyFilled('points');
        return $this;
    }
    
    /**
     * @param string $name The reviewer's name.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param bool $approved Is the review approved for publishing.
     * @return self
     */
    public function setApproved(bool $approved): self
    {
        $this->approved = $approved;
        $this->propertyFilled('approved');
        return $this;
    }
}
