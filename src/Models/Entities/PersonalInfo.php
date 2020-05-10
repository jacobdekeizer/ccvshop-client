<?php

namespace JacobDeKeizer\Ccv\Models\Entities;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class PersonalInfo implements Model
{
    use FromArray, ToArray;

    private $billingaddress;
    private $deliveryaddress;
    private $email;
    private $customertype;
    private $bankaccount;
    private $iban;
    private $bic;
    private $bank;
    private $tenname;
    private $bankname;
    private $btw;
    private $kvk;
    private $reference;
    private $reservationnumber;
    private $income;
    private $branch;
    private $website;
    private $clubcity;
    private $clubcomment;
    private $clubname;
    private $fair;
    private $booth;
    private $carbrand;
    private $cartype;
    private $carweight;
    private $birthdate;
    private $birthplace;
    private $birthtime;
    private $cardnumber;
    private $findus;
    private $ssnnumber;
    private $zzppass;
    private $costcentre;

    /**
     * @return PersonalInfo
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    public function getBillingaddress(): Address
    {
        return $this->billingaddress;
    }

    public function getDeliveryaddress(): Address
    {
        return $this->deliveryaddress;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getCustomertype(): string
    {
        return $this->customertype;
    }

    public function getBankaccount(): ?string
    {
        return $this->bankaccount;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function getTenname(): ?string
    {
        return $this->tenname;
    }

    public function getBankname(): ?string
    {
        return $this->bankname;
    }

    public function getBtw(): ?string
    {
        return $this->btw;
    }

    public function getKvk(): ?string
    {
        return $this->kvk;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function getReservationnumber(): ?string
    {
        return $this->reservationnumber;
    }

    public function getIncome(): ?string
    {
        return $this->income;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function getClubcity(): ?string
    {
        return $this->clubcity;
    }

    public function getClubcomment(): ?string
    {
        return $this->clubcomment;
    }

    public function getClubname(): ?string
    {
        return $this->clubname;
    }

    public function getFair(): ?string
    {
        return $this->fair;
    }

    public function getBooth(): ?string
    {
        return $this->booth;
    }

    public function getCarbrand(): ?string
    {
        return $this->carbrand;
    }

    public function getCartype(): ?string
    {
        return $this->cartype;
    }

    public function getCarweight(): ?string
    {
        return $this->carweight;
    }

    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    public function getBirthplace(): ?string
    {
        return $this->birthplace;
    }

    public function getBirthtime(): ?string
    {
        return $this->birthtime;
    }

    public function getCardnumber(): ?string
    {
        return $this->cardnumber;
    }

    public function getFindus(): ?string
    {
        return $this->findus;
    }

    public function getSsnnumber(): ?string
    {
        return $this->ssnnumber;
    }

    public function getZzppass(): ?string
    {
        return $this->zzppass;
    }

    public function getCostcentre(): ?string
    {
        return $this->costcentre;
    }

    public function setBillingaddress(Address $billingaddress): self
    {
        $this->billingaddress = $billingaddress;
        return $this;
    }

    public function setDeliveryaddress(Address $deliveryaddress): self
    {
        $this->deliveryaddress = $deliveryaddress;
        return $this;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setCustomertype(string $customertype): self
    {
        $this->customertype = $customertype;
        return $this;
    }

    public function setBankaccount(?string $bankaccount): self
    {
        $this->bankaccount = $bankaccount;
        return $this;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    public function setTenname(?string $tenname): self
    {
        $this->tenname = $tenname;
        return $this;
    }

    public function setBankname(?string $bankname): self
    {
        $this->bankname = $bankname;
        return $this;
    }

    public function setBtw(?string $btw): self
    {
        $this->btw = $btw;
        return $this;
    }

    public function setKvk(?string $kvk): self
    {
        $this->kvk = $kvk;
        return $this;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setReservationnumber(?string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        return $this;
    }

    public function setIncome(?string $income): self
    {
        $this->income = $income;
        return $this;
    }

    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;
        return $this;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }

    public function setClubcity(?string $clubcity): self
    {
        $this->clubcity = $clubcity;
        return $this;
    }

    public function setClubcomment(?string $clubcomment): self
    {
        $this->clubcomment = $clubcomment;
        return $this;
    }

    public function setClubname(?string $clubname): self
    {
        $this->clubname = $clubname;
        return $this;
    }

    public function setFair(?string $fair): self
    {
        $this->fair = $fair;
        return $this;
    }

    public function setBooth(?string $booth): self
    {
        $this->booth = $booth;
        return $this;
    }

    public function setCarbrand(?string $carbrand): self
    {
        $this->carbrand = $carbrand;
        return $this;
    }

    public function setCartype(?string $cartype): self
    {
        $this->cartype = $cartype;
        return $this;
    }

    public function setCarweight(?string $carweight): self
    {
        $this->carweight = $carweight;
        return $this;
    }

    public function setBirthdate(?string $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function setBirthplace(?string $birthplace): self
    {
        $this->birthplace = $birthplace;
        return $this;
    }

    public function setBirthtime(?string $birthtime): self
    {
        $this->birthtime = $birthtime;
        return $this;
    }

    public function setCardnumber(?string $cardnumber): self
    {
        $this->cardnumber = $cardnumber;
        return $this;
    }

    public function setFindus(?string $findus): self
    {
        $this->findus = $findus;
        return $this;
    }

    public function setSsnnumber(?string $ssnnumber): self
    {
        $this->ssnnumber = $ssnnumber;
        return $this;
    }

    public function setZzppass(?string $zzppass): self
    {
        $this->zzppass = $zzppass;
        return $this;
    }

    public function setCostcentre(?string $costcentre): self
    {
        $this->costcentre = $costcentre;
        return $this;
    }
}
