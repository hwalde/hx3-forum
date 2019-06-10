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

class GeneratedSubscriptionPermissionRecord implements Record {
    
    /** @var $subscriptionPermissionId RecordValue */
    protected $subscriptionPermissionId;
    
    /** @var $subscriptionId RecordValue */
    protected $subscriptionId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;

    public function __construct() {
		$this->subscriptionPermissionId = new RecordValue();
		$this->subscriptionId = new RecordValue();
		$this->userGroupId = new RecordValue();
    }
    
    public function hasSubscriptionPermissionId(): bool
    {
        return $this->subscriptionPermissionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscriptionPermissionId() : int
    {
        return $this->subscriptionPermissionId->getValue();
    }

    /**
     * @param int $subscriptionPermissionId
     */
    public function setSubscriptionPermissionId(int $subscriptionPermissionId)
    {
        $this->subscriptionPermissionId->setChanged(true);
        $this->subscriptionPermissionId->setValue($subscriptionPermissionId);
    }
    
    public function hasSubscriptionId(): bool
    {
        return $this->subscriptionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscriptionId() : int
    {
        return $this->subscriptionId->getValue();
    }

    /**
     * @param int $subscriptionId
     */
    public function setSubscriptionId(int $subscriptionId)
    {
        $this->subscriptionId->setChanged(true);
        $this->subscriptionId->setValue($subscriptionId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscriptionPermission
    {
        return new SubscriptionPermission();
    }
}