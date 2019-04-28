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

class GeneratedAnnouncementRecord implements Record {
    
    /** @var $announcementId int */
    private $announcementId;
    
    /** @var $title string */
    private $title;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $startDate int */
    private $startDate;
    
    /** @var $endDate int */
    private $endDate;
    
    /** @var $pageText string */
    private $pageText;
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $views int */
    private $views;
    
    /** @var $announcementOptions int */
    private $announcementOptions;
    
    public function hasAnnouncementId(): bool
    {
        return isset($this->announcementId);
    }    

    /**
     * @return int
     */
    public function getAnnouncementId() : int
    {
        return $this->announcementId;
    }

    /**
     * @param int $announcementId
     */
    public function setAnnouncementId(int $announcementId)
    {
        $this->announcementId = $announcementId;
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
    
    public function hasStartDate(): bool
    {
        return isset($this->startDate);
    }    

    /**
     * @return int
     */
    public function getStartDate() : int
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(int $startDate)
    {
        $this->startDate = $startDate;
    }
    
    public function hasEndDate(): bool
    {
        return isset($this->endDate);
    }    

    /**
     * @return int
     */
    public function getEndDate() : int
    {
        return $this->endDate;
    }

    /**
     * @param int $endDate
     */
    public function setEndDate(int $endDate)
    {
        $this->endDate = $endDate;
    }
    
    public function hasPageText(): bool
    {
        return isset($this->pageText);
    }    

    /**
     * @return string
     */
    public function getPageText() : string
    {
        return $this->pageText;
    }

    /**
     * @param string $pageText
     */
    public function setPageText(string $pageText)
    {
        $this->pageText = $pageText;
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
    
    public function hasAnnouncementOptions(): bool
    {
        return isset($this->announcementOptions);
    }    

    /**
     * @return int
     */
    public function getAnnouncementOptions() : int
    {
        return $this->announcementOptions;
    }

    /**
     * @param int $announcementOptions
     */
    public function setAnnouncementOptions(int $announcementOptions)
    {
        $this->announcementOptions = $announcementOptions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Announcement
    {
        return new Announcement();
    }
}