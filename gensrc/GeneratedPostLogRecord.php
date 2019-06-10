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

class GeneratedPostLogRecord implements Record {
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $userAgent RecordValue */
    protected $userAgent;
    
    /** @var $ip RecordValue */
    protected $ip;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->postId = new RecordValue();
		$this->userAgent = new RecordValue();
		$this->ip = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
    }
    
    public function hasUserAgent(): bool
    {
        return $this->userAgent->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent->getValue();
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent->setChanged(true);
        $this->userAgent->setValue($userAgent);
    }
    
    public function hasIp(): bool
    {
        return $this->ip->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIp() : int
    {
        return $this->ip->getValue();
    }

    /**
     * @param int $ip
     */
    public function setIp(int $ip)
    {
        $this->ip->setChanged(true);
        $this->ip->setValue($ip);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostLog
    {
        return new PostLog();
    }
}