<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Settings\Child\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class InvoiceStatus implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Id of the status.
     */
    private $id;
    
    /**
     * @var string This status corresponse with the status in the invoice resource.
     */
    private $status;
    
    /**
     * @var string The display name of this status. The merchant can adjust this.
     */
    private $statusName;
    
    /**
     * @var string The text color in HEX code.
     */
    private $textColor;
    
    /**
     * @var string The background color in HEX code.
     */
    private $backgroundColor;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return int Id of the status.
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return string This status corresponse with the status in the invoice resource.
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    
    /**
     * @return string The display name of this status. The merchant can adjust this.
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }
    
    /**
     * @return string The text color in HEX code.
     */
    public function getTextColor(): string
    {
        return $this->textColor;
    }
    
    /**
     * @return string The background color in HEX code.
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }
    
    /**
     * @param int $id Id of the status.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string $status This status corresponse with the status in the invoice resource.
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }
    
    /**
     * @param string $statusName The display name of this status. The merchant can adjust this.
     * @return self
     */
    public function setStatusName(string $statusName): self
    {
        $this->statusName = $statusName;
        $this->propertyFilled('statusName');
        return $this;
    }
    
    /**
     * @param string $textColor The text color in HEX code.
     * @return self
     */
    public function setTextColor(string $textColor): self
    {
        $this->textColor = $textColor;
        $this->propertyFilled('textColor');
        return $this;
    }
    
    /**
     * @param string $backgroundColor The background color in HEX code.
     * @return self
     */
    public function setBackgroundColor(string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;
        $this->propertyFilled('backgroundColor');
        return $this;
    }
}
