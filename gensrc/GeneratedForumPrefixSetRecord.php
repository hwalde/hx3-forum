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

class GeneratedForumPrefixSetRecord implements Record {
    
    /** @var $forumId int */
    protected $forumId;
    
    /** @var $prefixSetId string */
    protected $prefixSetId;
    
    public function hasForumId(): bool
    {
        return isset($this->forumId);
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId;
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId = $forumId;
    }
    
    public function hasPrefixSetId(): bool
    {
        return isset($this->prefixSetId);
    }    

    /**
     * @return string
     */
    public function getPrefixSetId() : string
    {
        return $this->prefixSetId;
    }

    /**
     * @param string $prefixSetId
     */
    public function setPrefixSetId(string $prefixSetId)
    {
        $this->prefixSetId = $prefixSetId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ForumPrefixSet
    {
        return new ForumPrefixSet();
    }
}