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

class GeneratedAnnouncementRecord implements Record {
    
    /** @var $announcementId RecordValue */
    protected $announcementId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $startDate RecordValue */
    protected $startDate;
    
    /** @var $endDate RecordValue */
    protected $endDate;
    
    /** @var $pageText RecordValue */
    protected $pageText;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $views RecordValue */
    protected $views;
    
    /** @var $announcementOptions RecordValue */
    protected $announcementOptions;

    public function __construct() {
		$this->announcementId = new RecordValue();
		$this->title = new RecordValue();
		$this->userId = new RecordValue();
		$this->startDate = new RecordValue();
		$this->endDate = new RecordValue();
		$this->pageText = new RecordValue();
		$this->forumId = new RecordValue();
		$this->views = new RecordValue();
		$this->announcementOptions = new RecordValue();
    }
    
    public function hasAnnouncementId(): bool
    {
        return $this->announcementId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAnnouncementId() : int
    {
        return $this->announcementId->getValue();
    }

    /**
     * @param int $announcementId
     */
    public function setAnnouncementId(int $announcementId)
    {
        $this->announcementId->setChanged(true);
        $this->announcementId->setValue($announcementId);
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
    
    public function hasStartDate(): bool
    {
        return $this->startDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStartDate() : int
    {
        return $this->startDate->getValue();
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(int $startDate)
    {
        $this->startDate->setChanged(true);
        $this->startDate->setValue($startDate);
    }
    
    public function hasEndDate(): bool
    {
        return $this->endDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEndDate() : int
    {
        return $this->endDate->getValue();
    }

    /**
     * @param int $endDate
     */
    public function setEndDate(int $endDate)
    {
        $this->endDate->setChanged(true);
        $this->endDate->setValue($endDate);
    }
    
    public function hasPageText(): bool
    {
        return $this->pageText->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPageText() : string
    {
        return $this->pageText->getValue();
    }

    /**
     * @param string $pageText
     */
    public function setPageText(string $pageText)
    {
        $this->pageText->setChanged(true);
        $this->pageText->setValue($pageText);
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
    
    public function hasAnnouncementOptions(): bool
    {
        return $this->announcementOptions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAnnouncementOptions() : int
    {
        return $this->announcementOptions->getValue();
    }

    /**
     * @param int $announcementOptions
     */
    public function setAnnouncementOptions(int $announcementOptions)
    {
        $this->announcementOptions->setChanged(true);
        $this->announcementOptions->setValue($announcementOptions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Announcement
    {
        return new Announcement();
    }
}