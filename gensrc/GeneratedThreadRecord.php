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

class GeneratedThreadRecord implements Record {
    
    /** @var $threadId int */
    private $threadId;
    
    /** @var $title string */
    private $title;
    
    /** @var $firstPostId int */
    private $firstPostId;
    
    /** @var $lastPost int|null */
    private $lastPost;
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $pollId int */
    private $pollId;
    
    /** @var $open int */
    private $open;
    
    /** @var $replyCount int */
    private $replyCount;
    
    /** @var $postUserName string */
    private $postUserName;
    
    /** @var $postUserId int|null */
    private $postUserId;
    
    /** @var $lastPoster string */
    private $lastPoster;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $views int */
    private $views;
    
    /** @var $iconId int */
    private $iconId;
    
    /** @var $notes string */
    private $notes;
    
    /** @var $visible int */
    private $visible;
    
    /** @var $sticky int */
    private $sticky;
    
    /** @var $voteNum int */
    private $voteNum;
    
    /** @var $voteTotal int */
    private $voteTotal;
    
    /** @var $attach int */
    private $attach;
    
    /** @var $similar string */
    private $similar;
    
    /** @var $importThreadId int */
    private $importThreadId;
    
    /** @var $importForumId int */
    private $importForumId;
    
    /** @var $hiddenCount int */
    private $hiddenCount;
    
    /** @var $deletedCount int */
    private $deletedCount;
    
    /** @var $lastPostId int|null */
    private $lastPostId;
    
    /** @var $prefixId string */
    private $prefixId;
    
    /** @var $tagList string|null */
    private $tagList;
    
    /** @var $vbSeoLinkbacksNo int */
    private $vbSeoLinkbacksNo;
    
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
    
    public function hasFirstPostId(): bool
    {
        return isset($this->firstPostId);
    }    

    /**
     * @return int
     */
    public function getFirstPostId() : int
    {
        return $this->firstPostId;
    }

    /**
     * @param int $firstPostId
     */
    public function setFirstPostId(int $firstPostId)
    {
        $this->firstPostId = $firstPostId;
    }
    
    public function hasLastPost(): bool
    {
        return isset($this->lastPost);
    }    

    /**
     * @return int|null
     */
    public function getLastPost() : ?int
    {
        return $this->lastPost;
    }

