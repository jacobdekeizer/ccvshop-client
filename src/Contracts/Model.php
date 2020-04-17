<?php

namespace JacobDeKeizer\Ccv\Contracts;

interface Model
{
    /**
     * @return Model
     */
    public static function fromArray(array $data);
}
