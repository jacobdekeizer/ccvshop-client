<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Paymethod implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var string The resource id of this paymethod. This will be used in the API with GET/PATCH/DELETE calls..
     */
    private $resourceId;

    /**
     * @var string The ID of this paymethod. This will be posted to the app.
     */
    private $id;

    /**
     * @var string Display name of this paymethod. This will be shown in the checkout.
     */
    private $name;

    /**
     * @var string Location of the icon. This must be a HTTPS (secured) connection.
     */
    private $icon;

    /**
     * @var string|null The moment when the transaction will be posted to the app, either before the sale (presale) or after (postsale). Please consult the App Developer Manual for more information.
     */
    private $type;

    /**
     * @var string[]|null This limits this paymethod to certain currencies. For instances, iDEAL is only available for EUR. If this paymethod is available for all currencies, leave this empty.
     */
    private $currencies;

    /**
     * @var string[]|null These additional customer fields will be shown as required during the order chechout.
     */
    private $requiredFields;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\Issuers[]|null Collection of Issuers
     */
    private $issuers;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\ParentItem|null Contains link to parent resource.
     */
    private $parent;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string The resource id of this paymethod. This will be used in the API with GET/PATCH/DELETE calls..
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    /**
     * @return string The ID of this paymethod. This will be posted to the app.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string Display name of this paymethod. This will be shown in the checkout.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string Location of the icon. This must be a HTTPS (secured) connection.
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @return string|null The moment when the transaction will be posted to the app, either before the sale (presale) or after (postsale). Please consult the App Developer Manual for more information.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string[]|null This limits this paymethod to certain currencies. For instances, iDEAL is only available for EUR. If this paymethod is available for all currencies, leave this empty.
     */
    public function getCurrencies(): ?array
    {
        return $this->currencies;
    }

    /**
     * @return string[]|null These additional customer fields will be shown as required during the order chechout.
     */
    public function getRequiredFields(): ?array
    {
        return $this->requiredFields;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\Issuers[]|null Collection of Issuers
     */
    public function getIssuers(): ?array
    {
        return $this->issuers;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param string $resourceId The resource id of this paymethod. This will be used in the API with GET/PATCH/DELETE calls..
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->resourceId = $resourceId;
        $this->propertyFilled('resourceId');
        return $this;
    }

    /**
     * @param string $id The ID of this paymethod. This will be posted to the app.
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $name Display name of this paymethod. This will be shown in the checkout.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $icon Location of the icon. This must be a HTTPS (secured) connection.
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        $this->propertyFilled('icon');
        return $this;
    }

    /**
     * @param string|null $type The moment when the transaction will be posted to the app, either before the sale (presale) or after (postsale). Please consult the App Developer Manual for more information.
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string[]|null $currencies This limits this paymethod to certain currencies. For instances, iDEAL is only available for EUR. If this paymethod is available for all currencies, leave this empty.
     * @return self
     */
    public function setCurrencies(?array $currencies): self
    {
        $this->currencies = $currencies;
        $this->propertyFilled('currencies');
        return $this;
    }

    /**
     * @param string[]|null $requiredFields These additional customer fields will be shown as required during the order chechout.
     * @return self
     */
    public function setRequiredFields(?array $requiredFields): self
    {
        $this->requiredFields = $requiredFields;
        $this->propertyFilled('requiredFields');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\Issuers[]|null $issuers Collection of Issuers
     * @return self
     */
    public function setIssuers(?array $issuers): self
    {
        $this->issuers = $issuers;
        $this->propertyFilled('issuers');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'issuers') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp\Issuers::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
