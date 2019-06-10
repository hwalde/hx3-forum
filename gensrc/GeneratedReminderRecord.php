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

class GeneratedReminderRecord implements Record {
    
    /** @var $reminderId RecordValue */
    protected $reminderId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $text RecordValue */
    protected $text;
    
    /** @var $dueDate RecordValue */
    protected $dueDate;
    
    /** @var $adminOnly RecordValue */
    protected $adminOnly;
    
    /** @var $completedBy RecordValue */
    protected $completedBy;
    
    /** @var $completedTime RecordValue */
    protected $completedTime;

    public function __construct() {
		$this->reminderId = new RecordValue();
		$this->userId = new RecordValue();
		$this->title = new RecordValue();
		$this->text = new RecordValue();
		$this->dueDate = new RecordValue();
		$this->adminOnly = new RecordValue();
		$this->completedBy = new RecordValue();
		$this->completedTime = new RecordValue();
    }
    
    public function hasReminderId(): bool
    {
        return $this->reminderId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReminderId() : int
    {
        return $this->reminderId->getValue();
    }

    /**
     * @param int $reminderId
     */
    public function setReminderId(int $reminderId)
    {
        $this->reminderId->setChanged(true);
        $this->reminderId->setValue($reminderId);
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
    
    public function hasText(): bool
    {
        return $this->text->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text->getValue();
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text->setChanged(true);
        $this->text->setValue($text);
    }
    
    public function hasDueDate(): bool
    {
        return $this->dueDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDueDate() : int
    {
        return $this->dueDate->getValue();
    }

    /**
     * @param int $dueDate
     */
    public function setDueDate(int $dueDate)
    {
        $this->dueDate->setChanged(true);
        $this->dueDate->setValue($dueDate);
    }
    
    public function hasAdminOnly(): bool
    {
        return $this->adminOnly->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminOnly() : int
    {
        return $this->adminOnly->getValue();
    }

    /**
     * @param int $adminOnly
     */
    public function setAdminOnly(int $adminOnly)
    {
        $this->adminOnly->setChanged(true);
        $this->adminOnly->setValue($adminOnly);
    }
    
    public function hasCompletedBy(): bool
    {
        return $this->completedBy->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCompletedBy() : int
    {
        return $this->completedBy->getValue();
    }

    /**
     * @param int $completedBy
     */
    public function setCompletedBy(int $completedBy)
    {
        $this->completedBy->setChanged(true);
        $this->completedBy->setValue($completedBy);
    }
    
    public function hasCompletedTime(): bool
    {
        return $this->completedTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCompletedTime() : int
    {
        return $this->completedTime->getValue();
    }

    /**
     * @param int $completedTime
     */
    public function setCompletedTime(int $completedTime)
    {
        $this->completedTime->setChanged(true);
        $this->completedTime->setValue($completedTime);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Reminder
    {
        return new Reminder();
    }
}