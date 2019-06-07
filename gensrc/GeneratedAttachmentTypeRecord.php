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

class GeneratedAttachmentTypeRecord implements Record {
    
    /** @var $extension string */
    protected $extension;
    
    /** @var $mimeType string */
    protected $mimeType;
    
    /** @var $size int */
    protected $size;
    
    /** @var $width int */
    protected $width;
    
    /** @var $height int */
    protected $height;
    
    /** @var $enabled int */
    protected $enabled;
    
    /** @var $display int */
    protected $display;
    
    /** @var $thumbnail int */
    protected $thumbnail;
    
    /** @var $newWindow int */
    protected $newWindow;
    
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
    
    public function hasMimeType(): bool
    {
        return isset($this->mimeType);
    }    

    /**
     * @return string
     */
    public function getMimeType() : string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     */
    public function setMimeType(string $mimeType)
    {
        $this->mimeType = $mimeType;
    }
    
    public function hasSize(): bool
    {
        return isset($this->size);
    }    

    /**
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
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
    
    public function hasEnabled(): bool
    {
        return isset($this->enabled);
    }    

    /**
     * @return int
     */
    public function getEnabled() : int
    {
        return $this->enabled;
    }

    /**
     * @param int $enabled
     */
    public function setEnabled(int $enabled)
    {
        $this->enabled = $enabled;
    }
    
    public function hasDisplay(): bool
    {
        return isset($this->display);
    }    

    /**
     * @return int
     */
    public function getDisplay() : int
    {
        return $this->display;
    }

    /**
     * @param int $display
     */
    public function setDisplay(int $display)
    {
        $this->display = $display;
    }
    
    public function hasThumbnail(): bool
    {
        return isset($this->thumbnail);
    }    

    /**
     * @return int
     */
    public function getThumbnail() : int
    {
        return $this->thumbnail;
    }

    /**
     * @param int $thumbnail
     */
    public function setThumbnail(int $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
    
    public function hasNewWindow(): bool
    {
        return isset($this->newWindow);
    }    

    /**
     * @return int
     */
    public function getNewWindow() : int
    {
        return $this->newWindow;
    }

    /**
     * @param int $newWindow
     */
    public function setNewWindow(int $newWindow)
    {
        $this->newWindow = $newWindow;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AttachmentType
    {
        return new AttachmentType();
    }
}