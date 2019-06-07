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

use POOQ\Record;

class GeneratedProfileFieldCategoryRecord implements Record {
    
    /** @var $profileFieldCategoryId int */
    protected $profileFieldCategoryId;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $location string */
    protected $location;
    
    public function hasProfileFieldCategoryId(): bool
    {
        return isset($this->profileFieldCategoryId);
    }    

    /**
     * @return int
     */
    public function getProfileFieldCategoryId() : int
    {
        return $this->profileFieldCategoryId;
    }

    /**
     * @param int $profileFieldCategoryId
     */
    public function setProfileFieldCategoryId(int $profileFieldCategoryId)
    {
        $this->profileFieldCategoryId = $profileFieldCategoryId;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }
    
    public function hasLocation(): bool
    {
        return isset($this->location);
    }    

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProfileFieldCategory
    {
        return new ProfileFieldCategory();
    }
}