<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productreviews\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Review createdate. If not included the current datetime will be used.
     */
    private ?string $createdate;

    /**
     * @var string Name of the reviewer.
     */
    private string $name;

    /**
     * @var int Number of points for the review.
     */
    private int $points;

    /**
     * @var string Description of the review.
     */
    private string $content;

    /**
     * @var bool|null Is the review approved for publishing. If this property is not included in the payload the webshop's default will be used.
     */
    private ?bool $approved;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
        return $this;
    }

    /**
     * @param string $name Name of the reviewer.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $points Number of points for the review.
     * @return self
     */
    public function setPoints(int $points): self
    {
        $this->points = $points;
        return $this;
    }

    /**
     * @param string $content Description of the review.
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param bool|null $approved Is the review approved for publishing. If this property is not included in the payload the webshop's default will be used.
     * @return self
     */
    public function setApproved(?bool $approved): self
    {
        $this->approved = $approved;
        return $this;
    }
}