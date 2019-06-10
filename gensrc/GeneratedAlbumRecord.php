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

class GeneratedAlbumRecord implements Record {
    
    /** @var $albumId RecordValue */
    protected $albumId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $createDate RecordValue */
    protected $createDate;
    
    /** @var $lastPictureDate RecordValue */
    protected $lastPictureDate;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $coverPictureId RecordValue */
    protected $coverPictureId;
    
    /** @var $state RecordValue */
    protected $state;
    
    /** @var $moderation RecordValue */
    protected $moderation;

    public function __construct() {
		$this->albumId = new RecordValue();
		$this->userId = new RecordValue();
		$this->createDate = new RecordValue();
		$this->lastPictureDate = new RecordValue();
		$this->visible = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->coverPictureId = new RecordValue();
		$this->state = new RecordValue();
		$this->moderation = new RecordValue();
    }
    
    public function hasAlbumId(): bool
    {
        return $this->albumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumId() : int
    {
        return $this->albumId->getValue();
    }

    /**
     * @param int $albumId
     */
    public function setAlbumId(int $albumId)
    {
        $this->albumId->setChanged(true);
        $this->albumId->setValue($albumId);
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
    
    public function hasCreateDate(): bool
    {
        return $this->createDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCreateDate() : int
    {
        return $this->createDate->getValue();
    }

    /**
     * @param int $createDate
     */
    public function setCreateDate(int $createDate)
    {
        $this->createDate->setChanged(true);
        $this->createDate->setValue($createDate);
    }
    
    public function hasLastPictureDate(): bool
    {
        return $this->lastPictureDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPictureDate() : int
    {
        return $this->lastPictureDate->getValue();
    }

    /**
     * @param int $lastPictureDate
     */
    public function setLastPictureDate(int $lastPictureDate)
    {
        $this->lastPictureDate->setChanged(true);
        $this->lastPictureDate->setValue($lastPictureDate);
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
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
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
    
    public function hasCoverPictureId(): bool
    {
        return $this->coverPictureId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCoverPictureId() : int
    {
        return $this->coverPictureId->getValue();
    }

    /**
     * @param int $coverPictureId
     */
    public function setCoverPictureId(int $coverPictureId)
    {
        $this->coverPictureId->setChanged(true);
        $this->coverPictureId->setValue($coverPictureId);
    }
    
    public function hasState(): bool
    {
        return $this->state->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state->getValue();
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state->setChanged(true);
        $this->state->setValue($state);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Album
    {
        return new Album();
    }
}