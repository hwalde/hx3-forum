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

class GeneratedAnnouncementReadRecord implements Record {
    
    /** @var $announcementId int */
    protected $announcementId;
    
    /** @var $userId int */
    protected $userId;
    
    public function hasAnnouncementId(): bool
    {
        return isset($this->announcementId);
    }    

    /**
     * @return int
     */
    public function getAnnouncementId() : int
    {
        return $this->announcementId;
    }

    /**
     * @param int $announcementId
     */
    public function setAnnouncementId(int $announcementId)
    {
        $this->announcementId = $announcementId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AnnouncementRead
    {
        return new AnnouncementRead();
    }
}