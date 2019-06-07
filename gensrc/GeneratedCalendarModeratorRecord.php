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

class GeneratedCalendarModeratorRecord implements Record {
    
    /** @var $calendarModeratorId int */
    protected $calendarModeratorId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $calendarId int */
    protected $calendarId;
    
    /** @var $newEventEmail int */
    protected $newEventEmail;
    
    /** @var $permissions int */
    protected $permissions;
    
    public function hasCalendarModeratorId(): bool
    {
        return isset($this->calendarModeratorId);
    }    

    /**
     * @return int
     */
    public function getCalendarModeratorId() : int
    {
        return $this->calendarModeratorId;
    }

    /**
     * @param int $calendarModeratorId
     */
    public function setCalendarModeratorId(int $calendarModeratorId)
    {
        $this->calendarModeratorId = $calendarModeratorId;
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
    
    public function hasCalendarId(): bool
    {
        return isset($this->calendarId);
    }    

    /**
     * @return int
     */
    public function getCalendarId() : int
    {
        return $this->calendarId;
    }

    /**
     * @param int $calendarId
     */
    public function setCalendarId(int $calendarId)
    {
        $this->calendarId = $calendarId;
    }
    
    public function hasNewEventEmail(): bool
    {
        return isset($this->newEventEmail);
    }    

    /**
     * @return int
     */
    public function getNewEventEmail() : int
    {
        return $this->newEventEmail;
    }

    /**
     * @param int $newEventEmail
     */
    public function setNewEventEmail(int $newEventEmail)
    {
        $this->newEventEmail = $newEventEmail;
    }
    
    public function hasPermissions(): bool
    {
        return isset($this->permissions);
    }    

    /**
     * @return int
     */
    public function getPermissions() : int
    {
        return $this->permissions;
    }

    /**
     * @param int $permissions
     */
    public function setPermissions(int $permissions)
    {
        $this->permissions = $permissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CalendarModerator
    {
        return new CalendarModerator();
    }
}