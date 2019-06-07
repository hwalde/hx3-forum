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

class GeneratedThreadRedirectRecord implements Record {
    
    /** @var $threadId int */
    protected $threadId;
    
    /** @var $expires int */
    protected $expires;
    
    public function hasThreadId(): bool
    {
        return isset($this->threadId);
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId;
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId = $threadId;
    }
    
    public function hasExpires(): bool
    {
        return isset($this->expires);
    }    

    /**
     * @return int
     */
    public function getExpires() : int
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires)
    {
        $this->expires = $expires;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadRedirect
    {
        return new ThreadRedirect();
    }
}