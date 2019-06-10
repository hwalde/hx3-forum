<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace generated;

use POOQ\RecordValue;
use POOQ\Record;

class GeneratedProfileFieldCategoryRecord implements Record {
    
    /** @var $profileFieldCategoryId RecordValue */
    protected $profileFieldCategoryId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $location RecordValue */
    protected $location;

    public function __construct() {
		$this->profileFieldCategoryId = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->location = new RecordValue();
    }
    
    public function hasProfileFieldCategoryId(): bool
    {
        return $this->profileFieldCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfileFieldCategoryId() : int
    {
        return $this->profileFieldCategoryId->getValue();
    }

    /**
     * @param int $profileFieldCategoryId
     */
    public function setProfileFieldCategoryId(int $profileFieldCategoryId)
    {
        $this->profileFieldCategoryId->setChanged(true);
        $this->profileFieldCategoryId->setValue($profileFieldCategoryId);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
    }
    
    public function hasLocation(): bool
    {
        return $this->location->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location->getValue();
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location->setChanged(true);
        $this->location->setValue($location);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProfileFieldCategory
    {
        return new ProfileFieldCategory();
    }
}