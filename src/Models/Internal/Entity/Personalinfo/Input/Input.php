<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Input implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Billingaddress|null Billing address info
     */
    private ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Billingaddress $billingaddress;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Deliveryaddress|null Shipping address info
     */
    private ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Deliveryaddress $deliveryaddress;

    /**
     * @var string|null E-mail address
     */
    private ?string $email;

    /**
     * @var string|null Defines if this user is a consumer (b2c) or business (b2b) customer.
     */
    private ?string $customertype;

    /**
     * @var string|null Bankaccount number, within EU mostly IBAN will be used instead.
     */
    private ?string $bankaccount;

    /**
     * @var string|null Bank name
     */
    private ?string $bankname;

    /**
     * @var string|null Deprecated. This field will no longer be used. Please use 'bankaccount'.
     */
    private ?string $bank;

    /**
     * @var string|null Deprecated. This field will no longer be used. Please use 'bankname'.
     */
    private ?string $tenname;

    /**
     * @var string|null International Bank Account Number, if empty bankaccount could be used.
     */
    private ?string $iban;

    /**
     * @var string|null Bank Identifier Code. Used in combination with IBAN.
     */
    private ?string $bic;

    /**
     * @var string|null Customer reference. Could be used as customer number in some cases.
     */
    private ?string $reference;

    /**
     * @var string|null Customer reservation number.
     */
    private ?string $reservationnumber;

    /**
     * @var string|null Customer's income
     */
    private ?string $income;

    /**
     * @var string|null Deprecated. This field will no longer be used. Please use 'branch'.
     */
    private ?string $branche;

    /**
     * @var string|null Customer's branch. Mostly used with company info.
     */
    private ?string $branch;

    /**
     * @var string|null Website of the customer
     */
    private ?string $website;

    /**
     * @var string|null Club's city
     */
    private ?string $clubcity;

    /**
     * @var string|null Club's comment
     */
    private ?string $clubcomment;

    /**
     * @var string|null Club's name
     */
    private ?string $clubname;

    /**
     * @var string|null Deprecated. Fair of the customer. See 'Fair'
     */
    private ?string $beurs;

    /**
     * @var string|null Deprecated. Booth of the customer. See 'Booth'
     */
    private ?string $stand;

    /**
     * @var string|null Fair of the customer.
     */
    private ?string $fair;

    /**
     * @var string|null Booth of the customer.
     */
    private ?string $booth;

    /**
     * @var string|null Car brand
     */
    private ?string $carbrand;

    /**
     * @var string|null Car type
     */
    private ?string $cartype;

    /**
     * @var string|null Car weight
     */
    private ?string $carweight;

    /**
     * @var string|null Birthdate of the customer
     */
    private ?string $birthdate;

    /**
     * @var string|null Birth time of the customer
     */
    private ?string $birthtime;

    /**
     * @var string|null Birth place of the customer
     */
    private ?string $birthplace;

    /**
     * @var string|null Card number
     */
    private ?string $cardnumber;

    /**
     * @var string|null BTW number
     */
    private ?string $btw;

    /**
     * @var string|null Chamber of Commerce number
     */
    private ?string $kvk;

    /**
     * @var string|null Name of the cost centre
     */
    private ?string $costcentre;

    /**
     * @var string|null How did the customer find you
     */
    private ?string $findus;

    /**
     * @var string|null SSN number
     */
    private ?string $ssnnumber;

    /**
     * @var string|null ZZP number
     */
    private ?string $zzppass;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Billingaddress|null Billing address info
     */
    public function getBillingaddress(): ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Billingaddress
    {
        return $this->billingaddress;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Deliveryaddress|null Shipping address info
     */
    public function getDeliveryaddress(): ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Deliveryaddress
    {
        return $this->deliveryaddress;
    }

    /**
     * @return string|null E-mail address
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null Defines if this user is a consumer (b2c) or business (b2b) customer.
     */
    public function getCustomertype(): ?string
    {
        return $this->customertype;
    }

    /**
     * @return string|null Bankaccount number, within EU mostly IBAN will be used instead.
     */
    public function getBankaccount(): ?string
    {
        return $this->bankaccount;
    }

    /**
     * @return string|null Bank name
     */
    public function getBankname(): ?string
    {
        return $this->bankname;
    }

    /**
     * @return string|null Deprecated. This field will no longer be used. Please use 'bankaccount'.
     * @deprecated Please use 'bankaccount'.
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @return string|null Deprecated. This field will no longer be used. Please use 'bankname'.
     * @deprecated Please use 'bankname'.
     */
    public function getTenname(): ?string
    {
        return $this->tenname;
    }

    /**
     * @return string|null International Bank Account Number, if empty bankaccount could be used.
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @return string|null Bank Identifier Code. Used in combination with IBAN.
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @return string|null Customer reference. Could be used as customer number in some cases.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @return string|null Customer reservation number.
     */
    public function getReservationnumber(): ?string
    {
        return $this->reservationnumber;
    }

    /**
     * @return string|null Customer's income
     */
    public function getIncome(): ?string
    {
        return $this->income;
    }

    /**
     * @return string|null Deprecated. This field will no longer be used. Please use 'branch'.
     * @deprecated Please use 'branch'.
     */
    public function getBranche(): ?string
    {
        return $this->branche;
    }

    /**
     * @return string|null Customer's branch. Mostly used with company info.
     */
    public function getBranch(): ?string
    {
        return $this->branch;
    }

    /**
     * @return string|null Website of the customer
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @return string|null Club's city
     */
    public function getClubcity(): ?string
    {
        return $this->clubcity;
    }

    /**
     * @return string|null Club's comment
     */
    public function getClubcomment(): ?string
    {
        return $this->clubcomment;
    }

    /**
     * @return string|null Club's name
     */
    public function getClubname(): ?string
    {
        return $this->clubname;
    }

    /**
     * @return string|null Deprecated. Fair of the customer. See 'Fair'
     * @deprecated See 'Fair'
     */
    public function getBeurs(): ?string
    {
        return $this->beurs;
    }

    /**
     * @return string|null Deprecated. Booth of the customer. See 'Booth'
     * @deprecated See 'Booth'
     */
    public function getStand(): ?string
    {
        return $this->stand;
    }

    /**
     * @return string|null Fair of the customer.
     */
    public function getFair(): ?string
    {
        return $this->fair;
    }

    /**
     * @return string|null Booth of the customer.
     */
    public function getBooth(): ?string
    {
        return $this->booth;
    }

    /**
     * @return string|null Car brand
     */
    public function getCarbrand(): ?string
    {
        return $this->carbrand;
    }

    /**
     * @return string|null Car type
     */
    public function getCartype(): ?string
    {
        return $this->cartype;
    }

    /**
     * @return string|null Car weight
     */
    public function getCarweight(): ?string
    {
        return $this->carweight;
    }

    /**
     * @return string|null Birthdate of the customer
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    /**
     * @return string|null Birth time of the customer
     */
    public function getBirthtime(): ?string
    {
        return $this->birthtime;
    }

    /**
     * @return string|null Birth place of the customer
     */
    public function getBirthplace(): ?string
    {
        return $this->birthplace;
    }

    /**
     * @return string|null Card number
     */
    public function getCardnumber(): ?string
    {
        return $this->cardnumber;
    }

    /**
     * @return string|null BTW number
     */
    public function getBtw(): ?string
    {
        return $this->btw;
    }

    /**
     * @return string|null Chamber of Commerce number
     */
    public function getKvk(): ?string
    {
        return $this->kvk;
    }

    /**
     * @return string|null Name of the cost centre
     */
    public function getCostcentre(): ?string
    {
        return $this->costcentre;
    }

    /**
     * @return string|null How did the customer find you
     */
    public function getFindus(): ?string
    {
        return $this->findus;
    }

    /**
     * @return string|null SSN number
     */
    public function getSsnnumber(): ?string
    {
        return $this->ssnnumber;
    }

    /**
     * @return string|null ZZP number
     */
    public function getZzppass(): ?string
    {
        return $this->zzppass;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Billingaddress|null $billingaddress Billing address info
     * @return self
     */
    public function setBillingaddress(?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Billingaddress $billingaddress): self
    {
        $this->billingaddress = $billingaddress;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Deliveryaddress|null $deliveryaddress Shipping address info
     * @return self
     */
    public function setDeliveryaddress(?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Child\Deliveryaddress $deliveryaddress): self
    {
        $this->deliveryaddress = $deliveryaddress;
        return $this;
    }

    /**
     * @param string|null $email E-mail address
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string|null $customertype Defines if this user is a consumer (b2c) or business (b2b) customer.
     * @return self
     */
    public function setCustomertype(?string $customertype): self
    {
        $this->customertype = $customertype;
        return $this;
    }

    /**
     * @param string|null $bankaccount Bankaccount number, within EU mostly IBAN will be used instead.
     * @return self
     */
    public function setBankaccount(?string $bankaccount): self
    {
        $this->bankaccount = $bankaccount;
        return $this;
    }

    /**
     * @param string|null $bankname Bank name
     * @return self
     */
    public function setBankname(?string $bankname): self
    {
        $this->bankname = $bankname;
        return $this;
    }

    /**
     * @param string|null $bank Deprecated. This field will no longer be used. Please use 'bankaccount'.
     * @return self
     * @deprecated Please use 'bankaccount'.
     */
    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @param string|null $tenname Deprecated. This field will no longer be used. Please use 'bankname'.
     * @return self
     * @deprecated Please use 'bankname'.
     */
    public function setTenname(?string $tenname): self
    {
        $this->tenname = $tenname;
        return $this;
    }

    /**
     * @param string|null $iban International Bank Account Number, if empty bankaccount could be used.
     * @return self
     */
    public function setIban(?string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @param string|null $bic Bank Identifier Code. Used in combination with IBAN.
     * @return self
     */
    public function setBic(?string $bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * @param string|null $reference Customer reference. Could be used as customer number in some cases.
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param string|null $reservationnumber Customer reservation number.
     * @return self
     */
    public function setReservationnumber(?string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        return $this;
    }

    /**
     * @param string|null $income Customer's income
     * @return self
     */
    public function setIncome(?string $income): self
    {
        $this->income = $income;
        return $this;
    }

    /**
     * @param string|null $branche Deprecated. This field will no longer be used. Please use 'branch'.
     * @return self
     * @deprecated Please use 'branch'.
     */
    public function setBranche(?string $branche): self
    {
        $this->branche = $branche;
        return $this;
    }

    /**
     * @param string|null $branch Customer's branch. Mostly used with company info.
     * @return self
     */
    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @param string|null $website Website of the customer
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @param string|null $clubcity Club's city
     * @return self
     */
    public function setClubcity(?string $clubcity): self
    {
        $this->clubcity = $clubcity;
        return $this;
    }

    /**
     * @param string|null $clubcomment Club's comment
     * @return self
     */
    public function setClubcomment(?string $clubcomment): self
    {
        $this->clubcomment = $clubcomment;
        return $this;
    }

    /**
     * @param string|null $clubname Club's name
     * @return self
     */
    public function setClubname(?string $clubname): self
    {
        $this->clubname = $clubname;
        return $this;
    }

    /**
     * @param string|null $beurs Deprecated. Fair of the customer. See 'Fair'
     * @return self
     * @deprecated See 'Fair'
     */
    public function setBeurs(?string $beurs): self
    {
        $this->beurs = $beurs;
        return $this;
    }

    /**
     * @param string|null $stand Deprecated. Booth of the customer. See 'Booth'
     * @return self
     * @deprecated See 'Booth'
     */
    public function setStand(?string $stand): self
    {
        $this->stand = $stand;
        return $this;
    }

    /**
     * @param string|null $fair Fair of the customer.
     * @return self
     */
    public function setFair(?string $fair): self
    {
        $this->fair = $fair;
        return $this;
    }

    /**
     * @param string|null $booth Booth of the customer.
     * @return self
     */
    public function setBooth(?string $booth): self
    {
        $this->booth = $booth;
        return $this;
    }

    /**
     * @param string|null $carbrand Car brand
     * @return self
     */
    public function setCarbrand(?string $carbrand): self
    {
        $this->carbrand = $carbrand;
        return $this;
    }

    /**
     * @param string|null $cartype Car type
     * @return self
     */
    public function setCartype(?string $cartype): self
    {
        $this->cartype = $cartype;
        return $this;
    }

    /**
     * @param string|null $carweight Car weight
     * @return self
     */
    public function setCarweight(?string $carweight): self
    {
        $this->carweight = $carweight;
        return $this;
    }

    /**
     * @param string|null $birthdate Birthdate of the customer
     * @return self
     */
    public function setBirthdate(?string $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @param string|null $birthtime Birth time of the customer
     * @return self
     */
    public function setBirthtime(?string $birthtime): self
    {
        $this->birthtime = $birthtime;
        return $this;
    }

    /**
     * @param string|null $birthplace Birth place of the customer
     * @return self
     */
    public function setBirthplace(?string $birthplace): self
    {
        $this->birthplace = $birthplace;
        return $this;
    }

    /**
     * @param string|null $cardnumber Card number
     * @return self
     */
    public function setCardnumber(?string $cardnumber): self
    {
        $this->cardnumber = $cardnumber;
        return $this;
    }

    /**
     * @param string|null $btw BTW number
     * @return self
     */
    public function setBtw(?string $btw): self
    {
        $this->btw = $btw;
        return $this;
    }

    /**
     * @param string|null $kvk Chamber of Commerce number
     * @return self
     */
    public function setKvk(?string $kvk): self
    {
        $this->kvk = $kvk;
        return $this;
    }

    /**
     * @param string|null $costcentre Name of the cost centre
     * @return self
     */
    public function setCostcentre(?string $costcentre): self
    {
        $this->costcentre = $costcentre;
        return $this;
    }

    /**
     * @param string|null $findus How did the customer find you
     * @return self
     */
    public function setFindus(?string $findus): self
    {
        $this->findus = $findus;
        return $this;
    }

    /**
     * @param string|null $ssnnumber SSN number
     * @return self
     */
    public function setSsnnumber(?string $ssnnumber): self
    {
        $this->ssnnumber = $ssnnumber;
        return $this;
    }

    /**
     * @param string|null $zzppass ZZP number
     * @return self
     */
    public function setZzppass(?string $zzppass): self
    {
        $this->zzppass = $zzppass;
        return $this;
    }
}
