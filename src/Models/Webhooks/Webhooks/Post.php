<?php

namespace JacobDeKeizer\Ccv\Models\Webhooks\Webhooks;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Event name, on which WebHook is triggered.
     */
    private $event;

    /**
     * @var string Uri that will be called once the WebHook event is triggered.
     */
    private $address;

    /**
     * @var bool|null True if the WebHook is active. Disabled WebHooks will not be triggered.
     */
    private $isActive;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Event name, on which WebHook is triggered.
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @return string Uri that will be called once the WebHook event is triggered.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return bool|null True if the WebHook is active. Disabled WebHooks will not be triggered.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @param string $event Event name, on which WebHook is triggered.
     * @return self
     */
    public function setEvent(string $event): self
    {
        $this->event = $event;
        $this->propertyFilled('event');
        return $this;
    }

    /**
     * @param string $address Uri that will be called once the WebHook event is triggered.
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;
        $this->propertyFilled('address');
        return $this;
    }

    /**
     * @param bool|null $isActive True if the WebHook is active. Disabled WebHooks will not be triggered.
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        $this->propertyFilled('isActive');
        return $this;
    }
}
