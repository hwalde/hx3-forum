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

class GeneratedPrefixSetRecord implements Record {
    
    /** @var $prefixSetId RecordValue */
    protected $prefixSetId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->prefixSetId = new RecordValue();
		$this->displayOrder = new RecordValue();
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
    public function __getModel(): PrefixSet
    {
        return new PrefixSet();
    }
}