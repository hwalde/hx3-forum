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

class GeneratedUserCssCacheRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $cachedCss RecordValue */
    protected $cachedCss;
    
    /** @var $buildPermissions RecordValue */
    protected $buildPermissions;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->cachedCss = new RecordValue();
		$this->buildPermissions = new RecordValue();
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasCachedCss(): bool
    {
        return $this->cachedCss->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getCachedCss() : ?string
    {
        return $this->cachedCss->getValue();
    }

    /**
     * @param string|null $cachedCss
     */
    public function setCachedCss(?string $cachedCss)
    {
        $this->cachedCss->setChanged(true);
        $this->cachedCss->setValue($cachedCss);
    }
    
    public function hasBuildPermissions(): bool
    {
        return $this->buildPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBuildPermissions() : int
    {
        return $this->buildPermissions->getValue();
    }

    /**
     * @param int $buildPermissions
     */
    public function setBuildPermissions(int $buildPermissions)
    {
        $this->buildPermissions->setChanged(true);
        $this->buildPermissions->setValue($buildPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserCssCache
    {
        return new UserCssCache();
    }
}