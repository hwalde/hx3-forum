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

class GeneratedSocialGroupRecord implements Record {
    
    /** @var $groupId int */
    protected $groupId;
    
    /** @var $name string */
    protected $name;
    
    /** @var $description string|null */
    protected $description;
    
    /** @var $creatorUserId int */
    protected $creatorUserId;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $members int */
    protected $members;
    
    /** @var $pictureCount int */
    protected $pictureCount;
    
    /** @var $lastPost int */
    protected $lastPost;
    
    /** @var $lastPoster string */
    protected $lastPoster;
    
    /** @var $lastPosterId int */
    protected $lastPosterId;
    
    /** @var $lastGmId int */
    protected $lastGmId;
    
    /** @var $visible int */
    protected $visible;
    
    /** @var $deleted int */
    protected $deleted;
    
    /** @var $moderation int */
    protected $moderation;
    
    /** @var $type string */
    protected $type;
    
    /** @var $moderatedMembers int */
    protected $moderatedMembers;
    
    /** @var $options int */
    protected $options;
    
    public function hasGroupId(): bool
    {
        return isset($this->groupId);
    }    

    /**
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->groupId = $groupId;
    }
    
    public function hasName(): bool
    {
        return isset($this->name);
    }    

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    public function hasDescription(): bool
    {
        return isset($this->description);
    }    

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    
    public function hasCreatorUserId(): bool
    {
        return isset($this->creatorUserId);
    }    

    /**
     * @return int
     */
    public function getCreatorUserId() : int
    {
        return $this->creatorUserId;
    }

    /**
     * @param int $creatorUserId
     */
    public function setCreatorUserId(int $creatorUserId)
    {
        $this->creatorUserId = $creatorUserId;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasMembers(): bool
    {
        return isset($this->members);
    }    

    /**
     * @return int
     */
    public function getMembers() : int
    {
        return $this->members;
    }

    /**
     * @param int $members
     */
    public function setMembers(int $members)
    {
        $this->members = $members;
    }
    
    public function hasPictureCount(): bool
    {
        return isset($this->pictureCount);
    }    

    /**
     * @return int
     */
    public function getPictureCount() : int
    {
        return $this->pictureCount;
    }

    /**
     * @param int $pictureCount
     */
    public function setPictureCount(int $pictureCount)
    {
        $this->pictureCount = $pictureCount;
    }
    
    public function hasLastPost(): bool
    {
        return isset($this->lastPost);
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost;
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost = $lastPost;
    }
    
    public function hasLastPoster(): bool
    {
        return isset($this->lastPoster);
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster;
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster = $lastPoster;
    }
    
    public function hasLastPosterId(): bool
    {
        return isset($this->lastPosterId);
    }    

    /**
     * @return int
     */
    public function getLastPosterId() : int
    {
        return $this->lastPosterId;
    }

    /**
     * @param int $lastPosterId
     */
    public function setLastPosterId(int $lastPosterId)
    {
        $this->lastPosterId = $lastPosterId;
    }
    
    public function hasLastGmId(): bool
    {
        return isset($this->lastGmId);
    }    

    /**
     * @return int
     */
    public function getLastGmId() : int
    {
        return $this->lastGmId;
    }

    /**
     * @param int $lastGmId
     */
    public function setLastGmId(int $lastGmId)
    {
        $this->lastGmId = $lastGmId;
    }
    
    public function hasVisible(): bool
    {
        return isset($this->visible);
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible;
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible = $visible;
    }
    
    public function hasDeleted(): bool
    {
        return isset($this->deleted);
    }    

    /**
     * @return int
     */
    public function getDeleted() : int
    {
        return $this->deleted;
    }

    /**
     * @param int $deleted
     */
    public function setDeleted(int $deleted)
    {
        $this->deleted = $deleted;
    }
    
    public function hasModeration(): bool
    {
        return isset($this->moderation);
    }    

    /**
     * @return int
     */
    public function getModeration() : int
    {
        return $this->moderation;
    }

    /**
     * @param int $moderation
     */
    public function setModeration(int $moderation)
    {
        $this->moderation = $moderation;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
    
    public function hasModeratedMembers(): bool
    {
        return isset($this->moderatedMembers);
    }    

    /**
     * @return int
     */
    public function getModeratedMembers() : int
    {
        return $this->moderatedMembers;
    }

    /**
     * @param int $moderatedMembers
     */
    public function setModeratedMembers(int $moderatedMembers)
    {
        $this->moderatedMembers = $moderatedMembers;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SocialGroup
    {
        return new SocialGroup();
    }
}