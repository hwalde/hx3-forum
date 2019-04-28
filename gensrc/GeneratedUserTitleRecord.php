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

class GeneratedUserTitleRecord implements Record {
    
    /** @var $userTitleId int */
    private $userTitleId;
    
    /** @var $minPosts int */
    private $minPosts;
    
    /** @var $title string */
    private $title;
    
    public function hasUserTitleId(): bool
    {
        return isset($this->userTitleId);
    }    

    /**
     * @return int
     */
    public function getUserTitleId() : int
    {
        return $this->userTitleId;
    }

    /**
     * @param int $userTitleId
     */
    public function setUserTitleId(int $userTitleId)
    {
        $this->userTitleId = $userTitleId;
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
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserTitle
    {
        return new UserTitle();
    }
}