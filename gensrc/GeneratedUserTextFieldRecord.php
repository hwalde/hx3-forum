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

class GeneratedUserTextFieldRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $subFolders RecordValue */
    protected $subFolders;
    
    /** @var $pmFolders RecordValue */
    protected $pmFolders;
    
    /** @var $buddyList RecordValue */
    protected $buddyList;
    
    /** @var $ignoreList RecordValue */
    protected $ignoreList;
    
    /** @var $signature RecordValue */
    protected $signature;
    
    /** @var $searchPrefs RecordValue */
    protected $searchPrefs;
    
    /** @var $rank RecordValue */
    protected $rank;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->subFolders = new RecordValue();
		$this->pmFolders = new RecordValue();
		$this->buddyList = new RecordValue();
		$this->ignoreList = new RecordValue();
		$this->signature = new RecordValue();
		$this->searchPrefs = new RecordValue();
		$this->rank = new RecordValue();
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
    
    public function hasSubFolders(): bool
    {
        return $this->subFolders->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSubFolders() : string
    {
        return $this->subFolders->getValue();
    }

    /**
     * @param string $subFolders
     */
    public function setSubFolders(string $subFolders)
    {
        $this->subFolders->setChanged(true);
        $this->subFolders->setValue($subFolders);
    }
    
    public function hasPmFolders(): bool
    {
        return $this->pmFolders->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPmFolders() : string
    {
        return $this->pmFolders->getValue();
    }

    /**
     * @param string $pmFolders
     */
    public function setPmFolders(string $pmFolders)
    {
        $this->pmFolders->setChanged(true);
        $this->pmFolders->setValue($pmFolders);
    }
    
    public function hasBuddyList(): bool
    {
        return $this->buddyList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBuddyList() : string
    {
        return $this->buddyList->getValue();
    }

    /**
     * @param string $buddyList
     */
    public function setBuddyList(string $buddyList)
    {
        $this->buddyList->setChanged(true);
        $this->buddyList->setValue($buddyList);
    }
    
    public function hasIgnoreList(): bool
    {
        return $this->ignoreList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIgnoreList() : string
    {
        return $this->ignoreList->getValue();
    }

    /**
     * @param string $ignoreList
     */
    public function setIgnoreList(string $ignoreList)
    {
        $this->ignoreList->setChanged(true);
        $this->ignoreList->setValue($ignoreList);
    }
    
    public function hasSignature(): bool
    {
        return $this->signature->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSignature() : string
    {
        return $this->signature->getValue();
    }

    /**
     * @param string $signature
     */
    public function setSignature(string $signature)
    {
        $this->signature->setChanged(true);
        $this->signature->setValue($signature);
    }
    
    public function hasSearchPrefs(): bool
    {
        return $this->searchPrefs->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSearchPrefs() : string
    {
        return $this->searchPrefs->getValue();
    }

    /**
     * @param string $searchPrefs
     */
    public function setSearchPrefs(string $searchPrefs)
    {
        $this->searchPrefs->setChanged(true);
        $this->searchPrefs->setValue($searchPrefs);
    }
    
    public function hasRank(): bool
    {
        return $this->rank->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getRank() : string
    {
        return $this->rank->getValue();
    }

    /**
     * @param string $rank
     */
    public function setRank(string $rank)
    {
        $this->rank->setChanged(true);
        $this->rank->setValue($rank);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserTextField
    {
        return new UserTextField();
    }
}