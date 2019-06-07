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

class GeneratedIconRecord implements Record {
    
    /** @var $iconId int */
    protected $iconId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $iconPath string */
    protected $iconPath;
    
    /** @var $imageCategoryId int */
    protected $imageCategoryId;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    public function hasIconId(): bool
    {
        return isset($this->iconId);
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId;
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId = $iconId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasIconPath(): bool
    {
        return isset($this->iconPath);
    }    

    /**
     * @return string
     */
    public function getIconPath() : string
    {
        return $this->iconPath;
    }

    /**
     * @param string $iconPath
     */
    public function setIconPath(string $iconPath)
    {
        $this->iconPath = $iconPath;
    }
    
    public function hasImageCategoryId(): bool
    {
        return isset($this->imageCategoryId);
    }    

    /**
     * @return int
     */
    public function getImageCategoryId() : int
    {
        return $this->imageCategoryId;
    }

    /**
     * @param int $imageCategoryId
     */
    public function setImageCategoryId(int $imageCategoryId)
    {
        $this->imageCategoryId = $imageCategoryId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Icon
    {
        return new Icon();
    }
}