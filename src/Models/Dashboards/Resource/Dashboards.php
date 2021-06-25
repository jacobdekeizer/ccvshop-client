<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Dashboards\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Dashboards implements Model
{
    use FromArray, ToArray;

    /**
     * @var int Id of this dashboard.
     */
    private $id;

    /**
     * @var string Link to this dashboard.
     */
    private $href;

    /**
     * @var string Name of this dashboard. Describes more or less the location of the dashboard within the menu structure.
     */
    private $name;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Dashboards\Child\Resource\Dashboardblocks Collection of dashboard blocks.
     */
    private $dashboardblocks;

    /**
     * @var string Link to parent
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
     * @return int Id of this dashboard.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Link to this dashboard.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string Name of this dashboard. Describes more or less the location of the dashboard within the menu structure.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Dashboards\Child\Resource\Dashboardblocks Collection of dashboard blocks.
     */
    public function getDashboardblocks(): \JacobDeKeizer\Ccv\Models\Dashboards\Child\Resource\Dashboardblocks
    {
        return $this->dashboardblocks;
    }

    /**
     * @return string Link to parent
     */
    public function getParent(): string
    {
        return $this->parent;
    }

    /**
     * @param int $id Id of this dashboard.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $href Link to this dashboard.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param string $name Name of this dashboard. Describes more or less the location of the dashboard within the menu structure.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Dashboards\Child\Resource\Dashboardblocks $dashboardblocks Collection of dashboard blocks.
     * @return self
     */
    public function setDashboardblocks(\JacobDeKeizer\Ccv\Models\Dashboards\Child\Resource\Dashboardblocks $dashboardblocks): self
    {
        $this->dashboardblocks = $dashboardblocks;
        $this->propertyFilled('dashboardblocks');
        return $this;
    }

    /**
     * @param string $parent Link to parent
     * @return self
     */
    public function setParent(string $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}