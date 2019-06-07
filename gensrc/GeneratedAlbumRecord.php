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

class GeneratedAlbumRecord implements Record {
    
    /** @var $albumId int */
    protected $albumId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $createDate int */
    protected $createDate;
    
    /** @var $lastPictureDate int */
    protected $lastPictureDate;
    
    /** @var $visible int */
    protected $visible;
    
    /** @var $title string */
    protected $title;
    
    /** @var $description string|null */
    protected $description;
    
    /** @var $coverPictureId int */
    protected $coverPictureId;
    
    /** @var $state string */
    protected $state;
    
    /** @var $moderation int */
    protected $moderation;
    
    public function hasAlbumId(): bool
    {
        return isset($this->albumId);
    }    

    /**
     * @return int
     */
    public function getAlbumId() : int
    {
        return $this->albumId;
    }

    /**
     * @param int $albumId
     */
    public function setAlbumId(int $albumId)
    {
        $this->albumId = $albumId;
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
    
    public function hasCreateDate(): bool
    {
        return isset($this->createDate);
    }    

    /**
     * @return int
     */
    public function getCreateDate() : int
    {
        return $this->createDate;
    }

    /**
     * @param int $createDate
     */
    public function setCreateDate(int $createDate)
    {
        $this->createDate = $createDate;
    }
    
    public function hasLastPictureDate(): bool
    {
        return isset($this->lastPictureDate);
    }    

    /**
     * @return int
     */
    public function getLastPictureDate() : int
    {
        return $this->lastPictureDate;
    }

    /**
     * @param int $lastPictureDate
     */
    public function setLastPictureDate(int $lastPictureDate)
    {
        $this->lastPictureDate = $lastPictureDate;
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
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
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
    
    public function hasCoverPictureId(): bool
    {
        return isset($this->coverPictureId);
    }    

    /**
     * @return int
     */
    public function getCoverPictureId() : int
    {
        return $this->coverPictureId;
    }

    /**
     * @param int $coverPictureId
     */
    public function setCoverPictureId(int $coverPictureId)
    {
        $this->coverPictureId = $coverPictureId;
    }
    
    public function hasState(): bool
    {
        return isset($this->state);
    }    

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Album
    {
        return new Album();
    }
}