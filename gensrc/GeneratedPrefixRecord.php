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

class GeneratedPrefixRecord implements Record {
    
    /** @var $prefixId string */
    private $prefixId;
    
    /** @var $prefixSetId string */
    private $prefixSetId;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    public function hasPrefixId(): bool
    {
        return isset($this->prefixId);
    }    

    /**
     * @return string
     */
    public function getPrefixId() : string
    {
        return $this->prefixId;
    }

    /**
     * @param string $prefixId
     */
    public function setPrefixId(string $prefixId)
    {
        $this->prefixId = $prefixId;
    }
    
    public function hasPrefixSetId(): bool
    {
        return isset($this->prefixSetId);
    }    

    /**
     * @return string
     */
    public function getPrefixSetId() : string
    {
        return $this->prefixSetId;
    }

    /**
     * @param string $prefixSetId
     */
    public function setPrefixSetId(string $prefixSetId)
    {
        $this->prefixSetId = $prefixSetId;
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
    public function __getModel(): Prefix
    {
        return new Prefix();
    }
}