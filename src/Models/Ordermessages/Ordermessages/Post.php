<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Ordermessages\Ordermessages;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string The content of the message.
     */
    private $message;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string The content of the message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message The content of the message.
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        $this->propertyFilled('message');
        return $this;
    }
}
