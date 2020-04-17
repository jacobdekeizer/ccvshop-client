<?php

namespace JacobDeKeizer\Ccv\Contracts;

interface Parameterable
{
    /**
     * @return Parameter
     */
    public function toParameter();
}
