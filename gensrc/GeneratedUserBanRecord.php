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

class GeneratedUserBanRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $displayGroupId RecordValue */
    protected $displayGroupId;
    
    /** @var $userTitle RecordValue */
    protected $userTitle;
    
    /** @var $customTitle RecordValue */
    protected $customTitle;
    
    /** @var $adminId RecordValue */
    protected $adminId;
    
    /** @var $bandate RecordValue */
    protected $bandate;
    
    /** @var $liftDate RecordValue */
    protected $liftDate;
    
    /** @var $reason RecordValue */
    protected $reason;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->displayGroupId = new RecordValue();
		$this->userTitle = new RecordValue();
		$this->customTitle = new RecordValue();
		$this->adminId = new RecordValue();
		$this->bandate = new RecordValue();
		$this->liftDate = new RecordValue();
		$this->reason = new RecordValue();
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
    
    public function hasDisplayGroupId(): bool
    {
        return $this->displayGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayGroupId() : int
    {
        return $this->displayGroupId->getValue();
    }

    /**
     * @param int $displayGroupId
     */
    public function setDisplayGroupId(int $displayGroupId)
    {
        $this->displayGroupId->setChanged(true);
        $this->displayGroupId->setValue($displayGroupId);
    }
    
    public function hasUserTitle(): bool
    {
        return $this->userTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserTitle() : string
    {
        return $this->userTitle->getValue();
    }

    /**
     * @param string $userTitle
     */
    public function setUserTitle(string $userTitle)
    {
        $this->userTitle->setChanged(true);
        $this->userTitle->setValue($userTitle);
    }
    
    public function hasCustomTitle(): bool
    {
        return $this->customTitle->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCustomTitle() : int
    {
        return $this->customTitle->getValue();
    }

    /**
     * @param int $customTitle
     */
    public function setCustomTitle(int $customTitle)
    {
        $this->customTitle->setChanged(true);
        $this->customTitle->setValue($customTitle);
    }
    
    public function hasAdminId(): bool
    {
        return $this->adminId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminId() : int
    {
        return $this->adminId->getValue();
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(int $adminId)
    {
        $this->adminId->setChanged(true);
        $this->adminId->setValue($adminId);
    }
    
    public function hasBandate(): bool
    {
        return $this->bandate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBandate() : int
    {
        return $this->bandate->getValue();
    }

    /**
     * @param int $bandate
     */
    public function setBandate(int $bandate)
    {
        $this->bandate->setChanged(true);
        $this->bandate->setValue($bandate);
    }
    
    public function hasLiftDate(): bool
    {
        return $this->liftDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLiftDate() : int
    {
        return $this->liftDate->getValue();
    }

    /**
     * @param int $liftDate
     */
    public function setLiftDate(int $liftDate)
    {
        $this->liftDate->setChanged(true);
        $this->liftDate->setValue($liftDate);
    }
    
    public function hasReason(): bool
    {
        return $this->reason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason->getValue();
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason->setChanged(true);
        $this->reason->setValue($reason);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserBan
    {
        return new UserBan();
    }
}