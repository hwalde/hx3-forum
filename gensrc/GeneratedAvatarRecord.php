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

class GeneratedAvatarRecord implements Record {
    
    /** @var $avatarId RecordValue */
    protected $avatarId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $minimumPosts RecordValue */
    protected $minimumPosts;
    
    /** @var $avatarPath RecordValue */
    protected $avatarPath;
    
    /** @var $imageCategoryId RecordValue */
    protected $imageCategoryId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->avatarId = new RecordValue();
		$this->title = new RecordValue();
		$this->minimumPosts = new RecordValue();
		$this->avatarPath = new RecordValue();
		$this->imageCategoryId = new RecordValue();
		$this->displayOrder = new RecordValue();
    }
    
    public function hasAvatarId(): bool
    {
        return $this->avatarId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAvatarId() : int
    {
        return $this->avatarId->getValue();
    }

    /**
     * @param int $avatarId
     */
    public function setAvatarId(int $avatarId)
    {
        $this->avatarId->setChanged(true);
        $this->avatarId->setValue($avatarId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasMinimumPosts(): bool
    {
        return $this->minimumPosts->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMinimumPosts() : int
    {
        return $this->minimumPosts->getValue();
    }

    /**
     * @param int $minimumPosts
     */
    public function setMinimumPosts(int $minimumPosts)
    {
        $this->minimumPosts->setChanged(true);
        $this->minimumPosts->setValue($minimumPosts);
    }
    
    public function hasAvatarPath(): bool
    {
        return $this->avatarPath->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAvatarPath() : string
    {
        return $this->avatarPath->getValue();
    }

    /**
     * @param string $avatarPath
     */
    public function setAvatarPath(string $avatarPath)
    {
        $this->avatarPath->setChanged(true);
        $this->avatarPath->setValue($avatarPath);
    }
    
    public function hasImageCategoryId(): bool
    {
        return $this->imageCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImageCategoryId() : int
    {
        return $this->imageCategoryId->getValue();
    }

    /**
     * @param int $imageCategoryId
     */
    public function setImageCategoryId(int $imageCategoryId)
    {
        $this->imageCategoryId->setChanged(true);
        $this->imageCategoryId->setValue($imageCategoryId);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Avatar
    {
        return new Avatar();
    }
}