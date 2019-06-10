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

class GeneratedSmilieRecord implements Record {
    
    /** @var $smilieId RecordValue */
    protected $smilieId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $smilieText RecordValue */
    protected $smilieText;
    
    /** @var $smiliePath RecordValue */
    protected $smiliePath;
    
    /** @var $imageCategoryId RecordValue */
    protected $imageCategoryId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $importSmilieId RecordValue */
    protected $importSmilieId;

    public function __construct() {
		$this->smilieId = new RecordValue();
		$this->title = new RecordValue();
		$this->smilieText = new RecordValue();
		$this->smiliePath = new RecordValue();
		$this->imageCategoryId = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->importSmilieId = new RecordValue();
    }
    
    public function hasSmilieId(): bool
    {
        return $this->smilieId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSmilieId() : int
    {
        return $this->smilieId->getValue();
    }

    /**
     * @param int $smilieId
     */
    public function setSmilieId(int $smilieId)
    {
        $this->smilieId->setChanged(true);
        $this->smilieId->setValue($smilieId);
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
    
    public function hasSmilieText(): bool
    {
        return $this->smilieText->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSmilieText() : string
    {
        return $this->smilieText->getValue();
    }

    /**
     * @param string $smilieText
     */
    public function setSmilieText(string $smilieText)
    {
        $this->smilieText->setChanged(true);
        $this->smilieText->setValue($smilieText);
    }
    
    public function hasSmiliePath(): bool
    {
        return $this->smiliePath->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSmiliePath() : string
    {
        return $this->smiliePath->getValue();
    }

    /**
     * @param string $smiliePath
     */
    public function setSmiliePath(string $smiliePath)
    {
        $this->smiliePath->setChanged(true);
        $this->smiliePath->setValue($smiliePath);
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
    
    public function hasImportSmilieId(): bool
    {
        return $this->importSmilieId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportSmilieId() : int
    {
        return $this->importSmilieId->getValue();
    }

    /**
     * @param int $importSmilieId
     */
    public function setImportSmilieId(int $importSmilieId)
    {
        $this->importSmilieId->setChanged(true);
        $this->importSmilieId->setValue($importSmilieId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Smilie
    {
        return new Smilie();
    }
}