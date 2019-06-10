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

class GeneratedSubscriptionRecord implements Record {
    
    /** @var $subscriptionId RecordValue */
    protected $subscriptionId;
    
    /** @var $cost RecordValue */
    protected $cost;
    
    /** @var $forums RecordValue */
    protected $forums;
    
    /** @var $nUserGroupId RecordValue */
    protected $nUserGroupId;
    
    /** @var $memberGroupIds RecordValue */
    protected $memberGroupIds;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $adminOptions RecordValue */
    protected $adminOptions;

    public function __construct() {
		$this->subscriptionId = new RecordValue();
		$this->cost = new RecordValue();
		$this->forums = new RecordValue();
		$this->nUserGroupId = new RecordValue();
		$this->memberGroupIds = new RecordValue();
		$this->active = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->options = new RecordValue();
		$this->adminOptions = new RecordValue();
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
    
    public function hasCost(): bool
    {
        return $this->cost->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCost() : string
    {
        return $this->cost->getValue();
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost)
    {
        $this->cost->setChanged(true);
        $this->cost->setValue($cost);
    }
    
    public function hasForums(): bool
    {
        return $this->forums->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getForums() : string
    {
        return $this->forums->getValue();
    }

    /**
     * @param string $forums
     */
    public function setForums(string $forums)
    {
        $this->forums->setChanged(true);
        $this->forums->setValue($forums);
    }
    
    public function hasNUserGroupId(): bool
    {
        return $this->nUserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNUserGroupId() : int
    {
        return $this->nUserGroupId->getValue();
    }

    /**
     * @param int $nUserGroupId
     */
    public function setNUserGroupId(int $nUserGroupId)
    {
        $this->nUserGroupId->setChanged(true);
        $this->nUserGroupId->setValue($nUserGroupId);
    }
    
    public function hasMemberGroupIds(): bool
    {
        return $this->memberGroupIds->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMemberGroupIds() : string
    {
        return $this->memberGroupIds->getValue();
    }

    /**
     * @param string $memberGroupIds
     */
    public function setMemberGroupIds(string $memberGroupIds)
    {
        $this->memberGroupIds->setChanged(true);
        $this->memberGroupIds->setValue($memberGroupIds);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
    }
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options->getValue();
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasAdminOptions(): bool
    {
        return $this->adminOptions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminOptions() : int
    {
        return $this->adminOptions->getValue();
    }

    /**
     * @param int $adminOptions
     */
    public function setAdminOptions(int $adminOptions)
    {
        $this->adminOptions->setChanged(true);
        $this->adminOptions->setValue($adminOptions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Subscription
    {
        return new Subscription();
    }
}