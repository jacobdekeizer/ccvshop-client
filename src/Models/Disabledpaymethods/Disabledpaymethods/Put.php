<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Child\Disabledpaymethods\DisabledPaymethods[] Describes a collection of disabled paymethods. Replaces all disabled paymethods with the new ones.
     */
    private $disabledPaymethods;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Child\Disabledpaymethods\DisabledPaymethods[] Describes a collection of disabled paymethods. Replaces all disabled paymethods with the new ones.
     */
    public function getDisabledPaymethods(): array
    {
        return $this->disabledPaymethods;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Child\Disabledpaymethods\DisabledPaymethods[] $disabledPaymethods Describes a collection of disabled paymethods. Replaces all disabled paymethods with the new ones.
     * @return self
     */
    public function setDisabledPaymethods(array $disabledPaymethods): self
    {
        $this->disabledPaymethods = $disabledPaymethods;
        $this->propertyFilled('disabledPaymethods');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'disabled_paymethods') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Child\Disabledpaymethods\DisabledPaymethods::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
