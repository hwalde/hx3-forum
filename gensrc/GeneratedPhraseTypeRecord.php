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

class GeneratedPhraseTypeRecord implements Record {
    
    /** @var $fieldName string */
    private $fieldName;
    
    /** @var $title string */
    private $title;
    
    /** @var $editRows int */
    private $editRows;
    
    /** @var $product string */
    private $product;
    
    /** @var $special int */
    private $special;
    
    public function hasFieldName(): bool
    {
        return isset($this->fieldName);
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
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
    
    public function hasEditRows(): bool
    {
        return isset($this->editRows);
    }    

    /**
     * @return int
     */
    public function getEditRows() : int
    {
        return $this->editRows;
    }

    /**
     * @param int $editRows
     */
    public function setEditRows(int $editRows)
    {
        $this->editRows = $editRows;
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
    
    public function hasSpecial(): bool
    {
        return isset($this->special);
    }    

    /**
     * @return int
     */
    public function getSpecial() : int
    {
        return $this->special;
    }

    /**
     * @param int $special
     */
    public function setSpecial(int $special)
    {
        $this->special = $special;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PhraseType
    {
        return new PhraseType();
    }
}