<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class View implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblock\View[] Collection of views
     */
    private $views;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblock\View[] Collection of views
     */
    public function getViews(): array
    {
        return $this->views;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblock\View[] $views Collection of views
     * @return self
     */
    public function setViews(array $views): self
    {
        $this->views = $views;
        $this->propertyFilled('views');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'views') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblock\View::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
