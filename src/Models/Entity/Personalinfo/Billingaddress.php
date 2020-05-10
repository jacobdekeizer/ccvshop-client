<?php 

namespace JacobDeKeizer\Ccv\Models\Entity\Personalinfo;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Billingaddress implements Model
{
	use FromArray, ToArray;

	/**
	 * @var string|null Gender, can be blank.
	 */
	 private $gender;

	/**
	 * @var string|null Initials, optional
	 */
	 private $initials;

	/**
	 * @var string|null First name
	 */
	 private $first_name;

	/**
	 * @var string|null Last name
	 */
	 private $last_name;

	/**
	 * @var string|null Deprecated. This field will no longer be used. Please use 'first_name' and 'last_name' instead.
	 */
	 private $full_name;

	/**
	 * @var string|null Company name
	 */
	 private $company;

	/**
	 * @var string|null Address line 1. Either use address_line_1 and address_line_2 or street and housenumber.
	 */
	 private $address_line_1;

	/**
	 * @var string|null Address line 2. Note: see address_line_1.
	 */
	 private $address_line_2;

	/**
	 * @var string|null Street name. Note: see address_line_1.
	 */
	 private $street;

	/**
	 * @var int|null House number. Note: see address_line_1.
	 */
	 private $housenumber;

	/**
	 * @var string|null House number suffix. Note: see address_line_1.
	 */
	 private $housenumber_suffix;

	/**
	 * @var string|null Zipcode
	 */
	 private $zipcode;

	/**
	 * @var string|null City
	 */
	 private $city;

	/**
	 * @var string|null Province or state
	 */
	 private $province;

	/**
	 * @var string|null Deprecated. This field will no longer be used. Please use 'country_code'.
	 */
	 private $country;

	/**
	 * @var string|null Country Alpha-2 code. See ISO 3166-1
	 */
	 private $country_code;

	/**
	 * @var string|null Telephone number
	 */
	 private $telephone;

	/**
	 * @var string|null Fax number
	 */
	 private $fax;

	/**
	 * @var string|null Mobile phone number
	 */
	 private $mobile;

	/**
	 * @var string|null Comment left for the merchant
	 */
	 private $comment;

	/**
	 * @return self
	 */
	public static function fromArray(array $data): Model
	{
		return self::createFromArray($data);
	}
	/**
	 * @return string|null Gender, can be blank.
	 */
	public function getGender(): ?string
	{
		return $this->gender;
	}

	/**
	 * @return string|null Initials, optional
	 */
	public function getInitials(): ?string
	{
		return $this->initials;
	}

	/**
	 * @return string|null First name
	 */
	public function getFirst_name(): ?string
	{
		return $this->first_name;
	}

	/**
	 * @return string|null Last name
	 */
	public function getLast_name(): ?string
	{
		return $this->last_name;
	}

	/**
	 * @return string|null Deprecated. This field will no longer be used. Please use 'first_name' and 'last_name' instead.
	 */
	public function getFull_name(): ?string
	{
		return $this->full_name;
	}

	/**
	 * @return string|null Company name
	 */
	public function getCompany(): ?string
	{
		return $this->company;
	}

	/**
	 * @return string|null Address line 1. Either use address_line_1 and address_line_2 or street and housenumber.
	 */
	public function getAddress_line_1(): ?string
	{
		return $this->address_line_1;
	}

	/**
	 * @return string|null Address line 2. Note: see address_line_1.
	 */
	public function getAddress_line_2(): ?string
	{
		return $this->address_line_2;
	}

	/**
	 * @return string|null Street name. Note: see address_line_1.
	 */
	public function getStreet(): ?string
	{
		return $this->street;
	}

	/**
	 * @return int|null House number. Note: see address_line_1.
	 */
	public function getHousenumber(): ?int
	{
		return $this->housenumber;
	}

	/**
	 * @return string|null House number suffix. Note: see address_line_1.
	 */
	public function getHousenumber_suffix(): ?string
	{
		return $this->housenumber_suffix;
	}

	/**
	 * @return string|null Zipcode
	 */
	public function getZipcode(): ?string
	{
		return $this->zipcode;
	}

	/**
	 * @return string|null City
	 */
	public function getCity(): ?string
	{
		return $this->city;
	}

	/**
	 * @return string|null Province or state
	 */
	public function getProvince(): ?string
	{
		return $this->province;
	}

	/**
	 * @return string|null Deprecated. This field will no longer be used. Please use 'country_code'.
	 */
	public function getCountry(): ?string
	{
		return $this->country;
	}

