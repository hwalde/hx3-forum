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

class GeneratedAttachmentRecord implements Record {
    
    /** @var $attachmentId RecordValue */
    protected $attachmentId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $thumbnailDateline RecordValue */
    protected $thumbnailDateline;
    
    /** @var $fileName RecordValue */
    protected $fileName;
    
    /** @var $fileData RecordValue */
    protected $fileData;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $counter RecordValue */
    protected $counter;
    
    /** @var $fileSize RecordValue */
    protected $fileSize;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $fileHash RecordValue */
    protected $fileHash;
    
    /** @var $postHash RecordValue */
    protected $postHash;
    
    /** @var $thumbnail RecordValue */
    protected $thumbnail;
    
    /** @var $thumbnailFileSize RecordValue */
    protected $thumbnailFileSize;
    
    /** @var $importAttachmentId RecordValue */
    protected $importAttachmentId;
    
    /** @var $extension RecordValue */
    protected $extension;

    public function __construct() {
		$this->attachmentId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->thumbnailDateline = new RecordValue();
		$this->fileName = new RecordValue();
		$this->fileData = new RecordValue();
		$this->visible = new RecordValue();
		$this->counter = new RecordValue();
		$this->fileSize = new RecordValue();
		$this->postId = new RecordValue();
		$this->fileHash = new RecordValue();
		$this->postHash = new RecordValue();
		$this->thumbnail = new RecordValue();
		$this->thumbnailFileSize = new RecordValue();
		$this->importAttachmentId = new RecordValue();
		$this->extension = new RecordValue();
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
    
    public function hasCounter(): bool
    {
        return $this->counter->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCounter() : int
    {
        return $this->counter->getValue();
    }

    /**
     * @param int $counter
     */
    public function setCounter(int $counter)
    {
        $this->counter->setChanged(true);
        $this->counter->setValue($counter);
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
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
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
    
    public function hasPostHash(): bool
    {
        return $this->postHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPostHash() : string
    {
        return $this->postHash->getValue();
    }

    /**
     * @param string $postHash
     */
    public function setPostHash(string $postHash)
    {
        $this->postHash->setChanged(true);
        $this->postHash->setValue($postHash);
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
    
    public function hasImportAttachmentId(): bool
    {
        return $this->importAttachmentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportAttachmentId() : int
    {
        return $this->importAttachmentId->getValue();
    }

    /**
     * @param int $importAttachmentId
     */
    public function setImportAttachmentId(int $importAttachmentId)
    {
        $this->importAttachmentId->setChanged(true);
        $this->importAttachmentId->setValue($importAttachmentId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Attachment
    {
        return new Attachment();
    }
}