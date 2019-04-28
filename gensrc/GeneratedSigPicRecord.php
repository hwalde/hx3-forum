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

class GeneratedSigPicRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $fileData string|null */
    private $fileData;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $fileName string */
    private $fileName;
    
    /** @var $visible int */
    private $visible;
    
    /** @var $fileSize int */
    private $fileSize;
    
    /** @var $width int */
    private $width;
    
    /** @var $height int */
    private $height;
    
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SigPic
    {
        return new SigPic();
    }
}