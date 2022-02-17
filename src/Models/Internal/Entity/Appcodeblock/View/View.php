<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class View implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Name of the view. Use this name in the app response to display this view.
     */
    private string $name;

    /**
     * @var string Data will be send to this endpoint when the user interacts with this codeblock's view.
     */
    private string $endpoint;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Element[] Array of elements in this view.
     */
    private array $elements;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Element[] Array of elements in this view.
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
        return $this;
    }

    /**
     * @param string $endpoint Data will be send to this endpoint when the user interacts with this codeblock's view.
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Element ...$elements $elements Array of elements in this view.
     * @return self
     */
    public function setElements(\JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Element ...$elements): self
    {
        $this->elements = $elements;
        return $this;
    }
}
