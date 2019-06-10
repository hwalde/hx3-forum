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

class GeneratedAttachmentPermissionRecord implements Record {
    
    /** @var $attachmentPermissionId RecordValue */
    protected $attachmentPermissionId;
    
    /** @var $extension RecordValue */
    protected $extension;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $size RecordValue */
    protected $size;
    
    /** @var $width RecordValue */
    protected $width;
    
    /** @var $height RecordValue */
    protected $height;
    
    /** @var $attachmentPermissions RecordValue */
    protected $attachmentPermissions;

    public function __construct() {
		$this->attachmentPermissionId = new RecordValue();
		$this->extension = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->size = new RecordValue();
		$this->width = new RecordValue();
		$this->height = new RecordValue();
		$this->attachmentPermissions = new RecordValue();
    }
    
    public function hasAttachmentPermissionId(): bool
    {
        return $this->attachmentPermissionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachmentPermissionId() : int
    {
        return $this->attachmentPermissionId->getValue();
    }

    /**
     * @param int $attachmentPermissionId
     */
    public function setAttachmentPermissionId(int $attachmentPermissionId)
    {
        $this->attachmentPermissionId->setChanged(true);
        $this->attachmentPermissionId->setValue($attachmentPermissionId);
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
    
    public function hasUserGroupId(): bool
    {
        return $this->userGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId->getValue();
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId->setChanged(true);
        $this->userGroupId->setValue($userGroupId);
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
    
    public function hasAttachmentPermissions(): bool
    {
        return $this->attachmentPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachmentPermissions() : int
    {
        return $this->attachmentPermissions->getValue();
    }

    /**
     * @param int $attachmentPermissions
     */
    public function setAttachmentPermissions(int $attachmentPermissions)
    {
        $this->attachmentPermissions->setChanged(true);
        $this->attachmentPermissions->setValue($attachmentPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AttachmentPermission
    {
        return new AttachmentPermission();
    }
}