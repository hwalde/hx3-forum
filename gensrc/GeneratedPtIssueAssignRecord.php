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

class GeneratedPtIssueAssignRecord implements Record {
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->issueId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasIssueId(): bool
    {
        return $this->issueId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId->getValue();
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId->setChanged(true);
        $this->issueId->setValue($issueId);
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueAssign
    {
        return new PtIssueAssign();
    }
}