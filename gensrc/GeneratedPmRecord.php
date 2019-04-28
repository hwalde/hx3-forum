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

class GeneratedPmRecord implements Record {
    
    /** @var $pmId int */
    private $pmId;
    
    /** @var $pmTextId int */
    private $pmTextId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $folderId int */
    private $folderId;
    
    /** @var $messageRead int */
    private $messageRead;
    
    public function hasPmId(): bool
    {
        return isset($this->pmId);
    }    

    /**
     * @return int
     */
    public function getPmId() : int
    {
        return $this->pmId;
    }

    /**
     * @param int $pmId
     */
    public function setPmId(int $pmId)
    {
        $this->pmId = $pmId;
    }
    
    public function hasPmTextId(): bool
    {
        return isset($this->pmTextId);
    }    

    /**
     * @return int
     */
    public function getPmTextId() : int
    {
        return $this->pmTextId;
    }

    /**
     * @param int $pmTextId
     */
    public function setPmTextId(int $pmTextId)
    {
        $this->pmTextId = $pmTextId;
    }
    
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
    
    public function hasFolderId(): bool
    {
        return isset($this->folderId);
    }    

    /**
     * @return int
     */
    public function getFolderId() : int
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     */
    public function setFolderId(int $folderId)
    {
        $this->folderId = $folderId;
    }
    
    public function hasMessageRead(): bool
    {
        return isset($this->messageRead);
    }    

    /**
     * @return int
     */
    public function getMessageRead() : int
    {
        return $this->messageRead;
    }

    /**
     * @param int $messageRead
     */
    public function setMessageRead(int $messageRead)
    {
        $this->messageRead = $messageRead;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Pm
    {
        return new Pm();
    }
}