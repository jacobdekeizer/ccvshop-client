<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Exceptions;

use Exception;
use Throwable;

class CcvShopException extends Exception
{
    public static function fromPrevious(string $message, Throwable $throwable): self
    {
        return new self($message, $throwable->getCode(), $throwable);
    }
}
