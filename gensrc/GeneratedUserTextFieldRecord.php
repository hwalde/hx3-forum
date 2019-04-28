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

class GeneratedUserTextFieldRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $subFolders string */
    private $subFolders;
    
    /** @var $pmFolders string */
    private $pmFolders;
    
    /** @var $buddyList string */
    private $buddyList;
    
    /** @var $ignoreList string */
    private $ignoreList;
    
    /** @var $signature string */
    private $signature;
    
    /** @var $searchPrefs string */
    private $searchPrefs;
    
    /** @var $rank string */
    private $rank;
    
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
    
    public function hasSubFolders(): bool
    {
        return isset($this->subFolders);
    }    

    /**
     * @return string
     */
    public function getSubFolders() : string
    {
        return $this->subFolders;
    }

    /**
     * @param string $subFolders
     */
    public function setSubFolders(string $subFolders)
    {
        $this->subFolders = $subFolders;
    }
    
    public function hasPmFolders(): bool
    {
        return isset($this->pmFolders);
    }    

    /**
     * @return string
     */
    public function getPmFolders() : string
    {
        return $this->pmFolders;
    }

    /**
     * @param string $pmFolders
     */
    public function setPmFolders(string $pmFolders)
    {
        $this->pmFolders = $pmFolders;
    }
    
    public function hasBuddyList(): bool
    {
        return isset($this->buddyList);
    }    

    /**
     * @return string
     */
    public function getBuddyList() : string
    {
        return $this->buddyList;
    }

    /**
     * @param string $buddyList
     */
    public function setBuddyList(string $buddyList)
    {
        $this->buddyList = $buddyList;
    }
    
    public function hasIgnoreList(): bool
    {
        return isset($this->ignoreList);
    }    

    /**
     * @return string
     */
    public function getIgnoreList() : string
    {
        return $this->ignoreList;
    }

    /**
     * @param string $ignoreList
     */
    public function setIgnoreList(string $ignoreList)
    {
        $this->ignoreList = $ignoreList;
    }
    
    public function hasSignature(): bool
    {
        return isset($this->signature);
    }    

    /**
     * @return string
     */
    public function getSignature() : string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     */
    public function setSignature(string $signature)
    {
        $this->signature = $signature;
    }
    
    public function hasSearchPrefs(): bool
    {
        return isset($this->searchPrefs);
    }    

    /**
     * @return string
     */
    public function getSearchPrefs() : string
    {
        return $this->searchPrefs;
    }

    /**
     * @param string $searchPrefs
     */
    public function setSearchPrefs(string $searchPrefs)
    {
        $this->searchPrefs = $searchPrefs;
    }
    
    public function hasRank(): bool
    {
        return isset($this->rank);
    }    

    /**
     * @return string
     */
    public function getRank() : string
    {
        return $this->rank;
    }

    /**
     * @param string $rank
     */
    public function setRank(string $rank)
    {
        $this->rank = $rank;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserTextField
    {
        return new UserTextField();
    }
}