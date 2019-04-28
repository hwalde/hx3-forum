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

class GeneratedVisitorMessageHashRecord implements Record {
    
    /** @var $postUserId int */
    private $postUserId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $dupeHash string */
    private $dupeHash;
    
    /** @var $dateLine int */
    private $dateLine;
    
    public function hasPostUserId(): bool
    {
        return isset($this->postUserId);
    }    

    /**
     * @return int
     */
    public function getPostUserId() : int
    {
        return $this->postUserId;
    }

    /**
     * @param int $postUserId
     */
    public function setPostUserId(int $postUserId)
    {
        $this->postUserId = $postUserId;
    }
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasDupeHash(): bool
    {
        return isset($this->dupeHash);
    }    

    /**
     * @return string
     */
    public function getDupeHash() : string
    {
        return $this->dupeHash;
    }

    /**
     * @param string $dupeHash
     */
    public function setDupeHash(string $dupeHash)
    {
        $this->dupeHash = $dupeHash;
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
    public function __getModel(): VisitorMessageHash
    {
        return new VisitorMessageHash();
    }
}