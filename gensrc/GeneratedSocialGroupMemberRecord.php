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

class GeneratedSocialGroupMemberRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $groupId RecordValue */
    protected $groupId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $type RecordValue */
    protected $type;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->groupId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->type = new RecordValue();
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
    
    public function hasGroupId(): bool
    {
        return $this->groupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId->getValue();
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->groupId->setChanged(true);
        $this->groupId->setValue($groupId);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type->getValue();
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SocialGroupMember
    {
        return new SocialGroupMember();
    }
}