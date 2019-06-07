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

class GeneratedCustomAvatarRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $fileData string */
    protected $fileData;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $fileName string */
    protected $fileName;
    
    /** @var $visible int */
    protected $visible;
    
    /** @var $fileSize int */
    protected $fileSize;
    
    /** @var $width int */
    protected $width;
    
    /** @var $height int */
    protected $height;
    
    /** @var $fileDataThumb string|null */
    protected $fileDataThumb;
    
    /** @var $widthThumb int */
    protected $widthThumb;
    
    /** @var $heightThumb int */
    protected $heightThumb;
    
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
    
    public function hasFileDataThumb(): bool
    {
        return isset($this->fileDataThumb);
    }    

    /**
     * @return string|null
     */
    public function getFileDataThumb() : ?string
    {
        return $this->fileDataThumb;
    }

    /**
     * @param string|null $fileDataThumb
     */
    public function setFileDataThumb(?string $fileDataThumb)
    {
        $this->fileDataThumb = $fileDataThumb;
    }
    
    public function hasWidthThumb(): bool
    {
        return isset($this->widthThumb);
    }    

    /**
     * @return int
     */
    public function getWidthThumb() : int
    {
        return $this->widthThumb;
    }

    /**
     * @param int $widthThumb
     */
    public function setWidthThumb(int $widthThumb)
    {
        $this->widthThumb = $widthThumb;
    }
    
    public function hasHeightThumb(): bool
    {
        return isset($this->heightThumb);
    }    

    /**
     * @return int
     */
    public function getHeightThumb() : int
    {
        return $this->heightThumb;
    }

    /**
     * @param int $heightThumb
     */
    public function setHeightThumb(int $heightThumb)
    {
        $this->heightThumb = $heightThumb;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CustomAvatar
    {
        return new CustomAvatar();
    }
}