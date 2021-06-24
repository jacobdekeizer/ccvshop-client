<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Ordernotes\Ordernotes;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null The text of this note.
     */
    private $note;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null The text of this note.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note The text of this note.
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        $this->propertyFilled('note');
        return $this;
    }
}
