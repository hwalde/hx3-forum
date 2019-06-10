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

class GeneratedImageCategoryRecord implements Record {
    
    /** @var $imageCategoryId RecordValue */
    protected $imageCategoryId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $imageType RecordValue */
    protected $imageType;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->imageCategoryId = new RecordValue();
		$this->title = new RecordValue();
		$this->imageType = new RecordValue();
		$this->displayOrder = new RecordValue();
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
    
    public function hasImageType(): bool
    {
        return $this->imageType->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImageType() : int
    {
        return $this->imageType->getValue();
    }

    /**
     * @param int $imageType
     */
    public function setImageType(int $imageType)
    {
        $this->imageType->setChanged(true);
        $this->imageType->setValue($imageType);
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
    public function __getModel(): ImageCategory
    {
        return new ImageCategory();
    }
}