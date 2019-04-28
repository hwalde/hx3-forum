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

class GeneratedImageCategoryPermissionRecord implements Record {
    
    /** @var $imageCategoryId int */
    private $imageCategoryId;
    
    /** @var $userGroupId int */
    private $userGroupId;
    
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ImageCategoryPermission
    {
        return new ImageCategoryPermission();
    }
}