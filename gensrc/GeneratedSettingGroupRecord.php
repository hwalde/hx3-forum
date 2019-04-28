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

class GeneratedSettingGroupRecord implements Record {
    
    /** @var $groupTitle string */
    private $groupTitle;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $volatile int */
    private $volatile;
    
    /** @var $product string */
    private $product;
    
    public function hasGroupTitle(): bool
    {
        return isset($this->groupTitle);
    }    

    /**
     * @return string
     */
    public function getGroupTitle() : string
    {
        return $this->groupTitle;
    }

    /**
     * @param string $groupTitle
     */
    public function setGroupTitle(string $groupTitle)
    {
        $this->groupTitle = $groupTitle;
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
    
    public function hasVolatile(): bool
    {
        return isset($this->volatile);
    }    

    /**
     * @return int
     */
    public function getVolatile() : int
    {
        return $this->volatile;
    }

    /**
     * @param int $volatile
     */
    public function setVolatile(int $volatile)
    {
        $this->volatile = $volatile;
    }
    
    public function hasProduct(): bool
    {
        return isset($this->product);
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product = $product;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SettingGroup
    {
        return new SettingGroup();
    }
}