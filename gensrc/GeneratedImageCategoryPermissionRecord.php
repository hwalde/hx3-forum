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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedImageCategoryPermissionRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $imageCategoryId RecordValue */
    protected $imageCategoryId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;

    public function __construct() {
		$this->imageCategoryId = new RecordValue();
		$this->userGroupId = new RecordValue();
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ImageCategoryPermission
    {
        return new ImageCategoryPermission();
    }
}