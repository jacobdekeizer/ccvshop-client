<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblock;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class View implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Name of the view. Use this name in the app response to display this view.
     */
    private $name;

    /**
     * @var string Data will be send to this endpoint when the user interacts with this codeblock's view.
     */
    private $endpoint;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Appcodeblocks\View\Element[] Array of elements in this view.
     */
    private $elements;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Name of the view. Use this name in the app response to display this view.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string Data will be send to this endpoint when the user interacts with this codeblock's view.
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Appcodeblocks\View\Element[] Array of elements in this view.
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param string $name Name of the view. Use this name in the app response to display this view.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $endpoint Data will be send to this endpoint when the user interacts with this codeblock's view.
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;
        $this->propertyFilled('endpoint');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Appcodeblocks\View\Element[] $elements Array of elements in this view.
     * @return self
     */
    public function setElements(array $elements): self
    {
        $this->elements = $elements;
        $this->propertyFilled('elements');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'elements') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Appcodeblocks\View\Element::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
