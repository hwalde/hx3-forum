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

class GeneratedPtIssueAttachRecord implements Record {
    
    /** @var $attachmentId RecordValue */
    protected $attachmentId;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $fileName RecordValue */
    protected $fileName;
    
    /** @var $extension RecordValue */
    protected $extension;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $status RecordValue */
    protected $status;
    
    /** @var $fileSize RecordValue */
    protected $fileSize;
    
    /** @var $fileHash RecordValue */
    protected $fileHash;
    
    /** @var $fileData RecordValue */
    protected $fileData;
    
    /** @var $thumbnail RecordValue */
    protected $thumbnail;
    
    /** @var $thumbnailFileSize RecordValue */
    protected $thumbnailFileSize;
    
    /** @var $thumbnailDateline RecordValue */
    protected $thumbnailDateline;
    
    /** @var $isPatchFile RecordValue */
    protected $isPatchFile;

    public function __construct() {
		$this->attachmentId = new RecordValue();
		$this->issueId = new RecordValue();
		$this->userId = new RecordValue();
		$this->fileName = new RecordValue();
		$this->extension = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->visible = new RecordValue();
		$this->status = new RecordValue();
		$this->fileSize = new RecordValue();
		$this->fileHash = new RecordValue();
		$this->fileData = new RecordValue();
		$this->thumbnail = new RecordValue();
		$this->thumbnailFileSize = new RecordValue();
		$this->thumbnailDateline = new RecordValue();
		$this->isPatchFile = new RecordValue();
    }
    
    public function hasAttachmentId(): bool
    {
        return $this->attachmentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId->getValue();
    }

    /**
     * @param int $attachmentId
     */
    public function setAttachmentId(int $attachmentId)
    {
        $this->attachmentId->setChanged(true);
        $this->attachmentId->setValue($attachmentId);
    }
    
    public function hasIssueId(): bool
    {
        return $this->issueId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId->getValue();
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId->setChanged(true);
        $this->issueId->setValue($issueId);
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
    
    public function hasFileName(): bool
    {
        return $this->fileName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName->getValue();
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName)
    {
        $this->fileName->setChanged(true);
        $this->fileName->setValue($fileName);
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
    
    public function hasStatus(): bool
    {
        return $this->status->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status->getValue();
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status->setChanged(true);
        $this->status->setValue($status);
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
    
    public function hasFileHash(): bool
    {
        return $this->fileHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFileHash() : string
    {
        return $this->fileHash->getValue();
    }

    /**
     * @param string $fileHash
     */
    public function setFileHash(string $fileHash)
    {
        $this->fileHash->setChanged(true);
        $this->fileHash->setValue($fileHash);
    }
    
    public function hasFileData(): bool
    {
        return $this->fileData->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFileData() : string
    {
        return $this->fileData->getValue();
    }

    /**
     * @param string $fileData
     */
    public function setFileData(string $fileData)
    {
        $this->fileData->setChanged(true);
        $this->fileData->setValue($fileData);
    }
    
    public function hasThumbnail(): bool
    {
        return $this->thumbnail->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getThumbnail() : string
    {
        return $this->thumbnail->getValue();
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail(string $thumbnail)
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
    
    public function hasIsPatchFile(): bool
    {
        return $this->isPatchFile->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIsPatchFile() : int
    {
        return $this->isPatchFile->getValue();
    }

    /**
     * @param int $isPatchFile
     */
    public function setIsPatchFile(int $isPatchFile)
    {
        $this->isPatchFile->setChanged(true);
        $this->isPatchFile->setValue($isPatchFile);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueAttach
    {
        return new PtIssueAttach();
    }
}