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

class GeneratedPaymentInfoRecord implements Record {
    
    /** @var $paymentInfoId RecordValue */
    protected $paymentInfoId;
    
    /** @var $hash RecordValue */
    protected $hash;
    
    /** @var $subscriptionId RecordValue */
    protected $subscriptionId;
    
    /** @var $subscriptionSubId RecordValue */
    protected $subscriptionSubId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $completed RecordValue */
    protected $completed;

    public function __construct() {
		$this->paymentInfoId = new RecordValue();
		$this->hash = new RecordValue();
		$this->subscriptionId = new RecordValue();
		$this->subscriptionSubId = new RecordValue();
		$this->userId = new RecordValue();
		$this->completed = new RecordValue();
    }
    
    public function hasPaymentInfoId(): bool
    {
        return $this->paymentInfoId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPaymentInfoId() : int
    {
        return $this->paymentInfoId->getValue();
    }

    /**
     * @param int $paymentInfoId
     */
    public function setPaymentInfoId(int $paymentInfoId)
    {
        $this->paymentInfoId->setChanged(true);
        $this->paymentInfoId->setValue($paymentInfoId);
    }
    
    public function hasHash(): bool
    {
        return $this->hash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash->getValue();
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash->setChanged(true);
        $this->hash->setValue($hash);
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
    
    public function hasSubscriptionSubId(): bool
    {
        return $this->subscriptionSubId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscriptionSubId() : int
    {
        return $this->subscriptionSubId->getValue();
    }

    /**
     * @param int $subscriptionSubId
     */
    public function setSubscriptionSubId(int $subscriptionSubId)
    {
        $this->subscriptionSubId->setChanged(true);
        $this->subscriptionSubId->setValue($subscriptionSubId);
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
    
    public function hasCompleted(): bool
    {
        return $this->completed->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed->getValue();
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed)
    {
        $this->completed->setChanged(true);
        $this->completed->setValue($completed);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PaymentInfo
    {
        return new PaymentInfo();
    }
}