    /**
     * @param int|null $lastPost
     */
    public function setLastPost(?int $lastPost)
    {
        $this->lastPost = $lastPost;
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
    
    public function hasOpen(): bool
    {
        return isset($this->open);
    }    

    /**
     * @return int
     */
    public function getOpen() : int
    {
        return $this->open;
    }

    /**
     * @param int $open
     */
    public function setOpen(int $open)
    {
        $this->open = $open;
    }
    
    public function hasReplyCount(): bool
    {
        return isset($this->replyCount);
    }    

    /**
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount;
    }

    /**
     * @param int $replyCount
     */
    public function setReplyCount(int $replyCount)
    {
        $this->replyCount = $replyCount;
    }
    
    public function hasPostUserName(): bool
    {
        return isset($this->postUserName);
    }    

    /**
     * @return string
     */
    public function getPostUserName() : string
    {
        return $this->postUserName;
    }

    /**
     * @param string $postUserName
     */
    public function setPostUserName(string $postUserName)
    {
        $this->postUserName = $postUserName;
    }
    
    public function hasPostUserId(): bool
    {
        return isset($this->postUserId);
    }    

    /**
     * @return int|null
     */
    public function getPostUserId() : ?int
    {
        return $this->postUserId;
    }

    /**
     * @param int|null $postUserId
     */
    public function setPostUserId(?int $postUserId)
    {
        $this->postUserId = $postUserId;
    }
    
    public function hasLastPoster(): bool
    {
        return isset($this->lastPoster);
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster;
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster = $lastPoster;
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
    
    public function hasViews(): bool
    {
        return isset($this->views);
    }    

    /**
     * @return int
     */
    public function getViews() : int
    {
        return $this->views;
    }

    /**
     * @param int $views
     */
    public function setViews(int $views)
    {
        $this->views = $views;
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
    
    public function hasNotes(): bool
    {
        return isset($this->notes);
    }    

    /**
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
    }
    
    public function hasVisible(): bool
    {
        return isset($this->visible);
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible;
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible = $visible;
    }
    
    public function hasSticky(): bool
    {
        return isset($this->sticky);
    }    

    /**
     * @return int
     */
    public function getSticky() : int
    {
        return $this->sticky;
    }

    /**
     * @param int $sticky
     */
    public function setSticky(int $sticky)
    {
        $this->sticky = $sticky;
    }
    
    public function hasVoteNum(): bool
    {
        return isset($this->voteNum);
    }    

    /**
     * @return int
     */
    public function getVoteNum() : int
    {
        return $this->voteNum;
    }

    /**
     * @param int $voteNum
     */
    public function setVoteNum(int $voteNum)
    {
        $this->voteNum = $voteNum;
    }
    
    public function hasVoteTotal(): bool
    {
        return isset($this->voteTotal);
    }    

    /**
     * @return int
     */
    public function getVoteTotal() : int
    {
        return $this->voteTotal;
    }

    /**
     * @param int $voteTotal
     */
    public function setVoteTotal(int $voteTotal)
    {
        $this->voteTotal = $voteTotal;
    }
    
    public function hasAttach(): bool
    {
        return isset($this->attach);
    }    

    /**
     * @return int
     */
    public function getAttach() : int
    {
        return $this->attach;
    }

    /**
     * @param int $attach
     */
    public function setAttach(int $attach)
    {
        $this->attach = $attach;
    }
    
    public function hasSimilar(): bool
    {
        return isset($this->similar);
    }    

    /**
     * @return string
     */
    public function getSimilar() : string
    {
        return $this->similar;
    }

    /**
     * @param string $similar
     */
    public function setSimilar(string $similar)
    {
        $this->similar = $similar;
    }
    
    public function hasImportThreadId(): bool
    {
        return isset($this->importThreadId);
    }    

    /**
     * @return int
     */
    public function getImportThreadId() : int
    {
        return $this->importThreadId;
    }

    /**
     * @param int $importThreadId
     */
    public function setImportThreadId(int $importThreadId)
    {
        $this->importThreadId = $importThreadId;
    }
    
    public function hasImportForumId(): bool
    {
        return isset($this->importForumId);
    }    

    /**
     * @return int
     */
    public function getImportForumId() : int
    {
        return $this->importForumId;
    }

    /**
     * @param int $importForumId
     */
    public function setImportForumId(int $importForumId)
    {
        $this->importForumId = $importForumId;
    }
    
    public function hasHiddenCount(): bool
    {
        return isset($this->hiddenCount);
    }    

    /**
     * @return int
     */
    public function getHiddenCount() : int
    {
        return $this->hiddenCount;
    }

    /**
     * @param int $hiddenCount
     */
    public function setHiddenCount(int $hiddenCount)
    {
        $this->hiddenCount = $hiddenCount;
    }
    
    public function hasDeletedCount(): bool
    {
        return isset($this->deletedCount);
    }    

    /**
     * @return int
     */
    public function getDeletedCount() : int
    {
        return $this->deletedCount;
    }

    /**
     * @param int $deletedCount
     */
    public function setDeletedCount(int $deletedCount)
    {
        $this->deletedCount = $deletedCount;
    }
    
    public function hasLastPostId(): bool
    {
        return isset($this->lastPostId);
    }    

    /**
     * @return int|null
     */
    public function getLastPostId() : ?int
    {
        return $this->lastPostId;
    }

    /**
     * @param int|null $lastPostId
     */
    public function setLastPostId(?int $lastPostId)
    {
        $this->lastPostId = $lastPostId;
    }
    
    public function hasPrefixId(): bool
    {
        return isset($this->prefixId);
    }    

    /**
     * @return string
     */
    public function getPrefixId() : string
    {
        return $this->prefixId;
    }

    /**
     * @param string $prefixId
     */
    public function setPrefixId(string $prefixId)
    {
        $this->prefixId = $prefixId;
    }
    
    public function hasTagList(): bool
    {
        return isset($this->tagList);
    }    

    /**
     * @return string|null
     */
    public function getTagList() : ?string
    {
        return $this->tagList;
    }

    /**
     * @param string|null $tagList
     */
    public function setTagList(?string $tagList)
    {
        $this->tagList = $tagList;
    }
    
    public function hasVbSeoLinkbacksNo(): bool
    {
        return isset($this->vbSeoLinkbacksNo);
    }    

    /**
     * @return int
     */
    public function getVbSeoLinkbacksNo() : int
    {
        return $this->vbSeoLinkbacksNo;
    }

    /**
     * @param int $vbSeoLinkbacksNo
     */
    public function setVbSeoLinkbacksNo(int $vbSeoLinkbacksNo)
    {
        $this->vbSeoLinkbacksNo = $vbSeoLinkbacksNo;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Thread
    {
        return new Thread();
    }
}