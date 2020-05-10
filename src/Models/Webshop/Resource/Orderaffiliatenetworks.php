<?php 

namespace JacobDeKeizer\Ccv\Models\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orderaffiliatenetworks implements Model
{
	use FromArray, ToArray;

	/**
	 * @var string|null Link to affiliate of order
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
	 * @return string|null Link to affiliate of order
	 */
	public function getHref(): ?string
	{
		return $this->href;
	}

	/**
	 * @param string|null Link to affiliate of order
	 * @return self
	 */
	public function setHref($href): self
	{
		$this->href = $href;
		return $this;
	}

}
