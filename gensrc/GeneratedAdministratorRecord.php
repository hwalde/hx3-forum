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

class GeneratedAdministratorRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $adminPermissions RecordValue */
    protected $adminPermissions;
    
    /** @var $navPrefs RecordValue */
    protected $navPrefs;
    
    /** @var $cssPrefs RecordValue */
    protected $cssPrefs;
    
    /** @var $notes RecordValue */
    protected $notes;
    
    /** @var $languageId RecordValue */
    protected $languageId;
    
    /** @var $dismissedNews RecordValue */
    protected $dismissedNews;
    
    /** @var $ptPermissions RecordValue */
    protected $ptPermissions;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->adminPermissions = new RecordValue();
		$this->navPrefs = new RecordValue();
		$this->cssPrefs = new RecordValue();
		$this->notes = new RecordValue();
		$this->languageId = new RecordValue();
		$this->dismissedNews = new RecordValue();
		$this->ptPermissions = new RecordValue();
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
    
    public function hasAdminPermissions(): bool
    {
        return $this->adminPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminPermissions() : int
    {
        return $this->adminPermissions->getValue();
    }

    /**
     * @param int $adminPermissions
     */
    public function setAdminPermissions(int $adminPermissions)
    {
        $this->adminPermissions->setChanged(true);
        $this->adminPermissions->setValue($adminPermissions);
    }
    
    public function hasNavPrefs(): bool
    {
        return $this->navPrefs->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getNavPrefs() : string
    {
        return $this->navPrefs->getValue();
    }

    /**
     * @param string $navPrefs
     */
    public function setNavPrefs(string $navPrefs)
    {
        $this->navPrefs->setChanged(true);
        $this->navPrefs->setValue($navPrefs);
    }
    
    public function hasCssPrefs(): bool
    {
        return $this->cssPrefs->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCssPrefs() : string
    {
        return $this->cssPrefs->getValue();
    }

    /**
     * @param string $cssPrefs
     */
    public function setCssPrefs(string $cssPrefs)
    {
        $this->cssPrefs->setChanged(true);
        $this->cssPrefs->setValue($cssPrefs);
    }
    
    public function hasNotes(): bool
    {
        return $this->notes->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes->getValue();
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes)
    {
        $this->notes->setChanged(true);
        $this->notes->setValue($notes);
    }
    
    public function hasLanguageId(): bool
    {
        return $this->languageId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId->getValue();
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId->setChanged(true);
        $this->languageId->setValue($languageId);
    }
    
    public function hasDismissedNews(): bool
    {
        return $this->dismissedNews->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getDismissedNews() : ?string
    {
        return $this->dismissedNews->getValue();
    }

    /**
     * @param string|null $dismissedNews
     */
    public function setDismissedNews(?string $dismissedNews)
    {
        $this->dismissedNews->setChanged(true);
        $this->dismissedNews->setValue($dismissedNews);
    }
    
    public function hasPtPermissions(): bool
    {
        return $this->ptPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPtPermissions() : int
    {
        return $this->ptPermissions->getValue();
    }

    /**
     * @param int $ptPermissions
     */
    public function setPtPermissions(int $ptPermissions)
    {
        $this->ptPermissions->setChanged(true);
        $this->ptPermissions->setValue($ptPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Administrator
    {
        return new Administrator();
    }
}