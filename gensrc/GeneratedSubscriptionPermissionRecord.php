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

class GeneratedSubscriptionPermissionRecord implements Record {
    
    /** @var $subscriptionPermissionId int */
    private $subscriptionPermissionId;
    
    /** @var $subscriptionId int */
    private $subscriptionId;
    
    /** @var $userGroupId int */
    private $userGroupId;
    
    public function hasSubscriptionPermissionId(): bool
    {
        return isset($this->subscriptionPermissionId);
    }    

    /**
     * @return int
     */
    public function getSubscriptionPermissionId() : int
    {
        return $this->subscriptionPermissionId;
    }

    /**
     * @param int $subscriptionPermissionId
     */
    public function setSubscriptionPermissionId(int $subscriptionPermissionId)
    {
        $this->subscriptionPermissionId = $subscriptionPermissionId;
    }
    
    public function hasSubscriptionId(): bool
    {
        return isset($this->subscriptionId);
    }    

    /**
     * @return int
     */
    public function getSubscriptionId() : int
    {
        return $this->subscriptionId;
    }

    /**
     * @param int $subscriptionId
     */
    public function setSubscriptionId(int $subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscriptionPermission
    {
        return new SubscriptionPermission();
    }
}