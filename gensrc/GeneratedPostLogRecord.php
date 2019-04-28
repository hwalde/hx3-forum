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

class GeneratedPostLogRecord implements Record {
    
    /** @var $postId int */
    private $postId;
    
    /** @var $userAgent string */
    private $userAgent;
    
    /** @var $ip int */
    private $ip;
    
    /** @var $dateLine int */
    private $dateLine;
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function hasUserAgent(): bool
    {
        return isset($this->userAgent);
    }    

    /**
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
    }
    
    public function hasIp(): bool
    {
        return isset($this->ip);
    }    

    /**
     * @return int
     */
    public function getIp() : int
    {
        return $this->ip;
    }

    /**
     * @param int $ip
     */
    public function setIp(int $ip)
    {
        $this->ip = $ip;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostLog
    {
        return new PostLog();
    }
}