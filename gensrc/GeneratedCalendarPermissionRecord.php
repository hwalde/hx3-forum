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

class GeneratedCalendarPermissionRecord implements Record {
    
    /** @var $calendarPermissionId RecordValue */
    protected $calendarPermissionId;
    
    /** @var $calendarId RecordValue */
    protected $calendarId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $calendarPermissions RecordValue */
    protected $calendarPermissions;

    public function __construct() {
		$this->calendarPermissionId = new RecordValue();
		$this->calendarId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->calendarPermissions = new RecordValue();
    }
    
    public function hasCalendarPermissionId(): bool
    {
        return $this->calendarPermissionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarPermissionId() : int
    {
        return $this->calendarPermissionId->getValue();
    }

    /**
     * @param int $calendarPermissionId
     */
    public function setCalendarPermissionId(int $calendarPermissionId)
    {
        $this->calendarPermissionId->setChanged(true);
        $this->calendarPermissionId->setValue($calendarPermissionId);
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
    
    public function hasUserGroupId(): bool
    {
        return $this->userGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId->getValue();
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId->setChanged(true);
        $this->userGroupId->setValue($userGroupId);
    }
    
    public function hasCalendarPermissions(): bool
    {
        return $this->calendarPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarPermissions() : int
    {
        return $this->calendarPermissions->getValue();
    }

    /**
     * @param int $calendarPermissions
     */
    public function setCalendarPermissions(int $calendarPermissions)
    {
        $this->calendarPermissions->setChanged(true);
        $this->calendarPermissions->setValue($calendarPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CalendarPermission
    {
        return new CalendarPermission();
    }
}