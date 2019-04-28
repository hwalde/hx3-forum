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

class GeneratedUserCssCacheRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $cachedCss string|null */
    private $cachedCss;
    
    /** @var $buildPermissions int */
    private $buildPermissions;
    
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
    
    public function hasCachedCss(): bool
    {
        return isset($this->cachedCss);
    }    

    /**
     * @return string|null
     */
    public function getCachedCss() : ?string
    {
        return $this->cachedCss;
    }

    /**
     * @param string|null $cachedCss
     */
    public function setCachedCss(?string $cachedCss)
    {
        $this->cachedCss = $cachedCss;
    }
    
    public function hasBuildPermissions(): bool
    {
        return isset($this->buildPermissions);
    }    

    /**
     * @return int
     */
    public function getBuildPermissions() : int
    {
        return $this->buildPermissions;
    }

    /**
     * @param int $buildPermissions
     */
    public function setBuildPermissions(int $buildPermissions)
    {
        $this->buildPermissions = $buildPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserCssCache
    {
        return new UserCssCache();
    }
}