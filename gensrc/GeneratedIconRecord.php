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

class GeneratedIconRecord implements Record {
    
    /** @var $iconId RecordValue */
    protected $iconId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $iconPath RecordValue */
    protected $iconPath;
    
    /** @var $imageCategoryId RecordValue */
    protected $imageCategoryId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->iconId = new RecordValue();
		$this->title = new RecordValue();
		$this->iconPath = new RecordValue();
		$this->imageCategoryId = new RecordValue();
		$this->displayOrder = new RecordValue();
    }
    
    public function hasIconId(): bool
    {
        return $this->iconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId->getValue();
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId->setChanged(true);
        $this->iconId->setValue($iconId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasIconPath(): bool
    {
        return $this->iconPath->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIconPath() : string
    {
        return $this->iconPath->getValue();
    }

    /**
     * @param string $iconPath
     */
    public function setIconPath(string $iconPath)
    {
        $this->iconPath->setChanged(true);
        $this->iconPath->setValue($iconPath);
    }
    
    public function hasImageCategoryId(): bool
    {
        return $this->imageCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImageCategoryId() : int
    {
        return $this->imageCategoryId->getValue();
    }

    /**
     * @param int $imageCategoryId
     */
    public function setImageCategoryId(int $imageCategoryId)
    {
        $this->imageCategoryId->setChanged(true);
        $this->imageCategoryId->setValue($imageCategoryId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Icon
    {
        return new Icon();
    }
}