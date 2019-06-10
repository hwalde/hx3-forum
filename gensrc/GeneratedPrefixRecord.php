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

class GeneratedPrefixRecord implements Record {
    
    /** @var $prefixId RecordValue */
    protected $prefixId;
    
    /** @var $prefixSetId RecordValue */
    protected $prefixSetId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->prefixId = new RecordValue();
		$this->prefixSetId = new RecordValue();
		$this->displayOrder = new RecordValue();
    }
    
    public function hasPrefixId(): bool
    {
        return $this->prefixId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPrefixId() : string
    {
        return $this->prefixId->getValue();
    }

    /**
     * @param string $prefixId
     */
    public function setPrefixId(string $prefixId)
    {
        $this->prefixId->setChanged(true);
        $this->prefixId->setValue($prefixId);
    }
    
    public function hasPrefixSetId(): bool
    {
        return $this->prefixSetId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPrefixSetId() : string
    {
        return $this->prefixSetId->getValue();
    }

    /**
     * @param string $prefixSetId
     */
    public function setPrefixSetId(string $prefixSetId)
    {
        $this->prefixSetId->setChanged(true);
        $this->prefixSetId->setValue($prefixSetId);
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
    public function __getModel(): Prefix
    {
        return new Prefix();
    }
}