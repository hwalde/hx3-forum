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

class GeneratedAvatarRecord implements Record {
    
    /** @var $avatarId int */
    protected $avatarId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $minimumPosts int */
    protected $minimumPosts;
    
    /** @var $avatarPath string */
    protected $avatarPath;
    
    /** @var $imageCategoryId int */
    protected $imageCategoryId;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    public function hasAvatarId(): bool
    {
        return isset($this->avatarId);
    }    

    /**
     * @return int
     */
    public function getAvatarId() : int
    {
        return $this->avatarId;
    }

    /**
     * @param int $avatarId
     */
    public function setAvatarId(int $avatarId)
    {
        $this->avatarId = $avatarId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasMinimumPosts(): bool
    {
        return isset($this->minimumPosts);
    }    

    /**
     * @return int
     */
    public function getMinimumPosts() : int
    {
        return $this->minimumPosts;
    }

    /**
     * @param int $minimumPosts
     */
    public function setMinimumPosts(int $minimumPosts)
    {
        $this->minimumPosts = $minimumPosts;
    }
    
    public function hasAvatarPath(): bool
    {
        return isset($this->avatarPath);
    }    

    /**
     * @return string
     */
    public function getAvatarPath() : string
    {
        return $this->avatarPath;
    }

    /**
     * @param string $avatarPath
     */
    public function setAvatarPath(string $avatarPath)
    {
        $this->avatarPath = $avatarPath;
    }
    
    public function hasImageCategoryId(): bool
    {
        return isset($this->imageCategoryId);
    }    

    /**
     * @return int
     */
    public function getImageCategoryId() : int
    {
        return $this->imageCategoryId;
    }

    /**
     * @param int $imageCategoryId
     */
    public function setImageCategoryId(int $imageCategoryId)
    {
        $this->imageCategoryId = $imageCategoryId;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Avatar
    {
        return new Avatar();
    }
}