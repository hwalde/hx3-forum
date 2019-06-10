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

class GeneratedThreadRecord implements Record {
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $firstPostId RecordValue */
    protected $firstPostId;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $pollId RecordValue */
    protected $pollId;
    
    /** @var $open RecordValue */
    protected $open;
    
    /** @var $replyCount RecordValue */
    protected $replyCount;
    
    /** @var $postUserName RecordValue */
    protected $postUserName;
    
    /** @var $postUserId RecordValue */
    protected $postUserId;
    
    /** @var $lastPoster RecordValue */
    protected $lastPoster;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $views RecordValue */
    protected $views;
    
    /** @var $iconId RecordValue */
    protected $iconId;
    
    /** @var $notes RecordValue */
    protected $notes;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $sticky RecordValue */
    protected $sticky;
    
    /** @var $voteNum RecordValue */
    protected $voteNum;
    
    /** @var $voteTotal RecordValue */
    protected $voteTotal;
    
    /** @var $attach RecordValue */
    protected $attach;
    
    /** @var $similar RecordValue */
    protected $similar;
    
    /** @var $importThreadId RecordValue */
    protected $importThreadId;
    
    /** @var $importForumId RecordValue */
    protected $importForumId;
    
    /** @var $hiddenCount RecordValue */
    protected $hiddenCount;
    
    /** @var $deletedCount RecordValue */
    protected $deletedCount;
    
    /** @var $lastPostId RecordValue */
    protected $lastPostId;
    
    /** @var $prefixId RecordValue */
    protected $prefixId;
    
    /** @var $tagList RecordValue */
    protected $tagList;
    
    /** @var $vbSeoLinkbacksNo RecordValue */
    protected $vbSeoLinkbacksNo;

