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

class GeneratedPostEditHistoryRecord implements Record {
    
    /** @var $postEditHistoryid RecordValue */
    protected $postEditHistoryid;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $iconId RecordValue */
    protected $iconId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $reason RecordValue */
    protected $reason;
    
    /** @var $original RecordValue */
    protected $original;
    
    /** @var $pageText RecordValue */
    protected $pageText;

    public function __construct() {
		$this->postEditHistoryid = new RecordValue();
		$this->postId = new RecordValue();
		$this->userId = new RecordValue();
		$this->userName = new RecordValue();
		$this->title = new RecordValue();
		$this->iconId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->reason = new RecordValue();
		$this->original = new RecordValue();
		$this->pageText = new RecordValue();
    }
    
    public function hasPostEditHistoryid(): bool
    {
        return $this->postEditHistoryid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostEditHistoryid() : int
    {
        return $this->postEditHistoryid->getValue();
    }

    /**
     * @param int $postEditHistoryid
     */
    public function setPostEditHistoryid(int $postEditHistoryid)
    {
        $this->postEditHistoryid->setChanged(true);
        $this->postEditHistoryid->setValue($postEditHistoryid);
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
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasIconId(): bool
    {
        return $this->iconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId->getValue();
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId->setChanged(true);
        $this->iconId->setValue($iconId);
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
    
    public function hasReason(): bool
    {
        return $this->reason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason->getValue();
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason->setChanged(true);
        $this->reason->setValue($reason);
    }
    
    public function hasOriginal(): bool
    {
        return $this->original->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOriginal() : int
    {
        return $this->original->getValue();
    }

    /**
     * @param int $original
     */
    public function setOriginal(int $original)
    {
        $this->original->setChanged(true);
        $this->original->setValue($original);
    }
    
    public function hasPageText(): bool
    {
        return $this->pageText->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPageText() : ?string
    {
        return $this->pageText->getValue();
    }

    /**
     * @param string|null $pageText
     */
    public function setPageText(?string $pageText)
    {
        $this->pageText->setChanged(true);
        $this->pageText->setValue($pageText);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostEditHistory
    {
        return new PostEditHistory();
    }
}