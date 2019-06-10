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

class GeneratedAnnouncementReadRecord implements Record {
    
    /** @var $announcementId RecordValue */
    protected $announcementId;
    
    /** @var $userId RecordValue */
    protected $userId;

    public function __construct() {
		$this->announcementId = new RecordValue();
		$this->userId = new RecordValue();
    }
    
    public function hasAnnouncementId(): bool
    {
        return $this->announcementId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAnnouncementId() : int
    {
        return $this->announcementId->getValue();
    }

    /**
     * @param int $announcementId
     */
    public function setAnnouncementId(int $announcementId)
    {
        $this->announcementId->setChanged(true);
        $this->announcementId->setValue($announcementId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AnnouncementRead
    {
        return new AnnouncementRead();
    }
}