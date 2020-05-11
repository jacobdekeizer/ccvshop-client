<?php

namespace JacobDeKeizer\Ccv\Models\Orders\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Personalinfo implements Model
{
    use FromArray, ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Entity\Billingaddress|null Billing address info
     */
     private $billingaddress;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Entity\Deliveryaddress|null Shipping address info
     */
     private $deliveryaddress;

    /**
     * @var string|null E-mail address
     */
     private $email;

    /**
     * @var string Defines if this user is a consumer (b2c) or business (b2b) customer.
     */
     private $customertype;

    /**
     * @var string|null Bankaccount number, within EU mostly IBAN will be used instead.
     */
     private $bankaccount;

    /**
     * @var string|null International Bank Account Number, if empty bankaccount could be used.
     */
     private $iban;

    /**
     * @var string|null Bank Identifier Code. Used in combination with IBAN.
     */
     private $bic;

    /**
     * @var string|null Bank account number.
     */
     private $bank;

    /**
     * @var string|null Bank account holder's name, similar to 'bankname'.
     */
     private $tenname;

    /**
     * @var string|null Bank account holder's name.
     */
     private $bankname;

    /**
     * @var string|null Customer reference. Could be used as customer number in some cases.
     */
     private $reference;

    /**
     * @var string|null Customer reservation number.
     */
     private $reservationnumber;

    /**
     * @var string|null Customer's income
     */
     private $income;

    /**
     * @var string|null Deprecated. See 'branch'.
     */
     private $branche;

    /**
     * @var string|null Customer's branch. Mostly used with company info.
     */
     private $branch;

    /**
     * @var string|null Website of the customer
     */
     private $website;

    /**
     * @var string|null Club's city
     */
     private $clubcity;

    /**
     * @var string|null Club's comment
     */
     private $clubcomment;

    /**
     * @var string|null Club's name
     */
     private $clubname;

    /**
     * @var string|null Deprecated. Fair of the customer. See 'Fair'
     */
     private $beurs;

    /**
     * @var string|null Deprecated. Booth of the customer. See 'Booth'
     */
     private $stand;

    /**
     * @var string|null Fair of the customer.
     */
     private $fair;

    /**
     * @var string|null Booth of the customer.
     */
     private $booth;

    /**
     * @var string|null Car brand
     */
     private $carbrand;

    /**
     * @var string|null Car type
     */
     private $cartype;

    /**
     * @var string|null Car weight
     */
     private $carweight;

    /**
     * @var string|null Birthdate of the customer
     */
     private $birthdate;

    /**
     * @var string|null Birth time of the customer
     */
     private $birthtime;

    /**
     * @var string|null Birth place of the customer
     */
     private $birthplace;

    /**
     * @var string|null Card number
     */
     private $cardnumber;

    /**
     * @var string|null BTW number
     */
     private $btw;

    /**
     * @var string|null Chamber of Commerce number
     */
     private $kvk;

    /**
     * @var string|null Name of the cost centre
     */
     private $costcentre;

    /**
     * @var string|null How did the customer find you
     */
     private $findus;

    /**
     * @var string|null SSN number
     */
     private $ssnnumber;