	/**
	 * @return string|null Country Alpha-2 code. See ISO 3166-1
	 */
	public function getCountry_code(): ?string
	{
		return $this->country_code;
	}

	/**
	 * @return string|null Telephone number
	 */
	public function getTelephone(): ?string
	{
		return $this->telephone;
	}

	/**
	 * @return string|null Fax number
	 */
	public function getFax(): ?string
	{
		return $this->fax;
	}

	/**
	 * @return string|null Mobile phone number
	 */
	public function getMobile(): ?string
	{
		return $this->mobile;
	}

	/**
	 * @return string|null Comment left for the merchant
	 */
	public function getComment(): ?string
	{
		return $this->comment;
	}

	/**
	 * @param string|null Gender, can be blank.
	 * @return self
	 */
	public function setGender($gender): self
	{
		$this->gender = $gender;
		return $this;
	}

	/**
	 * @param string|null Initials, optional
	 * @return self
	 */
	public function setInitials($initials): self
	{
		$this->initials = $initials;
		return $this;
	}

	/**
	 * @param string|null First name
	 * @return self
	 */
	public function setFirst_name($first_name): self
	{
		$this->first_name = $first_name;
		return $this;
	}

	/**
	 * @param string|null Last name
	 * @return self
	 */
	public function setLast_name($last_name): self
	{
		$this->last_name = $last_name;
		return $this;
	}

	/**
	 * @param string|null Deprecated. This field will no longer be used. Please use 'first_name' and 'last_name' instead.
	 * @return self
	 */
	public function setFull_name($full_name): self
	{
		$this->full_name = $full_name;
		return $this;
	}

	/**
	 * @param string|null Company name
	 * @return self
	 */
	public function setCompany($company): self
	{
		$this->company = $company;
		return $this;
	}

	/**
	 * @param string|null Address line 1. Either use address_line_1 and address_line_2 or street and housenumber.
	 * @return self
	 */
	public function setAddress_line_1($address_line_1): self
	{
		$this->address_line_1 = $address_line_1;
		return $this;
	}

	/**
	 * @param string|null Address line 2. Note: see address_line_1.
	 * @return self
	 */
	public function setAddress_line_2($address_line_2): self
	{
		$this->address_line_2 = $address_line_2;
		return $this;
	}

	/**
	 * @param string|null Street name. Note: see address_line_1.
	 * @return self
	 */
	public function setStreet($street): self
	{
		$this->street = $street;
		return $this;
	}

	/**
	 * @param int|null House number. Note: see address_line_1.
	 * @return self
	 */
	public function setHousenumber($housenumber): self
	{
		$this->housenumber = $housenumber;
		return $this;
	}

	/**
	 * @param string|null House number suffix. Note: see address_line_1.
	 * @return self
	 */
	public function setHousenumber_suffix($housenumber_suffix): self
	{
		$this->housenumber_suffix = $housenumber_suffix;
		return $this;
	}

	/**
	 * @param string|null Zipcode
	 * @return self
	 */
	public function setZipcode($zipcode): self
	{
		$this->zipcode = $zipcode;
		return $this;
	}

	/**
	 * @param string|null City
	 * @return self
	 */
	public function setCity($city): self
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @param string|null Province or state
	 * @return self
	 */
	public function setProvince($province): self
	{
		$this->province = $province;
		return $this;
	}

	/**
	 * @param string|null Deprecated. This field will no longer be used. Please use 'country_code'.
	 * @return self
	 */
	public function setCountry($country): self
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @param string|null Country Alpha-2 code. See ISO 3166-1
	 * @return self
	 */
	public function setCountry_code($country_code): self
	{
		$this->country_code = $country_code;
		return $this;
	}

	/**
	 * @param string|null Telephone number
	 * @return self
	 */
	public function setTelephone($telephone): self
	{
		$this->telephone = $telephone;
		return $this;
	}

	/**
	 * @param string|null Fax number
	 * @return self
	 */
	public function setFax($fax): self
	{
		$this->fax = $fax;
		return $this;
	}

	/**
	 * @param string|null Mobile phone number
	 * @return self
	 */
	public function setMobile($mobile): self
	{
		$this->mobile = $mobile;
		return $this;
	}

	/**
	 * @param string|null Comment left for the merchant
	 * @return self
	 */
	public function setComment($comment): self
	{
		$this->comment = $comment;
		return $this;
	}

}
