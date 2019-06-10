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

class GeneratedSubscribeEventRecord implements Record {
    
    /** @var $subscribeEventId RecordValue */
    protected $subscribeEventId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $eventId RecordValue */
    protected $eventId;
    
    /** @var $lastReminder RecordValue */
    protected $lastReminder;
    
    /** @var $reminder RecordValue */
    protected $reminder;

    public function __construct() {
		$this->subscribeEventId = new RecordValue();
		$this->userId = new RecordValue();
		$this->eventId = new RecordValue();
		$this->lastReminder = new RecordValue();
		$this->reminder = new RecordValue();
    }
    
    public function hasSubscribeEventId(): bool
    {
        return $this->subscribeEventId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscribeEventId() : int
    {
        return $this->subscribeEventId->getValue();
    }

    /**
     * @param int $subscribeEventId
     */
    public function setSubscribeEventId(int $subscribeEventId)
    {
        $this->subscribeEventId->setChanged(true);
        $this->subscribeEventId->setValue($subscribeEventId);
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
    
    public function hasEventId(): bool
    {
        return $this->eventId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEventId() : int
    {
        return $this->eventId->getValue();
    }

    /**
     * @param int $eventId
     */
    public function setEventId(int $eventId)
    {
        $this->eventId->setChanged(true);
        $this->eventId->setValue($eventId);
    }
    
    public function hasLastReminder(): bool
    {
        return $this->lastReminder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastReminder() : int
    {
        return $this->lastReminder->getValue();
    }

    /**
     * @param int $lastReminder
     */
    public function setLastReminder(int $lastReminder)
    {
        $this->lastReminder->setChanged(true);
        $this->lastReminder->setValue($lastReminder);
    }
    
    public function hasReminder(): bool
    {
        return $this->reminder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReminder() : int
    {
        return $this->reminder->getValue();
    }

    /**
     * @param int $reminder
     */
    public function setReminder(int $reminder)
    {
        $this->reminder->setChanged(true);
        $this->reminder->setValue($reminder);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscribeEvent
    {
        return new SubscribeEvent();
    }
}