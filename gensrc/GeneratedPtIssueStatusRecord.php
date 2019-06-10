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

class GeneratedPtIssueStatusRecord implements Record {
    
    /** @var $issueStatusId RecordValue */
    protected $issueStatusId;
    
    /** @var $issueTypeId RecordValue */
    protected $issueTypeId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $canpetitionFrom RecordValue */
    protected $canpetitionFrom;

    public function __construct() {
		$this->issueStatusId = new RecordValue();
		$this->issueTypeId = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->canpetitionFrom = new RecordValue();
    }
    
    public function hasIssueStatusId(): bool
    {
        return $this->issueStatusId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueStatusId() : int
    {
        return $this->issueStatusId->getValue();
    }

    /**
     * @param int $issueStatusId
     */
    public function setIssueStatusId(int $issueStatusId)
    {
        $this->issueStatusId->setChanged(true);
        $this->issueStatusId->setValue($issueStatusId);
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
    
    public function hasCanpetitionFrom(): bool
    {
        return $this->canpetitionFrom->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCanpetitionFrom() : int
    {
        return $this->canpetitionFrom->getValue();
    }

    /**
     * @param int $canpetitionFrom
     */
    public function setCanpetitionFrom(int $canpetitionFrom)
    {
        $this->canpetitionFrom->setChanged(true);
        $this->canpetitionFrom->setValue($canpetitionFrom);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueStatus
    {
        return new PtIssueStatus();
    }
}