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

class GeneratedPtIssueAttachRecord implements Record {
    
    /** @var $attachmentId int */
    private $attachmentId;
    
    /** @var $issueId int */
    private $issueId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $fileName string */
    private $fileName;
    
    /** @var $extension string */
    private $extension;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $visible int */
    private $visible;
    
    /** @var $status string */
    private $status;
    
    /** @var $fileSize int */
    private $fileSize;
    
    /** @var $fileHash string */
    private $fileHash;
    
    /** @var $fileData string */
    private $fileData;
    
    /** @var $thumbnail string */
    private $thumbnail;
    
    /** @var $thumbnailFileSize int */
    private $thumbnailFileSize;
    
    /** @var $thumbnailDateline int */
    private $thumbnailDateline;
    
    /** @var $isPatchFile int */
    private $isPatchFile;
    
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
    
    public function hasIssueId(): bool
    {
        return isset($this->issueId);
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId;
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId = $issueId;
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
    
    public function hasStatus(): bool
    {
        return isset($this->status);
    }    

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
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
    
    public function hasIsPatchFile(): bool
    {
        return isset($this->isPatchFile);
    }    

    /**
     * @return int
     */
    public function getIsPatchFile() : int
    {
        return $this->isPatchFile;
    }

    /**
     * @param int $isPatchFile
     */
    public function setIsPatchFile(int $isPatchFile)
    {
        $this->isPatchFile = $isPatchFile;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueAttach
    {
        return new PtIssueAttach();
    }
}