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

class GeneratedModeratorLogRecord implements Record {
    
    /** @var $moderatorLogId int */
    protected $moderatorLogId;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $forumId int */
    protected $forumId;
    
    /** @var $threadId int */
    protected $threadId;
    
    /** @var $postId int */
    protected $postId;
    
    /** @var $pollId int */
    protected $pollId;
    
    /** @var $action string */
    protected $action;
    
    /** @var $type int */
    protected $type;
    
    /** @var $threadTitle string */
    protected $threadTitle;
    
    /** @var $attachmentId int */
    protected $attachmentId;
    
    /** @var $ipAddress string */
    protected $ipAddress;
    
    /** @var $id1 int */
    protected $id1;
    
    /** @var $id2 int */
    protected $id2;
    
    /** @var $id3 int */
    protected $id3;
    
    /** @var $id4 int */
    protected $id4;
    
    /** @var $id5 int */
    protected $id5;
    
    /** @var $product string */
    protected $product;
    
    public function hasModeratorLogId(): bool
    {
        return isset($this->moderatorLogId);
    }    

    /**
     * @return int
     */
    public function getModeratorLogId() : int
    {
        return $this->moderatorLogId;
    }

    /**
     * @param int $moderatorLogId
     */
    public function setModeratorLogId(int $moderatorLogId)
    {
        $this->moderatorLogId = $moderatorLogId;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
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
    
    public function hasForumId(): bool
    {
        return isset($this->forumId);
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId;
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId = $forumId;
    }
    
    public function hasThreadId(): bool
    {
        return isset($this->threadId);
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId;
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId = $threadId;
    }
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function hasPollId(): bool
    {
        return isset($this->pollId);
    }    

    /**
     * @return int
     */
    public function getPollId() : int
    {
        return $this->pollId;
    }

    /**
     * @param int $pollId
     */
    public function setPollId(int $pollId)
    {
        $this->pollId = $pollId;
    }
    
    public function hasAction(): bool
    {
        return isset($this->action);
    }    

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }
    
    public function hasThreadTitle(): bool
    {
        return isset($this->threadTitle);
    }    

    /**
     * @return string
     */
    public function getThreadTitle() : string
    {
        return $this->threadTitle;
    }

    /**
     * @param string $threadTitle
     */
    public function setThreadTitle(string $threadTitle)
    {
        $this->threadTitle = $threadTitle;
    }
    
    public function hasAttachmentId(): bool
    {
        return isset($this->attachmentId);
    }    

    /**
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId;
    }

    /**
     * @param int $attachmentId
     */
    public function setAttachmentId(int $attachmentId)
    {
        $this->attachmentId = $attachmentId;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    public function hasId1(): bool
    {
        return isset($this->id1);
    }    

    /**
     * @return int
     */
    public function getId1() : int
    {
        return $this->id1;
    }

    /**
     * @param int $id1
     */
    public function setId1(int $id1)
    {
        $this->id1 = $id1;
    }
    
    public function hasId2(): bool
    {
        return isset($this->id2);
    }    

    /**
     * @return int
     */
    public function getId2() : int
    {
        return $this->id2;
    }

    /**
     * @param int $id2
     */
    public function setId2(int $id2)
    {
        $this->id2 = $id2;
    }
    
    public function hasId3(): bool
    {
        return isset($this->id3);
    }    

    /**
     * @return int
     */
    public function getId3() : int
    {
        return $this->id3;
    }

    /**
     * @param int $id3
     */
    public function setId3(int $id3)
    {
        $this->id3 = $id3;
    }
    
    public function hasId4(): bool
    {
        return isset($this->id4);
    }    

    /**
     * @return int
     */
    public function getId4() : int
    {
        return $this->id4;
    }

    /**
     * @param int $id4
     */
    public function setId4(int $id4)
    {
        $this->id4 = $id4;
    }
    
    public function hasId5(): bool
    {
        return isset($this->id5);
    }    

    /**
     * @return int
     */
    public function getId5() : int
    {
        return $this->id5;
    }

    /**
     * @param int $id5
     */
    public function setId5(int $id5)
    {
        $this->id5 = $id5;
    }
    
    public function hasProduct(): bool
    {
        return isset($this->product);
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product = $product;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ModeratorLog
    {
        return new ModeratorLog();
    }
}