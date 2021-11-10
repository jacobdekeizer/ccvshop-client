<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Domains implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var string The name of the Domain
     */
    private string $domainname;

    /**
     * @var bool Secure Sockets Layer certificate is installed for this domain and ssl traffic is supported on this domain
     */
    private bool $ssldomain;

    /**
     * @var string|null Language of the Domain and what language will be displayed on the front-end of the website. When domains are not set by language the type will be null
     */
    private ?string $language;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains\Child\ParentItem|null Parent resource of this resource.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return string The name of the Domain
     */
    public function getDomainname(): string
    {
        return $this->domainname;
    }

    /**
     * @return bool Secure Sockets Layer certificate is installed for this domain and ssl traffic is supported on this domain
     */
    public function getSsldomain(): bool
    {
        return $this->ssldomain;
    }

    /**
     * @return string|null Language of the Domain and what language will be displayed on the front-end of the website. When domains are not set by language the type will be null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains\Child\ParentItem|null Parent resource of this resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains\Child\ParentItem
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
        return $this;
    }

    /**
     * @param string $domainname The name of the Domain
     * @return self
     */
    public function setDomainname(string $domainname): self
    {
        $this->domainname = $domainname;
        return $this;
    }

    /**
     * @param bool $ssldomain Secure Sockets Layer certificate is installed for this domain and ssl traffic is supported on this domain
     * @return self
     */
    public function setSsldomain(bool $ssldomain): self
    {
        $this->ssldomain = $ssldomain;
        return $this;
    }

    /**
     * @param string|null $language Language of the Domain and what language will be displayed on the front-end of the website. When domains are not set by language the type will be null
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains\Child\ParentItem|null $parent Parent resource of this resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Domains\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
