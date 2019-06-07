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

class GeneratedAttachmentPermissionRecord implements Record {
    
    /** @var $attachmentPermissionId int */
    protected $attachmentPermissionId;
    
    /** @var $extension string */
    protected $extension;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $size int */
    protected $size;
    
    /** @var $width int */
    protected $width;
    
    /** @var $height int */
    protected $height;
    
    /** @var $attachmentPermissions int */
    protected $attachmentPermissions;
    
    public function hasAttachmentPermissionId(): bool
    {
        return isset($this->attachmentPermissionId);
    }    

    /**
     * @return int
     */
    public function getAttachmentPermissionId() : int
    {
        return $this->attachmentPermissionId;
    }

    /**
     * @param int $attachmentPermissionId
     */
    public function setAttachmentPermissionId(int $attachmentPermissionId)
    {
        $this->attachmentPermissionId = $attachmentPermissionId;
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
    
    public function hasUserGroupId(): bool
    {
        return isset($this->userGroupId);
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId = $userGroupId;
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
    
    public function hasAttachmentPermissions(): bool
    {
        return isset($this->attachmentPermissions);
    }    

    /**
     * @return int
     */
    public function getAttachmentPermissions() : int
    {
        return $this->attachmentPermissions;
    }

    /**
     * @param int $attachmentPermissions
     */
    public function setAttachmentPermissions(int $attachmentPermissions)
    {
        $this->attachmentPermissions = $attachmentPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AttachmentPermission
    {
        return new AttachmentPermission();
    }
}