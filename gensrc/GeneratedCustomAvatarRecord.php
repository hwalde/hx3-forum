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

class GeneratedCustomAvatarRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $fileData RecordValue */
    protected $fileData;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $fileName RecordValue */
    protected $fileName;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $fileSize RecordValue */
    protected $fileSize;
    
    /** @var $width RecordValue */
    protected $width;
    
    /** @var $height RecordValue */
    protected $height;
    
    /** @var $fileDataThumb RecordValue */
    protected $fileDataThumb;
    
    /** @var $widthThumb RecordValue */
    protected $widthThumb;
    
    /** @var $heightThumb RecordValue */
    protected $heightThumb;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->fileData = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->fileName = new RecordValue();
		$this->visible = new RecordValue();
		$this->fileSize = new RecordValue();
		$this->width = new RecordValue();
		$this->height = new RecordValue();
		$this->fileDataThumb = new RecordValue();
		$this->widthThumb = new RecordValue();
		$this->heightThumb = new RecordValue();
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
    
    public function hasFileDataThumb(): bool
    {
        return $this->fileDataThumb->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getFileDataThumb() : ?string
    {
        return $this->fileDataThumb->getValue();
    }

    /**
     * @param string|null $fileDataThumb
     */
    public function setFileDataThumb(?string $fileDataThumb)
    {
        $this->fileDataThumb->setChanged(true);
        $this->fileDataThumb->setValue($fileDataThumb);
    }
    
    public function hasWidthThumb(): bool
    {
        return $this->widthThumb->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWidthThumb() : int
    {
        return $this->widthThumb->getValue();
    }

    /**
     * @param int $widthThumb
     */
    public function setWidthThumb(int $widthThumb)
    {
        $this->widthThumb->setChanged(true);
        $this->widthThumb->setValue($widthThumb);
    }
    
    public function hasHeightThumb(): bool
    {
        return $this->heightThumb->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHeightThumb() : int
    {
        return $this->heightThumb->getValue();
    }

    /**
     * @param int $heightThumb
     */
    public function setHeightThumb(int $heightThumb)
    {
        $this->heightThumb->setChanged(true);
        $this->heightThumb->setValue($heightThumb);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CustomAvatar
    {
        return new CustomAvatar();
    }
}