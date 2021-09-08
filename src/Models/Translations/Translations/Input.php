<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Translations\Translations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Translations\Child\Translations\Translations[] Collection of translations.
     */
    private $translations;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Translations\Child\Translations\Translations[] Collection of translations.
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Translations\Child\Translations\Translations[] $translations Collection of translations.
     * @return self
     */
    public function setTranslations(array $translations): self
    {
        $this->translations = $translations;
        $this->propertyFilled('translations');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'translations') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Translations\Child\Translations\Translations::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