    /**
     * @var string|null ZZP number
     */
     private $zzppass;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Entity\Billingaddress|null Billing address info
     */
    public function getBillingaddress(): ?\JacobDeKeizer\Ccv\Models\Orders\Entity\Billingaddress
    {
        return $this->billingaddress;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Entity\Deliveryaddress|null Shipping address info
     */
    public function getDeliveryaddress(): ?\JacobDeKeizer\Ccv\Models\Orders\Entity\Deliveryaddress
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
     * @return string Defines if this user is a consumer (b2c) or business (b2b) customer.
     */
    public function getCustomertype(): string
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
     * @return string|null Bank account number.
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @return string|null Bank account holder's name, similar to 'bankname'.
     */
    public function getTenname(): ?string
    {
        return $this->tenname;
    }

    /**
     * @return string|null Bank account holder's name.
     */
    public function getBankname(): ?string
    {
        return $this->bankname;
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
     * @return string|null Deprecated. See 'branch'.
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
     */
    public function getBeurs(): ?string
    {
        return $this->beurs;
    }

    /**
     * @return string|null Deprecated. Booth of the customer. See 'Booth'
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
     * @param \JacobDeKeizer\Ccv\Models\Orders\Entity\Billingaddress|null Billing address info
     * @return self
     */
    public function setBillingaddress(?\JacobDeKeizer\Ccv\Models\Orders\Entity\Billingaddress $billingaddress): self
    {
        $this->billingaddress = $billingaddress;
        $this->propertyFilled('billingaddress');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Entity\Deliveryaddress|null Shipping address info
     * @return self
     */
    public function setDeliveryaddress(?\JacobDeKeizer\Ccv\Models\Orders\Entity\Deliveryaddress $deliveryaddress): self
    {
        $this->deliveryaddress = $deliveryaddress;
        $this->propertyFilled('deliveryaddress');
        return $this;
    }

    /**
     * @param string|null E-mail address
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        $this->propertyFilled('email');
        return $this;
    }

    /**
     * @param string Defines if this user is a consumer (b2c) or business (b2b) customer.
     * @return self
     */
    public function setCustomertype(string $customertype): self
    {
        $this->customertype = $customertype;
        $this->propertyFilled('customertype');
        return $this;
    }

    /**
     * @param string|null Bankaccount number, within EU mostly IBAN will be used instead.
     * @return self
     */
    public function setBankaccount(?string $bankaccount): self
    {
        $this->bankaccount = $bankaccount;
        $this->propertyFilled('bankaccount');
        return $this;
    }

    /**
     * @param string|null International Bank Account Number, if empty bankaccount could be used.
     * @return self
     */
    public function setIban(?string $iban): self
    {
        $this->iban = $iban;
        $this->propertyFilled('iban');
        return $this;
    }

    /**
     * @param string|null Bank Identifier Code. Used in combination with IBAN.
     * @return self
     */
    public function setBic(?string $bic): self
    {
        $this->bic = $bic;
        $this->propertyFilled('bic');
        return $this;
    }

    /**
     * @param string|null Bank account number.
     * @return self
     */
    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        $this->propertyFilled('bank');
        return $this;
    }

    /**
     * @param string|null Bank account holder's name, similar to 'bankname'.
     * @return self
     */
    public function setTenname(?string $tenname): self
    {
        $this->tenname = $tenname;
        $this->propertyFilled('tenname');
        return $this;
    }

    /**
     * @param string|null Bank account holder's name.
     * @return self
     */
    public function setBankname(?string $bankname): self
    {
        $this->bankname = $bankname;
        $this->propertyFilled('bankname');
        return $this;
    }

    /**
     * @param string|null Customer reference. Could be used as customer number in some cases.
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        $this->propertyFilled('reference');
        return $this;
    }

    /**
     * @param string|null Customer reservation number.
     * @return self
     */
    public function setReservationnumber(?string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        $this->propertyFilled('reservationnumber');
        return $this;
    }

    /**
     * @param string|null Customer's income
     * @return self
     */
    public function setIncome(?string $income): self
    {
        $this->income = $income;
        $this->propertyFilled('income');
        return $this;
    }

    /**
     * @param string|null Deprecated. See 'branch'.
     * @return self
     */
    public function setBranche(?string $branche): self
    {
        $this->branche = $branche;
        $this->propertyFilled('branche');
        return $this;
    }

    /**
     * @param string|null Customer's branch. Mostly used with company info.
     * @return self
     */
    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;
        $this->propertyFilled('branch');
        return $this;
    }

    /**
     * @param string|null Website of the customer
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        $this->propertyFilled('website');
        return $this;
    }

    /**
     * @param string|null Club's city
     * @return self
     */
    public function setClubcity(?string $clubcity): self
    {
        $this->clubcity = $clubcity;
        $this->propertyFilled('clubcity');
        return $this;
    }

    /**
     * @param string|null Club's comment
     * @return self
     */
    public function setClubcomment(?string $clubcomment): self
    {
        $this->clubcomment = $clubcomment;
        $this->propertyFilled('clubcomment');
        return $this;
    }

    /**
     * @param string|null Club's name
     * @return self
     */
    public function setClubname(?string $clubname): self
    {
        $this->clubname = $clubname;
        $this->propertyFilled('clubname');
        return $this;
    }

    /**
     * @param string|null Deprecated. Fair of the customer. See 'Fair'
     * @return self
     */
    public function setBeurs(?string $beurs): self
    {
        $this->beurs = $beurs;
        $this->propertyFilled('beurs');
        return $this;
    }

    /**
     * @param string|null Deprecated. Booth of the customer. See 'Booth'
     * @return self
     */
    public function setStand(?string $stand): self
    {
        $this->stand = $stand;
        $this->propertyFilled('stand');
        return $this;
    }

    /**
     * @param string|null Fair of the customer.
     * @return self
     */
    public function setFair(?string $fair): self
    {
        $this->fair = $fair;
        $this->propertyFilled('fair');
        return $this;
    }

    /**
     * @param string|null Booth of the customer.
     * @return self
     */
    public function setBooth(?string $booth): self
    {
        $this->booth = $booth;
        $this->propertyFilled('booth');
        return $this;
    }

    /**
     * @param string|null Car brand
     * @return self
     */
    public function setCarbrand(?string $carbrand): self
    {
        $this->carbrand = $carbrand;
        $this->propertyFilled('carbrand');
        return $this;
    }

    /**
     * @param string|null Car type
     * @return self
     */
    public function setCartype(?string $cartype): self
    {
        $this->cartype = $cartype;
        $this->propertyFilled('cartype');
        return $this;
    }

    /**
     * @param string|null Car weight
     * @return self
     */
    public function setCarweight(?string $carweight): self
    {
        $this->carweight = $carweight;
        $this->propertyFilled('carweight');
        return $this;
    }

    /**
     * @param string|null Birthdate of the customer
     * @return self
     */
    public function setBirthdate(?string $birthdate): self
    {
        $this->birthdate = $birthdate;
        $this->propertyFilled('birthdate');
        return $this;
    }

    /**
     * @param string|null Birth time of the customer
     * @return self
     */
    public function setBirthtime(?string $birthtime): self
    {
        $this->birthtime = $birthtime;
        $this->propertyFilled('birthtime');
        return $this;
    }

    /**
     * @param string|null Birth place of the customer
     * @return self
     */
    public function setBirthplace(?string $birthplace): self
    {
        $this->birthplace = $birthplace;
        $this->propertyFilled('birthplace');
        return $this;
    }

    /**
     * @param string|null Card number
     * @return self
     */
    public function setCardnumber(?string $cardnumber): self
    {
        $this->cardnumber = $cardnumber;
        $this->propertyFilled('cardnumber');
        return $this;
    }

    /**
     * @param string|null BTW number
     * @return self
     */
    public function setBtw(?string $btw): self
    {
        $this->btw = $btw;
        $this->propertyFilled('btw');
        return $this;
    }

    /**
     * @param string|null Chamber of Commerce number
     * @return self
     */
    public function setKvk(?string $kvk): self
    {
        $this->kvk = $kvk;
        $this->propertyFilled('kvk');
        return $this;
    }

    /**
     * @param string|null Name of the cost centre
     * @return self
     */
    public function setCostcentre(?string $costcentre): self
    {
        $this->costcentre = $costcentre;
        $this->propertyFilled('costcentre');
        return $this;
    }

    /**
     * @param string|null How did the customer find you
     * @return self
     */
    public function setFindus(?string $findus): self
    {
        $this->findus = $findus;
        $this->propertyFilled('findus');
        return $this;
    }

    /**
     * @param string|null SSN number
     * @return self
     */
    public function setSsnnumber(?string $ssnnumber): self
    {
        $this->ssnnumber = $ssnnumber;
        $this->propertyFilled('ssnnumber');
        return $this;
    }

    /**
     * @param string|null ZZP number
     * @return self
     */
    public function setZzppass(?string $zzppass): self
    {
        $this->zzppass = $zzppass;
        $this->propertyFilled('zzppass');
        return $this;
    }
}
