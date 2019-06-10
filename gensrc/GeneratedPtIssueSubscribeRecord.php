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

class GeneratedPtIssueSubscribeRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $subscribeType RecordValue */
    protected $subscribeType;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->issueId = new RecordValue();
		$this->subscribeType = new RecordValue();
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
    
    public function hasSubscribeType(): bool
    {
        return $this->subscribeType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSubscribeType() : string
    {
        return $this->subscribeType->getValue();
    }

    /**
     * @param string $subscribeType
     */
    public function setSubscribeType(string $subscribeType)
    {
        $this->subscribeType->setChanged(true);
        $this->subscribeType->setValue($subscribeType);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueSubscribe
    {
        return new PtIssueSubscribe();
    }
}