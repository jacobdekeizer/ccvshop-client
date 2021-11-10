<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Webhooks implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self.
     */
    private string $href;

    /**
     * @var int Unique id of the resource.
     */
    private int $id;

    /**
     * @var string Create date of the WebHook in UTC.
     */
    private string $createdate;

    /**
     * @var string Event name, on which WebHook is triggered.
     */
    private string $event;

    /**
     * @var string Uri that will be called once the WebHook event is triggered.
     */
    private string $address;

    /**
     * @var string The secret key associated with this event. This key will be used to calculate a hash.
     */
    private string $key;

    /**
     * @var bool True if the WebHook is active. Disabled WebHooks will not be triggered.
     */
    private bool $isActive;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks\Child\ParentItem|null Parent resource of this resource
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Create date of the WebHook in UTC.
     */
    public function getCreatedate(): string
    {
        return $this->createdate;
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
     * @return string The secret key associated with this event. This key will be used to calculate a hash.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return bool True if the WebHook is active. Disabled WebHooks will not be triggered.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks\Child\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks\Child\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $createdate Create date of the WebHook in UTC.
     * @return self
     */
    public function setCreatedate(string $createdate): self
    {
        $this->createdate = $createdate;
        return $this;
    }

    /**
     * @param string $event Event name, on which WebHook is triggered.
     * @return self
     */
    public function setEvent(string $event): self
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @param string $address Uri that will be called once the WebHook event is triggered.
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $key The secret key associated with this event. This key will be used to calculate a hash.
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param bool $isActive True if the WebHook is active. Disabled WebHooks will not be triggered.
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks\Child\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webhooks\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
