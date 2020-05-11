<?php

namespace JacobDeKeizer\Ccv\Models\Entity\Personalinfo;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray, ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Billingaddress|null Billing address info
     */
     private $billingaddress;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Deliveryaddress|null Shipping address info
     */
     private $deliveryaddress;

    /**
     * @var string|null E-mail address
     */
     private $email;

    /**
     * @var string|null Defines if this user is a consumer (b2c) or business (b2b) customer.
     */
     private $customertype;

    /**
     * @var string|null Bankaccount number, within EU mostly IBAN will be used instead.
     */
     private $bankaccount;

    /**
     * @var string|null Bank name
     */
     private $bankname;

    /**
     * @var string|null Deprecated. This field will no longer be used. Please use 'bankaccount'.
     */
     private $bank;

    /**
     * @var string|null Deprecated. This field will no longer be used. Please use 'bankname'.
     */
     private $tenname;

    /**
     * @var string|null International Bank Account Number, if empty bankaccount could be used.
     */
     private $iban;

    /**
     * @var string|null Bank Identifier Code. Used in combination with IBAN.
     */
     private $bic;

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
     * @var string|null Deprecated. This field will no longer be used. Please use 'branch'.
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
     * @return \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Billingaddress|null Billing address info
     */
    public function getBillingaddress(): ?\JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Billingaddress
    {
        return $this->billingaddress;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Deliveryaddress|null Shipping address info
     */
    public function getDeliveryaddress(): ?\JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Deliveryaddress
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
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @return string|null Deprecated. This field will no longer be used. Please use 'bankname'.
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
     * @param \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Billingaddress|null Billing address info
     * @return self
     */
    public function setBillingaddress($billingaddress): self
    {
        $this->billingaddress = $billingaddress;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Deliveryaddress|null Shipping address info
     * @return self
     */
    public function setDeliveryaddress($deliveryaddress): self
    {
        $this->deliveryaddress = $deliveryaddress;
        return $this;
    }

    /**
     * @param string|null E-mail address
     * @return self
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string|null Defines if this user is a consumer (b2c) or business (b2b) customer.
     * @return self
     */
    public function setCustomertype($customertype): self
    {
        $this->customertype = $customertype;
        return $this;
    }

    /**
     * @param string|null Bankaccount number, within EU mostly IBAN will be used instead.
     * @return self
     */
    public function setBankaccount($bankaccount): self
    {
        $this->bankaccount = $bankaccount;
        return $this;
    }

    /**
     * @param string|null Bank name
     * @return self
     */
    public function setBankname($bankname): self
    {
        $this->bankname = $bankname;
        return $this;
    }

    /**
     * @param string|null Deprecated. This field will no longer be used. Please use 'bankaccount'.
     * @return self
     */
    public function setBank($bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @param string|null Deprecated. This field will no longer be used. Please use 'bankname'.
     * @return self
     */
    public function setTenname($tenname): self
    {
        $this->tenname = $tenname;
        return $this;
    }

    /**
     * @param string|null International Bank Account Number, if empty bankaccount could be used.
     * @return self
     */
    public function setIban($iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @param string|null Bank Identifier Code. Used in combination with IBAN.
     * @return self
     */
    public function setBic($bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * @param string|null Customer reference. Could be used as customer number in some cases.
     * @return self
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param string|null Customer reservation number.
     * @return self
     */
    public function setReservationnumber($reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        return $this;
    }

    /**
     * @param string|null Customer's income
     * @return self
     */
    public function setIncome($income): self
    {
        $this->income = $income;
        return $this;
    }

    /**
     * @param string|null Deprecated. This field will no longer be used. Please use 'branch'.
     * @return self
     */
    public function setBranche($branche): self
    {
        $this->branche = $branche;
        return $this;
    }

    /**
     * @param string|null Customer's branch. Mostly used with company info.
     * @return self
     */
    public function setBranch($branch): self
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @param string|null Website of the customer
     * @return self
     */
    public function setWebsite($website): self
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @param string|null Club's city
     * @return self
     */
    public function setClubcity($clubcity): self
    {
        $this->clubcity = $clubcity;
        return $this;
    }

    /**
     * @param string|null Club's comment
     * @return self
     */
    public function setClubcomment($clubcomment): self
    {
        $this->clubcomment = $clubcomment;
        return $this;
    }

    /**
     * @param string|null Club's name
     * @return self
     */
    public function setClubname($clubname): self
    {
        $this->clubname = $clubname;
        return $this;
    }

    /**
     * @param string|null Deprecated. Fair of the customer. See 'Fair'
     * @return self
     */
    public function setBeurs($beurs): self
    {
        $this->beurs = $beurs;
        return $this;
    }

    /**
     * @param string|null Deprecated. Booth of the customer. See 'Booth'
     * @return self
     */
    public function setStand($stand): self
    {
        $this->stand = $stand;
        return $this;
    }

    /**
     * @param string|null Fair of the customer.
     * @return self
     */
    public function setFair($fair): self
    {
        $this->fair = $fair;
        return $this;
    }

    /**
     * @param string|null Booth of the customer.
     * @return self
     */
    public function setBooth($booth): self
    {
        $this->booth = $booth;
        return $this;
    }

    /**
     * @param string|null Car brand
     * @return self
     */
    public function setCarbrand($carbrand): self
    {
        $this->carbrand = $carbrand;
        return $this;
    }

    /**
     * @param string|null Car type
     * @return self
     */
    public function setCartype($cartype): self
    {
        $this->cartype = $cartype;
        return $this;
    }

    /**
     * @param string|null Car weight
     * @return self
     */
    public function setCarweight($carweight): self
    {
        $this->carweight = $carweight;
        return $this;
    }

    /**
     * @param string|null Birthdate of the customer
     * @return self
     */
    public function setBirthdate($birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @param string|null Birth time of the customer
     * @return self
     */
    public function setBirthtime($birthtime): self
    {
        $this->birthtime = $birthtime;
        return $this;
    }

    /**
     * @param string|null Birth place of the customer
     * @return self
     */
    public function setBirthplace($birthplace): self
    {
        $this->birthplace = $birthplace;
        return $this;
    }

    /**
     * @param string|null Card number
     * @return self
     */
    public function setCardnumber($cardnumber): self
    {
        $this->cardnumber = $cardnumber;
        return $this;
    }

    /**
     * @param string|null BTW number
     * @return self
     */
    public function setBtw($btw): self
    {
        $this->btw = $btw;
        return $this;
    }

    /**
     * @param string|null Chamber of Commerce number
     * @return self
     */
    public function setKvk($kvk): self
    {
        $this->kvk = $kvk;
        return $this;
    }

    /**
     * @param string|null Name of the cost centre
     * @return self
     */
    public function setCostcentre($costcentre): self
    {
        $this->costcentre = $costcentre;
        return $this;
    }

    /**
     * @param string|null How did the customer find you
     * @return self
     */
    public function setFindus($findus): self
    {
        $this->findus = $findus;
        return $this;
    }

    /**
     * @param string|null SSN number
     * @return self
     */
    public function setSsnnumber($ssnnumber): self
    {
        $this->ssnnumber = $ssnnumber;
        return $this;
    }

    /**
     * @param string|null ZZP number
     * @return self
     */
    public function setZzppass($zzppass): self
    {
        $this->zzppass = $zzppass;
        return $this;
    }
}
