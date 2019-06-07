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

class GeneratedAttachmentRecord implements Record {
    
    /** @var $attachmentId int */
    protected $attachmentId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $thumbnailDateline int */
    protected $thumbnailDateline;
    
    /** @var $fileName string */
    protected $fileName;
    
    /** @var $fileData string */
    protected $fileData;
    
    /** @var $visible int */
    protected $visible;
    
    /** @var $counter int */
    protected $counter;
    
    /** @var $fileSize int */
    protected $fileSize;
    
    /** @var $postId int */
    protected $postId;
    
    /** @var $fileHash string */
    protected $fileHash;
    
    /** @var $postHash string */
    protected $postHash;
    
    /** @var $thumbnail string */
    protected $thumbnail;
    
    /** @var $thumbnailFileSize int */
    protected $thumbnailFileSize;
    
    /** @var $importAttachmentId int */
    protected $importAttachmentId;
    
    /** @var $extension string */
    protected $extension;
    
    public function hasAttachmentId(): bool
    {
        return isset($this->attachmentId);
    }    

    /**
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId;
    }

    /**
     * @param int $attachmentId
     */
    public function setAttachmentId(int $attachmentId)
    {
        $this->attachmentId = $attachmentId;
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
    
    public function hasFileName(): bool
    {
        return isset($this->fileName);
    }    

    /**
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }
    
    public function hasFileData(): bool
    {
        return isset($this->fileData);
    }    

    /**
     * @return string
     */
    public function getFileData() : string
    {
        return $this->fileData;
    }

    /**
     * @param string $fileData
     */
    public function setFileData(string $fileData)
    {
        $this->fileData = $fileData;
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
    
    public function hasCounter(): bool
    {
        return isset($this->counter);
    }    

    /**
     * @return int
     */
    public function getCounter() : int
    {
        return $this->counter;
    }

    /**
     * @param int $counter
     */
    public function setCounter(int $counter)
    {
        $this->counter = $counter;
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
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function hasFileHash(): bool
    {
        return isset($this->fileHash);
    }    

    /**
     * @return string
     */
    public function getFileHash() : string
    {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     */
    public function setFileHash(string $fileHash)
    {
        $this->fileHash = $fileHash;
    }
    
    public function hasPostHash(): bool
    {
        return isset($this->postHash);
    }    

    /**
     * @return string
     */
    public function getPostHash() : string
    {
        return $this->postHash;
    }

    /**
     * @param string $postHash
     */
    public function setPostHash(string $postHash)
    {
        $this->postHash = $postHash;
    }
    
    public function hasThumbnail(): bool
    {
        return isset($this->thumbnail);
    }    

    /**
     * @return string
     */
    public function getThumbnail() : string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail(string $thumbnail)
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
    
    public function hasImportAttachmentId(): bool
    {
        return isset($this->importAttachmentId);
    }    

    /**
     * @return int
     */
    public function getImportAttachmentId() : int
    {
        return $this->importAttachmentId;
    }

    /**
     * @param int $importAttachmentId
     */
    public function setImportAttachmentId(int $importAttachmentId)
    {
        $this->importAttachmentId = $importAttachmentId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Attachment
    {
        return new Attachment();
    }
}