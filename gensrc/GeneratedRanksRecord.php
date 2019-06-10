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

class GeneratedRanksRecord implements Record {
    
    /** @var $rankId RecordValue */
    protected $rankId;
    
    /** @var $minPosts RecordValue */
    protected $minPosts;
    
    /** @var $rankLevel RecordValue */
    protected $rankLevel;
    
    /** @var $rankimg RecordValue */
    protected $rankimg;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $importRanksId RecordValue */
    protected $importRanksId;
    
    /** @var $stack RecordValue */
    protected $stack;
    
    /** @var $display RecordValue */
    protected $display;

    public function __construct() {
		$this->rankId = new RecordValue();
		$this->minPosts = new RecordValue();
		$this->rankLevel = new RecordValue();
		$this->rankimg = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->type = new RecordValue();
		$this->importRanksId = new RecordValue();
		$this->stack = new RecordValue();
		$this->display = new RecordValue();
    }
    
    public function hasRankId(): bool
    {
        return $this->rankId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRankId() : int
    {
        return $this->rankId->getValue();
    }

    /**
     * @param int $rankId
     */
    public function setRankId(int $rankId)
    {
        $this->rankId->setChanged(true);
        $this->rankId->setValue($rankId);
    }
    
    public function hasMinPosts(): bool
    {
        return $this->minPosts->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMinPosts() : int
    {
        return $this->minPosts->getValue();
    }

    /**
     * @param int $minPosts
     */
    public function setMinPosts(int $minPosts)
    {
        $this->minPosts->setChanged(true);
        $this->minPosts->setValue($minPosts);
    }
    
    public function hasRankLevel(): bool
    {
        return $this->rankLevel->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRankLevel() : int
    {
        return $this->rankLevel->getValue();
    }

    /**
     * @param int $rankLevel
     */
    public function setRankLevel(int $rankLevel)
    {
        $this->rankLevel->setChanged(true);
        $this->rankLevel->setValue($rankLevel);
    }
    
    public function hasRankimg(): bool
    {
        return $this->rankimg->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getRankimg() : string
    {
        return $this->rankimg->getValue();
    }

    /**
     * @param string $rankimg
     */
    public function setRankimg(string $rankimg)
    {
        $this->rankimg->setChanged(true);
        $this->rankimg->setValue($rankimg);
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
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type->getValue();
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    public function hasImportRanksId(): bool
    {
        return $this->importRanksId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportRanksId() : int
    {
        return $this->importRanksId->getValue();
    }

    /**
     * @param int $importRanksId
     */
    public function setImportRanksId(int $importRanksId)
    {
        $this->importRanksId->setChanged(true);
        $this->importRanksId->setValue($importRanksId);
    }
    
    public function hasStack(): bool
    {
        return $this->stack->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStack() : int
    {
        return $this->stack->getValue();
    }

    /**
     * @param int $stack
     */
    public function setStack(int $stack)
    {
        $this->stack->setChanged(true);
        $this->stack->setValue($stack);
    }
    
    public function hasDisplay(): bool
    {
        return $this->display->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplay() : int
    {
        return $this->display->getValue();
    }

    /**
     * @param int $display
     */
    public function setDisplay(int $display)
    {
        $this->display->setChanged(true);
        $this->display->setValue($display);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Ranks
    {
        return new Ranks();
    }
}