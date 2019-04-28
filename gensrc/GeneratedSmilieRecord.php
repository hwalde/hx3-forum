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

class GeneratedSmilieRecord implements Record {
    
    /** @var $smilieId int */
    private $smilieId;
    
    /** @var $title string */
    private $title;
    
    /** @var $smilieText string */
    private $smilieText;
    
    /** @var $smiliePath string */
    private $smiliePath;
    
    /** @var $imageCategoryId int */
    private $imageCategoryId;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $importSmilieId int */
    private $importSmilieId;
    
    public function hasSmilieId(): bool
    {
        return isset($this->smilieId);
    }    

    /**
     * @return int
     */
    public function getSmilieId() : int
    {
        return $this->smilieId;
    }

    /**
     * @param int $smilieId
     */
    public function setSmilieId(int $smilieId)
    {
        $this->smilieId = $smilieId;
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
    
    public function hasSmilieText(): bool
    {
        return isset($this->smilieText);
    }    

    /**
     * @return string
     */
    public function getSmilieText() : string
    {
        return $this->smilieText;
    }

    /**
     * @param string $smilieText
     */
    public function setSmilieText(string $smilieText)
    {
        $this->smilieText = $smilieText;
    }
    
    public function hasSmiliePath(): bool
    {
        return isset($this->smiliePath);
    }    

    /**
     * @return string
     */
    public function getSmiliePath() : string
    {
        return $this->smiliePath;
    }

    /**
     * @param string $smiliePath
     */
    public function setSmiliePath(string $smiliePath)
    {
        $this->smiliePath = $smiliePath;
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
    
    public function hasImportSmilieId(): bool
    {
        return isset($this->importSmilieId);
    }    

    /**
     * @return int
     */
    public function getImportSmilieId() : int
    {
        return $this->importSmilieId;
    }

    /**
     * @param int $importSmilieId
     */
    public function setImportSmilieId(int $importSmilieId)
    {
        $this->importSmilieId = $importSmilieId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Smilie
    {
        return new Smilie();
    }
}