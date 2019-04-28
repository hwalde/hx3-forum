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

class GeneratedAdministratorRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $adminPermissions int */
    private $adminPermissions;
    
    /** @var $navPrefs string */
    private $navPrefs;
    
    /** @var $cssPrefs string */
    private $cssPrefs;
    
    /** @var $notes string */
    private $notes;
    
    /** @var $languageId int */
    private $languageId;
    
    /** @var $dismissedNews string|null */
    private $dismissedNews;
    
    /** @var $ptPermissions int */
    private $ptPermissions;
    
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
    
    public function hasAdminPermissions(): bool
    {
        return isset($this->adminPermissions);
    }    

    /**
     * @return int
     */
    public function getAdminPermissions() : int
    {
        return $this->adminPermissions;
    }

    /**
     * @param int $adminPermissions
     */
    public function setAdminPermissions(int $adminPermissions)
    {
        $this->adminPermissions = $adminPermissions;
    }
    
    public function hasNavPrefs(): bool
    {
        return isset($this->navPrefs);
    }    

    /**
     * @return string
     */
    public function getNavPrefs() : string
    {
        return $this->navPrefs;
    }

    /**
     * @param string $navPrefs
     */
    public function setNavPrefs(string $navPrefs)
    {
        $this->navPrefs = $navPrefs;
    }
    
    public function hasCssPrefs(): bool
    {
        return isset($this->cssPrefs);
    }    

    /**
     * @return string
     */
    public function getCssPrefs() : string
    {
        return $this->cssPrefs;
    }

    /**
     * @param string $cssPrefs
     */
    public function setCssPrefs(string $cssPrefs)
    {
        $this->cssPrefs = $cssPrefs;
    }
    
    public function hasNotes(): bool
    {
        return isset($this->notes);
    }    

    /**
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
    }
    
    public function hasLanguageId(): bool
    {
        return isset($this->languageId);
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId;
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId = $languageId;
    }
    
    public function hasDismissedNews(): bool
    {
        return isset($this->dismissedNews);
    }    

    /**
     * @return string|null
     */
    public function getDismissedNews() : ?string
    {
        return $this->dismissedNews;
    }

    /**
     * @param string|null $dismissedNews
     */
    public function setDismissedNews(?string $dismissedNews)
    {
        $this->dismissedNews = $dismissedNews;
    }
    
    public function hasPtPermissions(): bool
    {
        return isset($this->ptPermissions);
    }    

    /**
     * @return int
     */
    public function getPtPermissions() : int
    {
        return $this->ptPermissions;
    }

    /**
     * @param int $ptPermissions
     */
    public function setPtPermissions(int $ptPermissions)
    {
        $this->ptPermissions = $ptPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Administrator
    {
        return new Administrator();
    }
}