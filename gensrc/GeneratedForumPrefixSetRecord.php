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

class GeneratedForumPrefixSetRecord implements Record {
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $prefixSetId RecordValue */
    protected $prefixSetId;

    public function __construct() {
		$this->forumId = new RecordValue();
		$this->prefixSetId = new RecordValue();
    }
    
    public function hasForumId(): bool
    {
        return $this->forumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId->getValue();
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId->setChanged(true);
        $this->forumId->setValue($forumId);
    }
    
    public function hasPrefixSetId(): bool
    {
        return $this->prefixSetId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPrefixSetId() : string
    {
        return $this->prefixSetId->getValue();
    }

    /**
     * @param string $prefixSetId
     */
    public function setPrefixSetId(string $prefixSetId)
    {
        $this->prefixSetId->setChanged(true);
        $this->prefixSetId->setValue($prefixSetId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ForumPrefixSet
    {
        return new ForumPrefixSet();
    }
}