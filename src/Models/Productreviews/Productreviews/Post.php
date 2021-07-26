<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productreviews\Productreviews;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Review createdate. If not included the current datetime will be used.
     */
    private $createdate;

    /**
     * @var string Name of the reviewer.
     */
    private $name;

    /**
     * @var int Number of points for the review.
     */
    private $points;

    /**
     * @var string Description of the review.
     */
    private $content;

    /**
     * @var bool|null Is the review approved for publishing. If this property is not included in the payload the webshop's default will be used.
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
     * @return string|null Review createdate. If not included the current datetime will be used.
     */
    public function getCreatedate(): ?string
    {
        return $this->createdate;
    }

    /**
     * @return string Name of the reviewer.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int Number of points for the review.
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @return string Description of the review.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return bool|null Is the review approved for publishing. If this property is not included in the payload the webshop's default will be used.
     */
    public function getApproved(): ?bool
    {
        return $this->approved;
    }

    /**
     * @param string|null $createdate Review createdate. If not included the current datetime will be used.
     * @return self
     */
    public function setCreatedate(?string $createdate): self
    {
        $this->createdate = $createdate;
        $this->propertyFilled('createdate');
        return $this;
    }

    /**
     * @param string $name Name of the reviewer.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param int $points Number of points for the review.
     * @return self
     */
    public function setPoints(int $points): self
    {
        $this->points = $points;
        $this->propertyFilled('points');
        return $this;
    }

    /**
     * @param string $content Description of the review.
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        $this->propertyFilled('content');
        return $this;
    }

    /**
     * @param bool|null $approved Is the review approved for publishing. If this property is not included in the payload the webshop's default will be used.
     * @return self
     */
    public function setApproved(?bool $approved): self
    {
        $this->approved = $approved;
        $this->propertyFilled('approved');
        return $this;
    }
}
