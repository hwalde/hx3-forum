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

class GeneratedPictureRecord implements Record {
    
    /** @var $pictureId RecordValue */
    protected $pictureId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $caption RecordValue */
    protected $caption;
    
    /** @var $extension RecordValue */
    protected $extension;
    
    /** @var $fileData RecordValue */
    protected $fileData;
    
    /** @var $fileSize RecordValue */
    protected $fileSize;
    
    /** @var $width RecordValue */
    protected $width;
    
    /** @var $height RecordValue */
    protected $height;
    
    /** @var $thumbnail RecordValue */
    protected $thumbnail;
    
    /** @var $thumbnailFileSize RecordValue */
    protected $thumbnailFileSize;
    
    /** @var $thumbnailWidth RecordValue */
    protected $thumbnailWidth;
    
    /** @var $thumbnailHeight RecordValue */
    protected $thumbnailHeight;
    
    /** @var $thumbnailDateline RecordValue */
    protected $thumbnailDateline;
    
    /** @var $idHash RecordValue */
    protected $idHash;
    
    /** @var $reportThreadId RecordValue */
    protected $reportThreadId;
    
    /** @var $state RecordValue */
    protected $state;

    public function __construct() {
		$this->pictureId = new RecordValue();
		$this->userId = new RecordValue();
		$this->caption = new RecordValue();
		$this->extension = new RecordValue();
		$this->fileData = new RecordValue();
		$this->fileSize = new RecordValue();
		$this->width = new RecordValue();
		$this->height = new RecordValue();
		$this->thumbnail = new RecordValue();
		$this->thumbnailFileSize = new RecordValue();
		$this->thumbnailWidth = new RecordValue();
		$this->thumbnailHeight = new RecordValue();
		$this->thumbnailDateline = new RecordValue();
		$this->idHash = new RecordValue();
		$this->reportThreadId = new RecordValue();
		$this->state = new RecordValue();
    }
    
    public function hasPictureId(): bool
    {
        return $this->pictureId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPictureId() : int
    {
        return $this->pictureId->getValue();
    }

    /**
     * @param int $pictureId
     */
    public function setPictureId(int $pictureId)
    {
        $this->pictureId->setChanged(true);
        $this->pictureId->setValue($pictureId);
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
    
    public function hasCaption(): bool
    {
        return $this->caption->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getCaption() : ?string
    {
        return $this->caption->getValue();
    }

    /**
     * @param string|null $caption
     */
    public function setCaption(?string $caption)
    {
        $this->caption->setChanged(true);
        $this->caption->setValue($caption);
    }
    
    public function hasExtension(): bool
    {
        return $this->extension->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension->getValue();
    }

    /**
     * @param string $extension
     */
    public function setExtension(string $extension)
    {
        $this->extension->setChanged(true);
        $this->extension->setValue($extension);
    }
    
    public function hasFileData(): bool
    {
        return $this->fileData->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getFileData() : ?string
    {
        return $this->fileData->getValue();
    }

    /**
     * @param string|null $fileData
     */
    public function setFileData(?string $fileData)
    {
        $this->fileData->setChanged(true);
        $this->fileData->setValue($fileData);
    }
    
    public function hasFileSize(): bool
    {
        return $this->fileSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFileSize() : int
    {
        return $this->fileSize->getValue();
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize(int $fileSize)
    {
        $this->fileSize->setChanged(true);
        $this->fileSize->setValue($fileSize);
    }
    
    public function hasWidth(): bool
    {
        return $this->width->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width->getValue();
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->width->setChanged(true);
        $this->width->setValue($width);
    }
    
    public function hasHeight(): bool
    {
        return $this->height->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height->getValue();
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->height->setChanged(true);
        $this->height->setValue($height);
    }
    
    public function hasThumbnail(): bool
    {
        return $this->thumbnail->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getThumbnail() : ?string
    {
        return $this->thumbnail->getValue();
    }

    /**
     * @param string|null $thumbnail
     */
    public function setThumbnail(?string $thumbnail)
    {
        $this->thumbnail->setChanged(true);
        $this->thumbnail->setValue($thumbnail);
    }
    
    public function hasThumbnailFileSize(): bool
    {
        return $this->thumbnailFileSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThumbnailFileSize() : int
    {
        return $this->thumbnailFileSize->getValue();
    }

    /**
     * @param int $thumbnailFileSize
     */
    public function setThumbnailFileSize(int $thumbnailFileSize)
    {
        $this->thumbnailFileSize->setChanged(true);
        $this->thumbnailFileSize->setValue($thumbnailFileSize);
    }
    
    public function hasThumbnailWidth(): bool
    {
        return $this->thumbnailWidth->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThumbnailWidth() : int
    {
        return $this->thumbnailWidth->getValue();
    }

    /**
     * @param int $thumbnailWidth
     */
    public function setThumbnailWidth(int $thumbnailWidth)
    {
        $this->thumbnailWidth->setChanged(true);
        $this->thumbnailWidth->setValue($thumbnailWidth);
    }
    
    public function hasThumbnailHeight(): bool
    {
        return $this->thumbnailHeight->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThumbnailHeight() : int
    {
        return $this->thumbnailHeight->getValue();
    }

    /**
     * @param int $thumbnailHeight
     */
    public function setThumbnailHeight(int $thumbnailHeight)
    {
        $this->thumbnailHeight->setChanged(true);
        $this->thumbnailHeight->setValue($thumbnailHeight);
    }
    
    public function hasThumbnailDateline(): bool
    {
        return $this->thumbnailDateline->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThumbnailDateline() : int
    {
        return $this->thumbnailDateline->getValue();
    }

    /**
     * @param int $thumbnailDateline
     */
    public function setThumbnailDateline(int $thumbnailDateline)
    {
        $this->thumbnailDateline->setChanged(true);
        $this->thumbnailDateline->setValue($thumbnailDateline);
    }
    
    public function hasIdHash(): bool
    {
        return $this->idHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIdHash() : string
    {
        return $this->idHash->getValue();
    }

    /**
     * @param string $idHash
     */
    public function setIdHash(string $idHash)
    {
        $this->idHash->setChanged(true);
        $this->idHash->setValue($idHash);
    }
    
    public function hasReportThreadId(): bool
    {
        return $this->reportThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReportThreadId() : int
    {
        return $this->reportThreadId->getValue();
    }

    /**
     * @param int $reportThreadId
     */
    public function setReportThreadId(int $reportThreadId)
    {
        $this->reportThreadId->setChanged(true);
        $this->reportThreadId->setValue($reportThreadId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Picture
    {
        return new Picture();
    }
}