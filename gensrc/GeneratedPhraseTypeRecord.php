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

class GeneratedPhraseTypeRecord implements Record {
    
    /** @var $fieldName RecordValue */
    protected $fieldName;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $editRows RecordValue */
    protected $editRows;
    
    /** @var $product RecordValue */
    protected $product;
    
    /** @var $special RecordValue */
    protected $special;

    public function __construct() {
		$this->fieldName = new RecordValue();
		$this->title = new RecordValue();
		$this->editRows = new RecordValue();
		$this->product = new RecordValue();
		$this->special = new RecordValue();
    }
    
    public function hasFieldName(): bool
    {
        return $this->fieldName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName->getValue();
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName->setChanged(true);
        $this->fieldName->setValue($fieldName);
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
    
    public function hasEditRows(): bool
    {
        return $this->editRows->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEditRows() : int
    {
        return $this->editRows->getValue();
    }

    /**
     * @param int $editRows
     */
    public function setEditRows(int $editRows)
    {
        $this->editRows->setChanged(true);
        $this->editRows->setValue($editRows);
    }
    
    public function hasProduct(): bool
    {
        return $this->product->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product->getValue();
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product->setChanged(true);
        $this->product->setValue($product);
    }
    
    public function hasSpecial(): bool
    {
        return $this->special->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSpecial() : int
    {
        return $this->special->getValue();
    }

    /**
     * @param int $special
     */
    public function setSpecial(int $special)
    {
        $this->special->setChanged(true);
        $this->special->setValue($special);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PhraseType
    {
        return new PhraseType();
    }
}