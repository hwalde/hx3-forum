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

class GeneratedPaymentInfoRecord implements Record {
    
    /** @var $paymentInfoId int */
    private $paymentInfoId;
    
    /** @var $hash string */
    private $hash;
    
    /** @var $subscriptionId int */
    private $subscriptionId;
    
    /** @var $subscriptionSubId int */
    private $subscriptionSubId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $completed int */
    private $completed;
    
    public function hasPaymentInfoId(): bool
    {
        return isset($this->paymentInfoId);
    }    

    /**
     * @return int
     */
    public function getPaymentInfoId() : int
    {
        return $this->paymentInfoId;
    }

    /**
     * @param int $paymentInfoId
     */
    public function setPaymentInfoId(int $paymentInfoId)
    {
        $this->paymentInfoId = $paymentInfoId;
    }
    
    public function hasHash(): bool
    {
        return isset($this->hash);
    }    

    /**
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash = $hash;
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
    
    public function hasSubscriptionSubId(): bool
    {
        return isset($this->subscriptionSubId);
    }    

    /**
     * @return int
     */
    public function getSubscriptionSubId() : int
    {
        return $this->subscriptionSubId;
    }

    /**
     * @param int $subscriptionSubId
     */
    public function setSubscriptionSubId(int $subscriptionSubId)
    {
        $this->subscriptionSubId = $subscriptionSubId;
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
    
    public function hasCompleted(): bool
    {
        return isset($this->completed);
    }    

    /**
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed;
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed)
    {
        $this->completed = $completed;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PaymentInfo
    {
        return new PaymentInfo();
    }
}