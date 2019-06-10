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

class GeneratedPtIssueTypeRecord implements Record {
    
    /** @var $issueTypeId RecordValue */
    protected $issueTypeId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $iconFile RecordValue */
    protected $iconFile;

    public function __construct() {
		$this->issueTypeId = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->iconFile = new RecordValue();
    }
    
    public function hasIssueTypeId(): bool
    {
        return $this->issueTypeId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIssueTypeId() : string
    {
        return $this->issueTypeId->getValue();
    }

    /**
     * @param string $issueTypeId
     */
    public function setIssueTypeId(string $issueTypeId)
    {
        $this->issueTypeId->setChanged(true);
        $this->issueTypeId->setValue($issueTypeId);
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
    
    public function hasIconFile(): bool
    {
        return $this->iconFile->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIconFile() : string
    {
        return $this->iconFile->getValue();
    }

    /**
     * @param string $iconFile
     */
    public function setIconFile(string $iconFile)
    {
        $this->iconFile->setChanged(true);
        $this->iconFile->setValue($iconFile);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueType
    {
        return new PtIssueType();
    }
}