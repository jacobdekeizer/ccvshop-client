<?php

namespace JacobDeKeizer\Ccv\Models\Apps\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Apps implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string|null App Name
     */
    private $name;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\EurPrices|null The price of the app in Euros.
     */
    private $eurPrices;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ChfPrices|null The price of the app in CHF.
     */
    private $chfPrices;

    /**
     * @var string|null The create date of the app.
     */
    private $createDate;

    /**
     * @var string|null App Name
     */
    private $modifiedDate;

    /**
     * @var string|null The description of the app.
     */
    private $description;

    /**
     * @var string|null Cover image.
     */
    private $cover;

    /**
     * @var string|null Logo image.
     */
    private $logo;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Developer|null The developer of this app.
     */
    private $developer;

    /**
     * @var float|null The number how many times the app is installed.
     */
    private $numberOfInstallations;

    /**
     * @var bool Marks if an app is installed in the webshop.
     */
    private $isInstalled;

    /**
     * @var string[]|null Array with available languages.
     */
    private $availableLanguages;

    /**
     * @var string[]|null Array with available photos.
     */
    private $photos;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Categories|null Collection of categories.
     */
    private $categories;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\CodeBlocks|null Child resource of this resource. Contains all the code blocks associated with this app.
     */
    private $codeBlocks;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Psp|null Child resource of this resource. Contains all the Payment Service Providers associated with this app.
     */
    private $psp;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null App Name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\EurPrices|null The price of the app in Euros.
     */
    public function getEurPrices(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\EurPrices
    {
        return $this->eurPrices;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ChfPrices|null The price of the app in CHF.
     */
    public function getChfPrices(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ChfPrices
    {
        return $this->chfPrices;
    }

    /**
     * @return string|null The create date of the app.
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @return string|null App Name
     */
    public function getModifiedDate(): ?string
    {
        return $this->modifiedDate;
    }

    /**
     * @return string|null The description of the app.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null Cover image.
     */
    public function getCover(): ?string
    {
        return $this->cover;
    }

    /**
     * @return string|null Logo image.
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Developer|null The developer of this app.
     */
    public function getDeveloper(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Developer
    {
        return $this->developer;
    }

    /**
     * @return float|null The number how many times the app is installed.
     */
    public function getNumberOfInstallations(): ?float
    {
        return $this->numberOfInstallations;
    }

    /**
     * @return bool Marks if an app is installed in the webshop.
     */
    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    /**
     * @return string[]|null Array with available languages.
     */
    public function getAvailableLanguages(): ?array
    {
        return $this->availableLanguages;
    }

    /**
     * @return string[]|null Array with available photos.
     */
    public function getPhotos(): ?array
    {
        return $this->photos;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Categories|null Collection of categories.
     */
    public function getCategories(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Categories
    {
        return $this->categories;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\CodeBlocks|null Child resource of this resource. Contains all the code blocks associated with this app.
     */
    public function getCodeBlocks(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\CodeBlocks
    {
        return $this->codeBlocks;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Psp|null Child resource of this resource. Contains all the Payment Service Providers associated with this app.
     */
    public function getPsp(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Psp
    {
        return $this->psp;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $name App Name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\EurPrices|null $eurPrices The price of the app in Euros.
     * @return self
     */
    public function setEurPrices(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\EurPrices $eurPrices): self
    {
        $this->eurPrices = $eurPrices;
        $this->propertyFilled('eurPrices');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ChfPrices|null $chfPrices The price of the app in CHF.
     * @return self
     */
    public function setChfPrices(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ChfPrices $chfPrices): self
    {
        $this->chfPrices = $chfPrices;
        $this->propertyFilled('chfPrices');
        return $this;
    }

    /**
     * @param string|null $createDate The create date of the app.
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param string|null $modifiedDate App Name
     * @return self
     */
    public function setModifiedDate(?string $modifiedDate): self
    {
        $this->modifiedDate = $modifiedDate;
        $this->propertyFilled('modifiedDate');
        return $this;
    }

    /**
     * @param string|null $description The description of the app.
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param string|null $cover Cover image.
     * @return self
     */
    public function setCover(?string $cover): self
    {
        $this->cover = $cover;
        $this->propertyFilled('cover');
        return $this;
    }

    /**
     * @param string|null $logo Logo image.
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;
        $this->propertyFilled('logo');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Developer|null $developer The developer of this app.
     * @return self
     */
    public function setDeveloper(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Developer $developer): self
    {
        $this->developer = $developer;
        $this->propertyFilled('developer');
        return $this;
    }

    /**
     * @param float|null $numberOfInstallations The number how many times the app is installed.
     * @return self
     */
    public function setNumberOfInstallations(?float $numberOfInstallations): self
    {
        $this->numberOfInstallations = $numberOfInstallations;
        $this->propertyFilled('numberOfInstallations');
        return $this;
    }

    /**
     * @param bool $isInstalled Marks if an app is installed in the webshop.
     * @return self
     */
    public function setIsInstalled(bool $isInstalled): self
    {
        $this->isInstalled = $isInstalled;
        $this->propertyFilled('isInstalled');
        return $this;
    }

    /**
     * @param string[]|null $availableLanguages Array with available languages.
     * @return self
     */
    public function setAvailableLanguages(?array $availableLanguages): self
    {
        $this->availableLanguages = $availableLanguages;
        $this->propertyFilled('availableLanguages');
        return $this;
    }

    /**
     * @param string[]|null $photos Array with available photos.
     * @return self
     */
    public function setPhotos(?array $photos): self
    {
        $this->photos = $photos;
        $this->propertyFilled('photos');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Categories|null $categories Collection of categories.
     * @return self
     */
    public function setCategories(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Categories $categories): self
    {
        $this->categories = $categories;
        $this->propertyFilled('categories');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\CodeBlocks|null $codeBlocks Child resource of this resource. Contains all the code blocks associated with this app.
     * @return self
     */
    public function setCodeBlocks(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\CodeBlocks $codeBlocks): self
    {
        $this->codeBlocks = $codeBlocks;
        $this->propertyFilled('codeBlocks');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Psp|null $psp Child resource of this resource. Contains all the Payment Service Providers associated with this app.
     * @return self
     */
    public function setPsp(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Psp $psp): self
    {
        $this->psp = $psp;
        $this->propertyFilled('psp');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
