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

class GeneratedReminderRecord implements Record {
    
    /** @var $reminderId int */
    private $reminderId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $title string */
    private $title;
    
    /** @var $text string */
    private $text;
    
    /** @var $dueDate int */
    private $dueDate;
    
    /** @var $adminOnly int */
    private $adminOnly;
    
    /** @var $completedBy int */
    private $completedBy;
    
    /** @var $completedTime int */
    private $completedTime;
    
    public function hasReminderId(): bool
    {
        return isset($this->reminderId);
    }    

    /**
     * @return int
     */
    public function getReminderId() : int
    {
        return $this->reminderId;
    }

    /**
     * @param int $reminderId
     */
    public function setReminderId(int $reminderId)
    {
        $this->reminderId = $reminderId;
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
    
    public function hasText(): bool
    {
        return isset($this->text);
    }    

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }
    
    public function hasDueDate(): bool
    {
        return isset($this->dueDate);
    }    

    /**
     * @return int
     */
    public function getDueDate() : int
    {
        return $this->dueDate;
    }

    /**
     * @param int $dueDate
     */
    public function setDueDate(int $dueDate)
    {
        $this->dueDate = $dueDate;
    }
    
    public function hasAdminOnly(): bool
    {
        return isset($this->adminOnly);
    }    

    /**
     * @return int
     */
    public function getAdminOnly() : int
    {
        return $this->adminOnly;
    }

    /**
     * @param int $adminOnly
     */
    public function setAdminOnly(int $adminOnly)
    {
        $this->adminOnly = $adminOnly;
    }
    
    public function hasCompletedBy(): bool
    {
        return isset($this->completedBy);
    }    

    /**
     * @return int
     */
    public function getCompletedBy() : int
    {
        return $this->completedBy;
    }

    /**
     * @param int $completedBy
     */
    public function setCompletedBy(int $completedBy)
    {
        $this->completedBy = $completedBy;
    }
    
    public function hasCompletedTime(): bool
    {
        return isset($this->completedTime);
    }    

    /**
     * @return int
     */
    public function getCompletedTime() : int
    {
        return $this->completedTime;
    }

    /**
     * @param int $completedTime
     */
    public function setCompletedTime(int $completedTime)
    {
        $this->completedTime = $completedTime;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Reminder
    {
        return new Reminder();
    }
}