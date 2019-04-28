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

class GeneratedRanksRecord implements Record {
    
    /** @var $rankId int */
    private $rankId;
    
    /** @var $minPosts int */
    private $minPosts;
    
    /** @var $rankLevel int */
    private $rankLevel;
    
    /** @var $rankimg string */
    private $rankimg;
    
    /** @var $userGroupId int */
    private $userGroupId;
    
    /** @var $type int */
    private $type;
    
    /** @var $importRanksId int */
    private $importRanksId;
    
    /** @var $stack int */
    private $stack;
    
    /** @var $display int */
    private $display;
    
    public function hasRankId(): bool
    {
        return isset($this->rankId);
    }    

    /**
     * @return int
     */
    public function getRankId() : int
    {
        return $this->rankId;
    }

    /**
     * @param int $rankId
     */
    public function setRankId(int $rankId)
    {
        $this->rankId = $rankId;
    }
    
    public function hasMinPosts(): bool
    {
        return isset($this->minPosts);
    }    

    /**
     * @return int
     */
    public function getMinPosts() : int
    {
        return $this->minPosts;
    }

    /**
     * @param int $minPosts
     */
    public function setMinPosts(int $minPosts)
    {
        $this->minPosts = $minPosts;
    }
    
    public function hasRankLevel(): bool
    {
        return isset($this->rankLevel);
    }    

    /**
     * @return int
     */
    public function getRankLevel() : int
    {
        return $this->rankLevel;
    }

    /**
     * @param int $rankLevel
     */
    public function setRankLevel(int $rankLevel)
    {
        $this->rankLevel = $rankLevel;
    }
    
    public function hasRankimg(): bool
    {
        return isset($this->rankimg);
    }    

    /**
     * @return string
     */
    public function getRankimg() : string
    {
        return $this->rankimg;
    }

    /**
     * @param string $rankimg
     */
    public function setRankimg(string $rankimg)
    {
        $this->rankimg = $rankimg;
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
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }
    
    public function hasImportRanksId(): bool
    {
        return isset($this->importRanksId);
    }    

    /**
     * @return int
     */
    public function getImportRanksId() : int
    {
        return $this->importRanksId;
    }

    /**
     * @param int $importRanksId
     */
    public function setImportRanksId(int $importRanksId)
    {
        $this->importRanksId = $importRanksId;
    }
    
    public function hasStack(): bool
    {
        return isset($this->stack);
    }    

    /**
     * @return int
     */
    public function getStack() : int
    {
        return $this->stack;
    }

    /**
     * @param int $stack
     */
    public function setStack(int $stack)
    {
        $this->stack = $stack;
    }
    
    public function hasDisplay(): bool
    {
        return isset($this->display);
    }    

    /**
     * @return int
     */
    public function getDisplay() : int
    {
        return $this->display;
    }

    /**
     * @param int $display
     */
    public function setDisplay(int $display)
    {
        $this->display = $display;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Ranks
    {
        return new Ranks();
    }
}