<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Dashboardblocks implements Model
{
    use FromArray, ToArray;

    /**
     * @var int Id of this dashboard block.
     */
    private $id;

    /**
     * @var string Link to this dashboard block.
     */
    private $href;

    /**
     * @var string Type of data. It can either be fixed or relavite, where the latter the current data is compared to a previous timespan.
     */
    private $type;

    /**
     * @var string Text color in Hex. Normally white on a dark background and black on a light background.
     */
    private $color;

    /**
     * @var string Background color in Hex.
     */
    private $backgroundColor;

    /**
     * @var string A translated value indicating the timespan of the value. Typically used as title. See details in timespan_details.
     */
    private $timespan;

    /**
     * @var string A formatted value. This can be a percentage, an amount with currecy or a number. See details in value_details.
     */
    private $value;

    /**
     * @var string A translated value describing the entity. See details in context_details.
     */
    private $context;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\TimespanDetails More details about timespan. You can use this if the main details don't suffice.
     */
    private $timespanDetails;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ValueDetails More details about value. You can use this if the main details don't suffice.
     */
    private $valueDetails;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ContextDetails More details about context. You can use this if the main details don't suffice.
     */
    private $contextDetails;

    /**
     * @var string Link to parent dashboard.
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
     * @return int Id of this dashboard block.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Link to this dashboard block.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string Type of data. It can either be fixed or relavite, where the latter the current data is compared to a previous timespan.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string Text color in Hex. Normally white on a dark background and black on a light background.
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string Background color in Hex.
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    /**
     * @return string A translated value indicating the timespan of the value. Typically used as title. See details in timespan_details.
     */
    public function getTimespan(): string
    {
        return $this->timespan;
    }

    /**
     * @return string A formatted value. This can be a percentage, an amount with currecy or a number. See details in value_details.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string A translated value describing the entity. See details in context_details.
     */
    public function getContext(): string
    {
        return $this->context;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\TimespanDetails More details about timespan. You can use this if the main details don't suffice.
     */
    public function getTimespanDetails(): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\TimespanDetails
    {
        return $this->timespanDetails;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ValueDetails More details about value. You can use this if the main details don't suffice.
     */
    public function getValueDetails(): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ValueDetails
    {
        return $this->valueDetails;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ContextDetails More details about context. You can use this if the main details don't suffice.
     */
    public function getContextDetails(): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ContextDetails
    {
        return $this->contextDetails;
    }

    /**
     * @return string Link to parent dashboard.
     */
    public function getParent(): string
    {
        return $this->parent;
    }

    /**
     * @param int $id Id of this dashboard block.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $href Link to this dashboard block.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param string $type Type of data. It can either be fixed or relavite, where the latter the current data is compared to a previous timespan.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string $color Text color in Hex. Normally white on a dark background and black on a light background.
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->color = $color;
        $this->propertyFilled('color');
        return $this;
    }

    /**
     * @param string $backgroundColor Background color in Hex.
     * @return self
     */
    public function setBackgroundColor(string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;
        $this->propertyFilled('backgroundColor');
        return $this;
    }

    /**
     * @param string $timespan A translated value indicating the timespan of the value. Typically used as title. See details in timespan_details.
     * @return self
     */
    public function setTimespan(string $timespan): self
    {
        $this->timespan = $timespan;
        $this->propertyFilled('timespan');
        return $this;
    }

    /**
     * @param string $value A formatted value. This can be a percentage, an amount with currecy or a number. See details in value_details.
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }

    /**
     * @param string $context A translated value describing the entity. See details in context_details.
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->context = $context;
        $this->propertyFilled('context');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\TimespanDetails $timespanDetails More details about timespan. You can use this if the main details don't suffice.
     * @return self
     */
    public function setTimespanDetails(\JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\TimespanDetails $timespanDetails): self
    {
        $this->timespanDetails = $timespanDetails;
        $this->propertyFilled('timespanDetails');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ValueDetails $valueDetails More details about value. You can use this if the main details don't suffice.
     * @return self
     */
    public function setValueDetails(\JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ValueDetails $valueDetails): self
    {
        $this->valueDetails = $valueDetails;
        $this->propertyFilled('valueDetails');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ContextDetails $contextDetails More details about context. You can use this if the main details don't suffice.
     * @return self
     */
    public function setContextDetails(\JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource\ContextDetails $contextDetails): self
    {
        $this->contextDetails = $contextDetails;
        $this->propertyFilled('contextDetails');
        return $this;
    }

    /**
     * @param string $parent Link to parent dashboard.
     * @return self
     */
    public function setParent(string $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
