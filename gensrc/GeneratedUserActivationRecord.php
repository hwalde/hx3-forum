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

class GeneratedUserActivationRecord implements Record {
    
    /** @var $userActivationId RecordValue */
    protected $userActivationId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $activationId RecordValue */
    protected $activationId;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $emailChange RecordValue */
    protected $emailChange;

    public function __construct() {
		$this->userActivationId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->activationId = new RecordValue();
		$this->type = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->emailChange = new RecordValue();
    }
    
    public function hasUserActivationId(): bool
    {
        return $this->userActivationId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserActivationId() : int
    {
        return $this->userActivationId->getValue();
    }

    /**
     * @param int $userActivationId
     */
    public function setUserActivationId(int $userActivationId)
    {
        $this->userActivationId->setChanged(true);
        $this->userActivationId->setValue($userActivationId);
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
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasActivationId(): bool
    {
        return $this->activationId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActivationId() : int
    {
        return $this->activationId->getValue();
    }

    /**
     * @param int $activationId
     */
    public function setActivationId(int $activationId)
    {
        $this->activationId->setChanged(true);
        $this->activationId->setValue($activationId);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type->getValue();
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
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
    
    public function hasEmailChange(): bool
    {
        return $this->emailChange->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEmailChange() : int
    {
        return $this->emailChange->getValue();
    }

    /**
     * @param int $emailChange
     */
    public function setEmailChange(int $emailChange)
    {
        $this->emailChange->setChanged(true);
        $this->emailChange->setValue($emailChange);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserActivation
    {
        return new UserActivation();
    }
}