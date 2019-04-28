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

class GeneratedUserNoteRecord implements Record {
    
    /** @var $usernoteid int */
    private $usernoteid;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $posterid int */
    private $posterid;
    
    /** @var $userName string */
    private $userName;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $message string */
    private $message;
    
    /** @var $title string */
    private $title;
    
    /** @var $allowSmilies int */
    private $allowSmilies;
    
    public function hasUsernoteid(): bool
    {
        return isset($this->usernoteid);
    }    

    /**
     * @return int
     */
    public function getUsernoteid() : int
    {
        return $this->usernoteid;
    }

    /**
     * @param int $usernoteid
     */
    public function setUsernoteid(int $usernoteid)
    {
        $this->usernoteid = $usernoteid;
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
    
    public function hasPosterid(): bool
    {
        return isset($this->posterid);
    }    

    /**
     * @return int
     */
    public function getPosterid() : int
    {
        return $this->posterid;
    }

    /**
     * @param int $posterid
     */
    public function setPosterid(int $posterid)
    {
        $this->posterid = $posterid;
    }
    
    public function hasUserName(): bool
    {
        return isset($this->userName);
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
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
    
    public function hasMessage(): bool
    {
        return isset($this->message);
    }    

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
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
    
    public function hasAllowSmilies(): bool
    {
        return isset($this->allowSmilies);
    }    

    /**
     * @return int
     */
    public function getAllowSmilies() : int
    {
        return $this->allowSmilies;
    }

    /**
     * @param int $allowSmilies
     */
    public function setAllowSmilies(int $allowSmilies)
    {
        $this->allowSmilies = $allowSmilies;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserNote
    {
        return new UserNote();
    }
}