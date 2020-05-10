<?php 

namespace JacobDeKeizer\Ccv\Models\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Ordernotifications implements Model
{
	use FromArray, ToArray;

	/**
	 * @var string Link to the collection.
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
	 * @return string Link to the collection.
	 */
	public function getHref(): string
	{
		return $this->href;
	}

	/**
	 * @param string Link to the collection.
	 * @return self
	 */
	public function setHref($href): self
	{
		$this->href = $href;
		return $this;
	}

}
