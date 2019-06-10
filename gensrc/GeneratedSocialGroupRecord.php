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

class GeneratedSocialGroupRecord implements Record {
    
    /** @var $groupId RecordValue */
    protected $groupId;
    
    /** @var $name RecordValue */
    protected $name;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $creatorUserId RecordValue */
    protected $creatorUserId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $members RecordValue */
    protected $members;
    
    /** @var $pictureCount RecordValue */
    protected $pictureCount;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $lastPoster RecordValue */
    protected $lastPoster;
    
    /** @var $lastPosterId RecordValue */
    protected $lastPosterId;
    
    /** @var $lastGmId RecordValue */
    protected $lastGmId;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $deleted RecordValue */
    protected $deleted;
    
    /** @var $moderation RecordValue */
    protected $moderation;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $moderatedMembers RecordValue */
    protected $moderatedMembers;
    
    /** @var $options RecordValue */
    protected $options;

    public function __construct() {
		$this->groupId = new RecordValue();
		$this->name = new RecordValue();
		$this->description = new RecordValue();
		$this->creatorUserId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->members = new RecordValue();
		$this->pictureCount = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->lastPoster = new RecordValue();
		$this->lastPosterId = new RecordValue();
		$this->lastGmId = new RecordValue();
		$this->visible = new RecordValue();
		$this->deleted = new RecordValue();
		$this->moderation = new RecordValue();
		$this->type = new RecordValue();
		$this->moderatedMembers = new RecordValue();
		$this->options = new RecordValue();
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
    
    public function hasName(): bool
    {
        return $this->name->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name->getValue();
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name->setChanged(true);
        $this->name->setValue($name);
    }
    
    public function hasDescription(): bool
    {
        return $this->description->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description->getValue();
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description)
    {
        $this->description->setChanged(true);
        $this->description->setValue($description);
    }
    
    public function hasCreatorUserId(): bool
    {
        return $this->creatorUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCreatorUserId() : int
    {
        return $this->creatorUserId->getValue();
    }

    /**
     * @param int $creatorUserId
     */
    public function setCreatorUserId(int $creatorUserId)
    {
        $this->creatorUserId->setChanged(true);
        $this->creatorUserId->setValue($creatorUserId);
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
    
    public function hasMembers(): bool
    {
        return $this->members->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMembers() : int
    {
        return $this->members->getValue();
    }

    /**
     * @param int $members
     */
    public function setMembers(int $members)
    {
        $this->members->setChanged(true);
        $this->members->setValue($members);
    }
    
    public function hasPictureCount(): bool
    {
        return $this->pictureCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPictureCount() : int
    {
        return $this->pictureCount->getValue();
    }

    /**
     * @param int $pictureCount
     */
    public function setPictureCount(int $pictureCount)
    {
        $this->pictureCount->setChanged(true);
        $this->pictureCount->setValue($pictureCount);
    }
    
    public function hasLastPost(): bool
    {
        return $this->lastPost->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost->getValue();
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost->setChanged(true);
        $this->lastPost->setValue($lastPost);
    }
    
    public function hasLastPoster(): bool
    {
        return $this->lastPoster->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster->getValue();
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster->setChanged(true);
        $this->lastPoster->setValue($lastPoster);
    }
    
    public function hasLastPosterId(): bool
    {
        return $this->lastPosterId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPosterId() : int
    {
        return $this->lastPosterId->getValue();
    }

    /**
     * @param int $lastPosterId
     */
    public function setLastPosterId(int $lastPosterId)
    {
        $this->lastPosterId->setChanged(true);
        $this->lastPosterId->setValue($lastPosterId);
    }
    
    public function hasLastGmId(): bool
    {
        return $this->lastGmId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastGmId() : int
    {
        return $this->lastGmId->getValue();
    }

    /**
     * @param int $lastGmId
     */
    public function setLastGmId(int $lastGmId)
    {
        $this->lastGmId->setChanged(true);
        $this->lastGmId->setValue($lastGmId);
    }
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible->getValue();
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    public function hasDeleted(): bool
    {
        return $this->deleted->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDeleted() : int
    {
        return $this->deleted->getValue();
    }

    /**
     * @param int $deleted
     */
    public function setDeleted(int $deleted)
    {
        $this->deleted->setChanged(true);
        $this->deleted->setValue($deleted);
    }
    
    public function hasModeration(): bool
    {
        return $this->moderation->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModeration() : int
    {
        return $this->moderation->getValue();
    }

    /**
     * @param int $moderation
     */
    public function setModeration(int $moderation)
    {
        $this->moderation->setChanged(true);
        $this->moderation->setValue($moderation);
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
    
    public function hasModeratedMembers(): bool
    {
        return $this->moderatedMembers->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModeratedMembers() : int
    {
        return $this->moderatedMembers->getValue();
    }

    /**
     * @param int $moderatedMembers
     */
    public function setModeratedMembers(int $moderatedMembers)
    {
        $this->moderatedMembers->setChanged(true);
        $this->moderatedMembers->setValue($moderatedMembers);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SocialGroup
    {
        return new SocialGroup();
    }
}