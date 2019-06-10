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

class GeneratedUserTitleRecord implements Record {
    
    /** @var $userTitleId RecordValue */
    protected $userTitleId;
    
    /** @var $minPosts RecordValue */
    protected $minPosts;
    
    /** @var $title RecordValue */
    protected $title;

    public function __construct() {
		$this->userTitleId = new RecordValue();
		$this->minPosts = new RecordValue();
		$this->title = new RecordValue();
    }
    
    public function hasUserTitleId(): bool
    {
        return $this->userTitleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserTitleId() : int
    {
        return $this->userTitleId->getValue();
    }

    /**
     * @param int $userTitleId
     */
    public function setUserTitleId(int $userTitleId)
    {
        $this->userTitleId->setChanged(true);
        $this->userTitleId->setValue($userTitleId);
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
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserTitle
    {
        return new UserTitle();
    }
}