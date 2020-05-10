<?php 

namespace JacobDeKeizer\Ccv\Models\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class User implements Model
{
	use FromArray, ToArray;

	/**
	 * @var int|null Unique id of the user. If null, no user was associated with this order
	 */
	 private $id;

	/**
	 * @var float|null Percentage of discount this use received on this order. This discount is already calculated in the prices
	 */
	 private $discount_percentage;

	/**
	 * @var string|null Link to user associated with this order
	 */
	 private $href;

	/**
	 * @return self
	 */
	public static function fromArray(array $data): Model
	{
		return self::createFromArray($data);
	}
	/**
	 * @return int|null Unique id of the user. If null, no user was associated with this order
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @return float|null Percentage of discount this use received on this order. This discount is already calculated in the prices
	 */
	public function getDiscount_percentage(): ?float
	{
		return $this->discount_percentage;
	}

	/**
	 * @return string|null Link to user associated with this order
	 */
	public function getHref(): ?string
	{
		return $this->href;
	}

	/**
	 * @param int|null Unique id of the user. If null, no user was associated with this order
	 * @return self
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @param float|null Percentage of discount this use received on this order. This discount is already calculated in the prices
	 * @return self
	 */
	public function setDiscount_percentage($discount_percentage): self
	{
		$this->discount_percentage = $discount_percentage;
		return $this;
	}

	/**
	 * @param string|null Link to user associated with this order
	 * @return self
	 */
	public function setHref($href): self
	{
		$this->href = $href;
		return $this;
	}

}
