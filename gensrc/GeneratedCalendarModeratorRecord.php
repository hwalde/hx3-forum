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

class GeneratedCalendarModeratorRecord implements Record {
    
    /** @var $calendarModeratorId RecordValue */
    protected $calendarModeratorId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $calendarId RecordValue */
    protected $calendarId;
    
    /** @var $newEventEmail RecordValue */
    protected $newEventEmail;
    
    /** @var $permissions RecordValue */
    protected $permissions;

    public function __construct() {
		$this->calendarModeratorId = new RecordValue();
		$this->userId = new RecordValue();
		$this->calendarId = new RecordValue();
		$this->newEventEmail = new RecordValue();
		$this->permissions = new RecordValue();
    }
    
    public function hasCalendarModeratorId(): bool
    {
        return $this->calendarModeratorId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarModeratorId() : int
    {
        return $this->calendarModeratorId->getValue();
    }

    /**
     * @param int $calendarModeratorId
     */
    public function setCalendarModeratorId(int $calendarModeratorId)
    {
        $this->calendarModeratorId->setChanged(true);
        $this->calendarModeratorId->setValue($calendarModeratorId);
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
    
    public function hasCalendarId(): bool
    {
        return $this->calendarId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarId() : int
    {
        return $this->calendarId->getValue();
    }

    /**
     * @param int $calendarId
     */
    public function setCalendarId(int $calendarId)
    {
        $this->calendarId->setChanged(true);
        $this->calendarId->setValue($calendarId);
    }
    
    public function hasNewEventEmail(): bool
    {
        return $this->newEventEmail->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNewEventEmail() : int
    {
        return $this->newEventEmail->getValue();
    }

    /**
     * @param int $newEventEmail
     */
    public function setNewEventEmail(int $newEventEmail)
    {
        $this->newEventEmail->setChanged(true);
        $this->newEventEmail->setValue($newEventEmail);
    }
    
    public function hasPermissions(): bool
    {
        return $this->permissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPermissions() : int
    {
        return $this->permissions->getValue();
    }

    /**
     * @param int $permissions
     */
    public function setPermissions(int $permissions)
    {
        $this->permissions->setChanged(true);
        $this->permissions->setValue($permissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CalendarModerator
    {
        return new CalendarModerator();
    }
}