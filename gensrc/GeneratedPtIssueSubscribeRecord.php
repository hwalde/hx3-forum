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

class GeneratedPtIssueSubscribeRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $issueId int */
    protected $issueId;
    
    /** @var $subscribeType string */
    protected $subscribeType;
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasIssueId(): bool
    {
        return isset($this->issueId);
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId;
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId = $issueId;
    }
    
    public function hasSubscribeType(): bool
    {
        return isset($this->subscribeType);
    }    

    /**
     * @return string
     */
    public function getSubscribeType() : string
    {
        return $this->subscribeType;
    }

    /**
     * @param string $subscribeType
     */
    public function setSubscribeType(string $subscribeType)
    {
        $this->subscribeType = $subscribeType;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueSubscribe
    {
        return new PtIssueSubscribe();
    }
}