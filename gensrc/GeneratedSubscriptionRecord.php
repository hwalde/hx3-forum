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

class GeneratedSubscriptionRecord implements Record {
    
    /** @var $subscriptionId int */
    private $subscriptionId;
    
    /** @var $cost string */
    private $cost;
    
    /** @var $forums string */
    private $forums;
    
    /** @var $nUserGroupId int */
    private $nUserGroupId;
    
    /** @var $memberGroupIds string */
    private $memberGroupIds;
    
    /** @var $active int */
    private $active;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $options int */
    private $options;
    
    /** @var $adminOptions int */
    private $adminOptions;
    
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
    
    public function hasCost(): bool
    {
        return isset($this->cost);
    }    

    /**
     * @return string
     */
    public function getCost() : string
    {
        return $this->cost;
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost)
    {
        $this->cost = $cost;
    }
    
    public function hasForums(): bool
    {
        return isset($this->forums);
    }    

    /**
     * @return string
     */
    public function getForums() : string
    {
        return $this->forums;
    }

    /**
     * @param string $forums
     */
    public function setForums(string $forums)
    {
        $this->forums = $forums;
    }
    
    public function hasNUserGroupId(): bool
    {
        return isset($this->nUserGroupId);
    }    

    /**
     * @return int
     */
    public function getNUserGroupId() : int
    {
        return $this->nUserGroupId;
    }

    /**
     * @param int $nUserGroupId
     */
    public function setNUserGroupId(int $nUserGroupId)
    {
        $this->nUserGroupId = $nUserGroupId;
    }
    
    public function hasMemberGroupIds(): bool
    {
        return isset($this->memberGroupIds);
    }    

    /**
     * @return string
     */
    public function getMemberGroupIds() : string
    {
        return $this->memberGroupIds;
    }

    /**
     * @param string $memberGroupIds
     */
    public function setMemberGroupIds(string $memberGroupIds)
    {
        $this->memberGroupIds = $memberGroupIds;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options = $options;
    }
    
    public function hasAdminOptions(): bool
    {
        return isset($this->adminOptions);
    }    

    /**
     * @return int
     */
    public function getAdminOptions() : int
    {
        return $this->adminOptions;
    }

    /**
     * @param int $adminOptions
     */
    public function setAdminOptions(int $adminOptions)
    {
        $this->adminOptions = $adminOptions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Subscription
    {
        return new Subscription();
    }
}