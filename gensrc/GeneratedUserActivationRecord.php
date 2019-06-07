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

class GeneratedUserActivationRecord implements Record {
    
    /** @var $userActivationId int */
    protected $userActivationId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $activationId int */
    protected $activationId;
    
    /** @var $type int */
    protected $type;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $emailChange int */
    protected $emailChange;
    
    public function hasUserActivationId(): bool
    {
        return isset($this->userActivationId);
    }    

    /**
     * @return int
     */
    public function getUserActivationId() : int
    {
        return $this->userActivationId;
    }

    /**
     * @param int $userActivationId
     */
    public function setUserActivationId(int $userActivationId)
    {
        $this->userActivationId = $userActivationId;
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
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasActivationId(): bool
    {
        return isset($this->activationId);
    }    

    /**
     * @return int
     */
    public function getActivationId() : int
    {
        return $this->activationId;
    }

    /**
     * @param int $activationId
     */
    public function setActivationId(int $activationId)
    {
        $this->activationId = $activationId;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
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
    
    public function hasEmailChange(): bool
    {
        return isset($this->emailChange);
    }    

    /**
     * @return int
     */
    public function getEmailChange() : int
    {
        return $this->emailChange;
    }

    /**
     * @param int $emailChange
     */
    public function setEmailChange(int $emailChange)
    {
        $this->emailChange = $emailChange;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserActivation
    {
        return new UserActivation();
    }
}