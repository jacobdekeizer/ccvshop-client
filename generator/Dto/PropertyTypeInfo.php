<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Dto;

class PropertyTypeInfo
{
    public string $type;
    public bool $nullable;

    public function __construct(string $type, bool $nullable)
    {
        $this->type = $type;
        $this->nullable = $nullable;
    }
}