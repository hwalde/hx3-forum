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

class GeneratedPostEditHistoryRecord implements Record {
    
    /** @var $postEditHistoryid int */
    private $postEditHistoryid;
    
    /** @var $postId int */
    private $postId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $userName string */
    private $userName;
    
    /** @var $title string */
    private $title;
    
    /** @var $iconId int */
    private $iconId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $reason string */
    private $reason;
    
    /** @var $original int */
    private $original;
    
    /** @var $pageText string|null */
    private $pageText;
    
    public function hasPostEditHistoryid(): bool
    {
        return isset($this->postEditHistoryid);
    }    

    /**
     * @return int
     */
    public function getPostEditHistoryid() : int
    {
        return $this->postEditHistoryid;
    }

    /**
     * @param int $postEditHistoryid
     */
    public function setPostEditHistoryid(int $postEditHistoryid)
    {
        $this->postEditHistoryid = $postEditHistoryid;
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
    
    public function hasUserName(): bool
    {
        return isset($this->userName);
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasIconId(): bool
    {
        return isset($this->iconId);
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId;
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId = $iconId;
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
    
    public function hasReason(): bool
    {
        return isset($this->reason);
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;
    }
    
    public function hasOriginal(): bool
    {
        return isset($this->original);
    }    

    /**
     * @return int
     */
    public function getOriginal() : int
    {
        return $this->original;
    }

    /**
     * @param int $original
     */
    public function setOriginal(int $original)
    {
        $this->original = $original;
    }
    
    public function hasPageText(): bool
    {
        return isset($this->pageText);
    }    

    /**
     * @return string|null
     */
    public function getPageText() : ?string
    {
        return $this->pageText;
    }

    /**
     * @param string|null $pageText
     */
    public function setPageText(?string $pageText)
    {
        $this->pageText = $pageText;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostEditHistory
    {
        return new PostEditHistory();
    }
}