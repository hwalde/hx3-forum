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

class GeneratedUserBanRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $displayGroupId int */
    protected $displayGroupId;
    
    /** @var $userTitle string */
    protected $userTitle;
    
    /** @var $customTitle int */
    protected $customTitle;
    
    /** @var $adminId int */
    protected $adminId;
    
    /** @var $bandate int */
    protected $bandate;
    
    /** @var $liftDate int */
    protected $liftDate;
    
    /** @var $reason string */
    protected $reason;
    
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
    
    public function hasDisplayGroupId(): bool
    {
        return isset($this->displayGroupId);
    }    

    /**
     * @return int
     */
    public function getDisplayGroupId() : int
    {
        return $this->displayGroupId;
    }

    /**
     * @param int $displayGroupId
     */
    public function setDisplayGroupId(int $displayGroupId)
    {
        $this->displayGroupId = $displayGroupId;
    }
    
    public function hasUserTitle(): bool
    {
        return isset($this->userTitle);
    }    

    /**
     * @return string
     */
    public function getUserTitle() : string
    {
        return $this->userTitle;
    }

    /**
     * @param string $userTitle
     */
    public function setUserTitle(string $userTitle)
    {
        $this->userTitle = $userTitle;
    }
    
    public function hasCustomTitle(): bool
    {
        return isset($this->customTitle);
    }    

    /**
     * @return int
     */
    public function getCustomTitle() : int
    {
        return $this->customTitle;
    }

    /**
     * @param int $customTitle
     */
    public function setCustomTitle(int $customTitle)
    {
        $this->customTitle = $customTitle;
    }
    
    public function hasAdminId(): bool
    {
        return isset($this->adminId);
    }    

    /**
     * @return int
     */
    public function getAdminId() : int
    {
        return $this->adminId;
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(int $adminId)
    {
        $this->adminId = $adminId;
    }
    
    public function hasBandate(): bool
    {
        return isset($this->bandate);
    }    

    /**
     * @return int
     */
    public function getBandate() : int
    {
        return $this->bandate;
    }

    /**
     * @param int $bandate
     */
    public function setBandate(int $bandate)
    {
        $this->bandate = $bandate;
    }
    
    public function hasLiftDate(): bool
    {
        return isset($this->liftDate);
    }    

    /**
     * @return int
     */
    public function getLiftDate() : int
    {
        return $this->liftDate;
    }

    /**
     * @param int $liftDate
     */
    public function setLiftDate(int $liftDate)
    {
        $this->liftDate = $liftDate;
    }
    
    public function hasReason(): bool
    {
        return isset($this->reason);
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserBan
    {
        return new UserBan();
    }
}