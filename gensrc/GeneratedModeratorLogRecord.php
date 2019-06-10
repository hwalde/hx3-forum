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

class GeneratedModeratorLogRecord implements Record {
    
    /** @var $moderatorLogId RecordValue */
    protected $moderatorLogId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $pollId RecordValue */
    protected $pollId;
    
    /** @var $action RecordValue */
    protected $action;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $threadTitle RecordValue */
    protected $threadTitle;
    
    /** @var $attachmentId RecordValue */
    protected $attachmentId;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $id1 RecordValue */
    protected $id1;
    
    /** @var $id2 RecordValue */
    protected $id2;
    
    /** @var $id3 RecordValue */
    protected $id3;
    
    /** @var $id4 RecordValue */
    protected $id4;
    
    /** @var $id5 RecordValue */
    protected $id5;
    
    /** @var $product RecordValue */
    protected $product;

    public function __construct() {
		$this->moderatorLogId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->userId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->postId = new RecordValue();
		$this->pollId = new RecordValue();
		$this->action = new RecordValue();
		$this->type = new RecordValue();
		$this->threadTitle = new RecordValue();
		$this->attachmentId = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->id1 = new RecordValue();
		$this->id2 = new RecordValue();
		$this->id3 = new RecordValue();
		$this->id4 = new RecordValue();
		$this->id5 = new RecordValue();
		$this->product = new RecordValue();
    }
    
    public function hasModeratorLogId(): bool
    {
        return $this->moderatorLogId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModeratorLogId() : int
    {
        return $this->moderatorLogId->getValue();
    }

    /**
     * @param int $moderatorLogId
     */
    public function setModeratorLogId(int $moderatorLogId)
    {
        $this->moderatorLogId->setChanged(true);
        $this->moderatorLogId->setValue($moderatorLogId);
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
    
    public function hasForumId(): bool
    {
        return $this->forumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId->getValue();
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId->setChanged(true);
        $this->forumId->setValue($forumId);
    }
    
    public function hasThreadId(): bool
    {
        return $this->threadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId->getValue();
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId->setChanged(true);
        $this->threadId->setValue($threadId);
    }
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
    }
    
    public function hasPollId(): bool
    {
        return $this->pollId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPollId() : int
    {
        return $this->pollId->getValue();
    }

    /**
     * @param int $pollId
     */
    public function setPollId(int $pollId)
    {
        $this->pollId->setChanged(true);
        $this->pollId->setValue($pollId);
    }
    
    public function hasAction(): bool
    {
        return $this->action->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action->getValue();
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action->setChanged(true);
        $this->action->setValue($action);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type->getValue();
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    public function hasThreadTitle(): bool
    {
        return $this->threadTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getThreadTitle() : string
    {
        return $this->threadTitle->getValue();
    }

    /**
     * @param string $threadTitle
     */
    public function setThreadTitle(string $threadTitle)
    {
        $this->threadTitle->setChanged(true);
        $this->threadTitle->setValue($threadTitle);
    }
    
    public function hasAttachmentId(): bool
    {
        return $this->attachmentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId->getValue();
    }

    /**
     * @param int $attachmentId
     */
    public function setAttachmentId(int $attachmentId)
    {
        $this->attachmentId->setChanged(true);
        $this->attachmentId->setValue($attachmentId);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    public function hasId1(): bool
    {
        return $this->id1->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId1() : int
    {
        return $this->id1->getValue();
    }

    /**
     * @param int $id1
     */
    public function setId1(int $id1)
    {
        $this->id1->setChanged(true);
        $this->id1->setValue($id1);
    }
    
    public function hasId2(): bool
    {
        return $this->id2->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId2() : int
    {
        return $this->id2->getValue();
    }

    /**
     * @param int $id2
     */
    public function setId2(int $id2)
    {
        $this->id2->setChanged(true);
        $this->id2->setValue($id2);
    }
    
    public function hasId3(): bool
    {
        return $this->id3->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId3() : int
    {
        return $this->id3->getValue();
    }

    /**
     * @param int $id3
     */
    public function setId3(int $id3)
    {
        $this->id3->setChanged(true);
        $this->id3->setValue($id3);
    }
    
    public function hasId4(): bool
    {
        return $this->id4->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId4() : int
    {
        return $this->id4->getValue();
    }

    /**
     * @param int $id4
     */
    public function setId4(int $id4)
    {
        $this->id4->setChanged(true);
        $this->id4->setValue($id4);
    }
    
    public function hasId5(): bool
    {
        return $this->id5->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId5() : int
    {
        return $this->id5->getValue();
    }

    /**
     * @param int $id5
     */
    public function setId5(int $id5)
    {
        $this->id5->setChanged(true);
        $this->id5->setValue($id5);
    }
    
    public function hasProduct(): bool
    {
        return $this->product->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product->getValue();
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product->setChanged(true);
        $this->product->setValue($product);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ModeratorLog
    {
        return new ModeratorLog();
    }
}