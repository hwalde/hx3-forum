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

class GeneratedCalendarPermissionRecord implements Record {
    
    /** @var $calendarPermissionId int */
    private $calendarPermissionId;
    
    /** @var $calendarId int */
    private $calendarId;
    
    /** @var $userGroupId int */
    private $userGroupId;
    
    /** @var $calendarPermissions int */
    private $calendarPermissions;
    
    public function hasCalendarPermissionId(): bool
    {
        return isset($this->calendarPermissionId);
    }    

    /**
     * @return int
     */
    public function getCalendarPermissionId() : int
    {
        return $this->calendarPermissionId;
    }

    /**
     * @param int $calendarPermissionId
     */
    public function setCalendarPermissionId(int $calendarPermissionId)
    {
        $this->calendarPermissionId = $calendarPermissionId;
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
    
    public function hasUserGroupId(): bool
    {
        return isset($this->userGroupId);
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId = $userGroupId;
    }
    
    public function hasCalendarPermissions(): bool
    {
        return isset($this->calendarPermissions);
    }    

    /**
     * @return int
     */
    public function getCalendarPermissions() : int
    {
        return $this->calendarPermissions;
    }

    /**
     * @param int $calendarPermissions
     */
    public function setCalendarPermissions(int $calendarPermissions)
    {
        $this->calendarPermissions = $calendarPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CalendarPermission
    {
        return new CalendarPermission();
    }
}