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

class GeneratedPictureRecord implements Record {
    
    /** @var $pictureId int */
    private $pictureId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $caption string|null */
    private $caption;
    
    /** @var $extension string */
    private $extension;
    
    /** @var $fileData string|null */
    private $fileData;
    
    /** @var $fileSize int */
    private $fileSize;
    
    /** @var $width int */
    private $width;
    
    /** @var $height int */
    private $height;
    
    /** @var $thumbnail string|null */
    private $thumbnail;
    
    /** @var $thumbnailFileSize int */
    private $thumbnailFileSize;
    
    /** @var $thumbnailWidth int */
    private $thumbnailWidth;
    
    /** @var $thumbnailHeight int */
    private $thumbnailHeight;
    
    /** @var $thumbnailDateline int */
    private $thumbnailDateline;
    
    /** @var $idHash string */
    private $idHash;
    
    /** @var $reportThreadId int */
    private $reportThreadId;
    
    /** @var $state string */
    private $state;
    
    public function hasPictureId(): bool
    {
        return isset($this->pictureId);
    }    

    /**
     * @return int
     */
    public function getPictureId() : int
    {
        return $this->pictureId;
    }

    /**
     * @param int $pictureId
     */
    public function setPictureId(int $pictureId)
    {
        $this->pictureId = $pictureId;
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
    
    public function hasCaption(): bool
    {
        return isset($this->caption);
    }    

    /**
     * @return string|null
     */
    public function getCaption() : ?string
    {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     */
    public function setCaption(?string $caption)
    {
        $this->caption = $caption;
    }
    
    public function hasExtension(): bool
    {
        return isset($this->extension);
    }    

    /**
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     */
    public function setExtension(string $extension)
    {
        $this->extension = $extension;
    }
    
    public function hasFileData(): bool
    {
        return isset($this->fileData);
    }    

    /**
     * @return string|null
     */
    public function getFileData() : ?string
    {
        return $this->fileData;
    }

    /**
     * @param string|null $fileData
     */
    public function setFileData(?string $fileData)
    {
        $this->fileData = $fileData;
    }
    
    public function hasFileSize(): bool
    {
        return isset($this->fileSize);
    }    

    /**
     * @return int
     */
    public function getFileSize() : int
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize(int $fileSize)
    {
        $this->fileSize = $fileSize;
    }
    
    public function hasWidth(): bool
    {
        return isset($this->width);
    }    

    /**
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
    }
    
    public function hasHeight(): bool
    {
        return isset($this->height);
    }    

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
    }
    
    public function hasThumbnail(): bool
    {
        return isset($this->thumbnail);
    }    

    /**
     * @return string|null
     */
    public function getThumbnail() : ?string
    {
        return $this->thumbnail;
    }

    /**
     * @param string|null $thumbnail
     */
    public function setThumbnail(?string $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
    
    public function hasThumbnailFileSize(): bool
    {
        return isset($this->thumbnailFileSize);
    }    

    /**
     * @return int
     */
    public function getThumbnailFileSize() : int
    {
        return $this->thumbnailFileSize;
    }

    /**
     * @param int $thumbnailFileSize
     */
    public function setThumbnailFileSize(int $thumbnailFileSize)
    {
        $this->thumbnailFileSize = $thumbnailFileSize;
    }
    
    public function hasThumbnailWidth(): bool
    {
        return isset($this->thumbnailWidth);
    }    

    /**
     * @return int
     */
    public function getThumbnailWidth() : int
    {
        return $this->thumbnailWidth;
    }

    /**
     * @param int $thumbnailWidth
     */
    public function setThumbnailWidth(int $thumbnailWidth)
    {
        $this->thumbnailWidth = $thumbnailWidth;
    }
    
    public function hasThumbnailHeight(): bool
    {
        return isset($this->thumbnailHeight);
    }    

    /**
     * @return int
     */
    public function getThumbnailHeight() : int
    {
        return $this->thumbnailHeight;
    }

    /**
     * @param int $thumbnailHeight
     */
    public function setThumbnailHeight(int $thumbnailHeight)
    {
        $this->thumbnailHeight = $thumbnailHeight;
    }
    
    public function hasThumbnailDateline(): bool
    {
        return isset($this->thumbnailDateline);
    }    

    /**
     * @return int
     */
    public function getThumbnailDateline() : int
    {
        return $this->thumbnailDateline;
    }

    /**
     * @param int $thumbnailDateline
     */
    public function setThumbnailDateline(int $thumbnailDateline)
    {
        $this->thumbnailDateline = $thumbnailDateline;
    }
    
    public function hasIdHash(): bool
    {
        return isset($this->idHash);
    }    

    /**
     * @return string
     */
    public function getIdHash() : string
    {
        return $this->idHash;
    }

    /**
     * @param string $idHash
     */
    public function setIdHash(string $idHash)
    {
        $this->idHash = $idHash;
    }
    
    public function hasReportThreadId(): bool
    {
        return isset($this->reportThreadId);
    }    

    /**
     * @return int
     */
    public function getReportThreadId() : int
    {
        return $this->reportThreadId;
    }

    /**
     * @param int $reportThreadId
     */
    public function setReportThreadId(int $reportThreadId)
    {
        $this->reportThreadId = $reportThreadId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Picture
    {
        return new Picture();
    }
}