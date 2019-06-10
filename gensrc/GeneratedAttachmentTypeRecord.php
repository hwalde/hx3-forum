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

class GeneratedAttachmentTypeRecord implements Record {
    
    /** @var $extension RecordValue */
    protected $extension;
    
    /** @var $mimeType RecordValue */
    protected $mimeType;
    
    /** @var $size RecordValue */
    protected $size;
    
    /** @var $width RecordValue */
    protected $width;
    
    /** @var $height RecordValue */
    protected $height;
    
    /** @var $enabled RecordValue */
    protected $enabled;
    
    /** @var $display RecordValue */
    protected $display;
    
    /** @var $thumbnail RecordValue */
    protected $thumbnail;
    
    /** @var $newWindow RecordValue */
    protected $newWindow;

    public function __construct() {
		$this->extension = new RecordValue();
		$this->mimeType = new RecordValue();
		$this->size = new RecordValue();
		$this->width = new RecordValue();
		$this->height = new RecordValue();
		$this->enabled = new RecordValue();
		$this->display = new RecordValue();
		$this->thumbnail = new RecordValue();
		$this->newWindow = new RecordValue();
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
    
    public function hasMimeType(): bool
    {
        return $this->mimeType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMimeType() : string
    {
        return $this->mimeType->getValue();
    }

    /**
     * @param string $mimeType
     */
    public function setMimeType(string $mimeType)
    {
        $this->mimeType->setChanged(true);
        $this->mimeType->setValue($mimeType);
    }
    
    public function hasSize(): bool
    {
        return $this->size->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSize() : int
    {
        return $this->size->getValue();
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size->setChanged(true);
        $this->size->setValue($size);
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
    
    public function hasEnabled(): bool
    {
        return $this->enabled->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEnabled() : int
    {
        return $this->enabled->getValue();
    }

    /**
     * @param int $enabled
     */
    public function setEnabled(int $enabled)
    {
        $this->enabled->setChanged(true);
        $this->enabled->setValue($enabled);
    }
    
    public function hasDisplay(): bool
    {
        return $this->display->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplay() : int
    {
        return $this->display->getValue();
    }

    /**
     * @param int $display
     */
    public function setDisplay(int $display)
    {
        $this->display->setChanged(true);
        $this->display->setValue($display);
    }
    
    public function hasThumbnail(): bool
    {
        return $this->thumbnail->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThumbnail() : int
    {
        return $this->thumbnail->getValue();
    }

    /**
     * @param int $thumbnail
     */
    public function setThumbnail(int $thumbnail)
    {
        $this->thumbnail->setChanged(true);
        $this->thumbnail->setValue($thumbnail);
    }
    
    public function hasNewWindow(): bool
    {
        return $this->newWindow->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNewWindow() : int
    {
        return $this->newWindow->getValue();
    }

    /**
     * @param int $newWindow
     */
    public function setNewWindow(int $newWindow)
    {
        $this->newWindow->setChanged(true);
        $this->newWindow->setValue($newWindow);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AttachmentType
    {
        return new AttachmentType();
    }
}