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

class GeneratedThreadRedirectRecord implements Record {
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $expires RecordValue */
    protected $expires;

    public function __construct() {
		$this->threadId = new RecordValue();
		$this->expires = new RecordValue();
    }
    
    public function hasThreadId(): bool
    {
        return $this->threadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId->getValue();
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId->setChanged(true);
        $this->threadId->setValue($threadId);
    }
    
    public function hasExpires(): bool
    {
        return $this->expires->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExpires() : int
    {
        return $this->expires->getValue();
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires)
    {
        $this->expires->setChanged(true);
        $this->expires->setValue($expires);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadRedirect
    {
        return new ThreadRedirect();
    }
}