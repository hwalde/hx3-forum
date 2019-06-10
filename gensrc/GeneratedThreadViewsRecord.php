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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedThreadViewsRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $threadId RecordValue */
    protected $threadId;

    public function __construct() {
		$this->threadId = new RecordValue();
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadViews
    {
        return new ThreadViews();
    }
}