    public function __construct() {
		$this->threadId = new RecordValue();
		$this->title = new RecordValue();
		$this->firstPostId = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->forumId = new RecordValue();
		$this->pollId = new RecordValue();
		$this->open = new RecordValue();
		$this->replyCount = new RecordValue();
		$this->postUserName = new RecordValue();
		$this->postUserId = new RecordValue();
		$this->lastPoster = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->views = new RecordValue();
		$this->iconId = new RecordValue();
		$this->notes = new RecordValue();
		$this->visible = new RecordValue();
		$this->sticky = new RecordValue();
		$this->voteNum = new RecordValue();
		$this->voteTotal = new RecordValue();
		$this->attach = new RecordValue();
		$this->similar = new RecordValue();
		$this->importThreadId = new RecordValue();
		$this->importForumId = new RecordValue();
		$this->hiddenCount = new RecordValue();
		$this->deletedCount = new RecordValue();
		$this->lastPostId = new RecordValue();
		$this->prefixId = new RecordValue();
		$this->tagList = new RecordValue();
		$this->vbSeoLinkbacksNo = new RecordValue();
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
    
    public function hasFirstPostId(): bool
    {
        return $this->firstPostId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFirstPostId() : int
    {
        return $this->firstPostId->getValue();
    }

    /**
     * @param int $firstPostId
     */
    public function setFirstPostId(int $firstPostId)
    {
        $this->firstPostId->setChanged(true);
        $this->firstPostId->setValue($firstPostId);
    }
    
    public function hasLastPost(): bool
    {
        return $this->lastPost->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getLastPost() : ?int
    {
        return $this->lastPost->getValue();
    }

    /**
     * @param int|null $lastPost
     */
    public function setLastPost(?int $lastPost)
    {
        $this->lastPost->setChanged(true);
        $this->lastPost->setValue($lastPost);
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
    
    public function hasOpen(): bool
    {
        return $this->open->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOpen() : int
    {
        return $this->open->getValue();
    }

    /**
     * @param int $open
     */
    public function setOpen(int $open)
    {
        $this->open->setChanged(true);
        $this->open->setValue($open);
    }
    
    public function hasReplyCount(): bool
    {
        return $this->replyCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount->getValue();
    }

    /**
     * @param int $replyCount
     */
    public function setReplyCount(int $replyCount)
    {
        $this->replyCount->setChanged(true);
        $this->replyCount->setValue($replyCount);
    }
    
    public function hasPostUserName(): bool
    {
        return $this->postUserName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPostUserName() : string
    {
        return $this->postUserName->getValue();
    }

    /**
     * @param string $postUserName
     */
    public function setPostUserName(string $postUserName)
    {
        $this->postUserName->setChanged(true);
        $this->postUserName->setValue($postUserName);
    }
    
    public function hasPostUserId(): bool
    {
        return $this->postUserId->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getPostUserId() : ?int
    {
        return $this->postUserId->getValue();
    }

    /**
     * @param int|null $postUserId
     */
    public function setPostUserId(?int $postUserId)
    {
        $this->postUserId->setChanged(true);
        $this->postUserId->setValue($postUserId);
    }
    
    public function hasLastPoster(): bool
    {
        return $this->lastPoster->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster->getValue();
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster->setChanged(true);
        $this->lastPoster->setValue($lastPoster);
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
    
    public function hasViews(): bool
    {
        return $this->views->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getViews() : int
    {
        return $this->views->getValue();
    }

    /**
     * @param int $views
     */
    public function setViews(int $views)
    {
        $this->views->setChanged(true);
        $this->views->setValue($views);
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
    
    public function hasNotes(): bool
    {
        return $this->notes->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes->getValue();
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes)
    {
        $this->notes->setChanged(true);
        $this->notes->setValue($notes);
    }
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible->getValue();
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    public function hasSticky(): bool
    {
        return $this->sticky->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSticky() : int
    {
        return $this->sticky->getValue();
    }

    /**
     * @param int $sticky
     */
    public function setSticky(int $sticky)
    {
        $this->sticky->setChanged(true);
        $this->sticky->setValue($sticky);
    }
    
    public function hasVoteNum(): bool
    {
        return $this->voteNum->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoteNum() : int
    {
        return $this->voteNum->getValue();
    }

    /**
     * @param int $voteNum
     */
    public function setVoteNum(int $voteNum)
    {
        $this->voteNum->setChanged(true);
        $this->voteNum->setValue($voteNum);
    }
    
    public function hasVoteTotal(): bool
    {
        return $this->voteTotal->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoteTotal() : int
    {
        return $this->voteTotal->getValue();
    }

    /**
     * @param int $voteTotal
     */
    public function setVoteTotal(int $voteTotal)
    {
        $this->voteTotal->setChanged(true);
        $this->voteTotal->setValue($voteTotal);
    }
    
    public function hasAttach(): bool
    {
        return $this->attach->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttach() : int
    {
        return $this->attach->getValue();
    }

    /**
     * @param int $attach
     */
    public function setAttach(int $attach)
    {
        $this->attach->setChanged(true);
        $this->attach->setValue($attach);
    }
    
    public function hasSimilar(): bool
    {
        return $this->similar->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSimilar() : string
    {
        return $this->similar->getValue();
    }

    /**
     * @param string $similar
     */
    public function setSimilar(string $similar)
    {
        $this->similar->setChanged(true);
        $this->similar->setValue($similar);
    }
    
    public function hasImportThreadId(): bool
    {
        return $this->importThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportThreadId() : int
    {
        return $this->importThreadId->getValue();
    }

    /**
     * @param int $importThreadId
     */
    public function setImportThreadId(int $importThreadId)
    {
        $this->importThreadId->setChanged(true);
        $this->importThreadId->setValue($importThreadId);
    }
    
    public function hasImportForumId(): bool
    {
        return $this->importForumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportForumId() : int
    {
        return $this->importForumId->getValue();
    }

    /**
     * @param int $importForumId
     */
    public function setImportForumId(int $importForumId)
    {
        $this->importForumId->setChanged(true);
        $this->importForumId->setValue($importForumId);
    }
    
    public function hasHiddenCount(): bool
    {
        return $this->hiddenCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHiddenCount() : int
    {
        return $this->hiddenCount->getValue();
    }

    /**
     * @param int $hiddenCount
     */
    public function setHiddenCount(int $hiddenCount)
    {
        $this->hiddenCount->setChanged(true);
        $this->hiddenCount->setValue($hiddenCount);
    }
    
    public function hasDeletedCount(): bool
    {
        return $this->deletedCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDeletedCount() : int
    {
        return $this->deletedCount->getValue();
    }

    /**
     * @param int $deletedCount
     */
    public function setDeletedCount(int $deletedCount)
    {
        $this->deletedCount->setChanged(true);
        $this->deletedCount->setValue($deletedCount);
    }
    
    public function hasLastPostId(): bool
    {
        return $this->lastPostId->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getLastPostId() : ?int
    {
        return $this->lastPostId->getValue();
    }

    /**
     * @param int|null $lastPostId
     */
    public function setLastPostId(?int $lastPostId)
    {
        $this->lastPostId->setChanged(true);
        $this->lastPostId->setValue($lastPostId);
    }
    
    public function hasPrefixId(): bool
    {
        return $this->prefixId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPrefixId() : string
    {
        return $this->prefixId->getValue();
    }

    /**
     * @param string $prefixId
     */
    public function setPrefixId(string $prefixId)
    {
        $this->prefixId->setChanged(true);
        $this->prefixId->setValue($prefixId);
    }
    
    public function hasTagList(): bool
    {
        return $this->tagList->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getTagList() : ?string
    {
        return $this->tagList->getValue();
    }

    /**
     * @param string|null $tagList
     */
    public function setTagList(?string $tagList)
    {
        $this->tagList->setChanged(true);
        $this->tagList->setValue($tagList);
    }
    
    public function hasVbSeoLinkbacksNo(): bool
    {
        return $this->vbSeoLinkbacksNo->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVbSeoLinkbacksNo() : int
    {
        return $this->vbSeoLinkbacksNo->getValue();
    }

    /**
     * @param int $vbSeoLinkbacksNo
     */
    public function setVbSeoLinkbacksNo(int $vbSeoLinkbacksNo)
    {
        $this->vbSeoLinkbacksNo->setChanged(true);
        $this->vbSeoLinkbacksNo->setValue($vbSeoLinkbacksNo);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Thread
    {
        return new Thread();
    }
}