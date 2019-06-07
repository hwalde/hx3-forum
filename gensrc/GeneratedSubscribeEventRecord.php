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

class GeneratedSubscribeEventRecord implements Record {
    
    /** @var $subscribeEventId int */
    protected $subscribeEventId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $eventId int */
    protected $eventId;
    
    /** @var $lastReminder int */
    protected $lastReminder;
    
    /** @var $reminder int */
    protected $reminder;
    
    public function hasSubscribeEventId(): bool
    {
        return isset($this->subscribeEventId);
    }    

    /**
     * @return int
     */
    public function getSubscribeEventId() : int
    {
        return $this->subscribeEventId;
    }

    /**
     * @param int $subscribeEventId
     */
    public function setSubscribeEventId(int $subscribeEventId)
    {
        $this->subscribeEventId = $subscribeEventId;
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
    
    public function hasEventId(): bool
    {
        return isset($this->eventId);
    }    

    /**
     * @return int
     */
    public function getEventId() : int
    {
        return $this->eventId;
    }

    /**
     * @param int $eventId
     */
    public function setEventId(int $eventId)
    {
        $this->eventId = $eventId;
    }
    
    public function hasLastReminder(): bool
    {
        return isset($this->lastReminder);
    }    

    /**
     * @return int
     */
    public function getLastReminder() : int
    {
        return $this->lastReminder;
    }

    /**
     * @param int $lastReminder
     */
    public function setLastReminder(int $lastReminder)
    {
        $this->lastReminder = $lastReminder;
    }
    
    public function hasReminder(): bool
    {
        return isset($this->reminder);
    }    

    /**
     * @return int
     */
    public function getReminder() : int
    {
        return $this->reminder;
    }

    /**
     * @param int $reminder
     */
    public function setReminder(int $reminder)
    {
        $this->reminder = $reminder;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscribeEvent
    {
        return new SubscribeEvent();
    }
}