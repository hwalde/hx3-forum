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

class GeneratedUserNoteRecord implements Record {
    
    /** @var $usernoteid RecordValue */
    protected $usernoteid;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $posterid RecordValue */
    protected $posterid;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $message RecordValue */
    protected $message;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $allowSmilies RecordValue */
    protected $allowSmilies;

    public function __construct() {
		$this->usernoteid = new RecordValue();
		$this->userId = new RecordValue();
		$this->posterid = new RecordValue();
		$this->userName = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->message = new RecordValue();
		$this->title = new RecordValue();
		$this->allowSmilies = new RecordValue();
    }
    
    public function hasUsernoteid(): bool
    {
        return $this->usernoteid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUsernoteid() : int
    {
        return $this->usernoteid->getValue();
    }

    /**
     * @param int $usernoteid
     */
    public function setUsernoteid(int $usernoteid)
    {
        $this->usernoteid->setChanged(true);
        $this->usernoteid->setValue($usernoteid);
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasPosterid(): bool
    {
        return $this->posterid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPosterid() : int
    {
        return $this->posterid->getValue();
    }

    /**
     * @param int $posterid
     */
    public function setPosterid(int $posterid)
    {
        $this->posterid->setChanged(true);
        $this->posterid->setValue($posterid);
    }
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
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
    
    public function hasMessage(): bool
    {
        return $this->message->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message->getValue();
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message->setChanged(true);
        $this->message->setValue($message);
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
    
    public function hasAllowSmilies(): bool
    {
        return $this->allowSmilies->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAllowSmilies() : int
    {
        return $this->allowSmilies->getValue();
    }

    /**
     * @param int $allowSmilies
     */
    public function setAllowSmilies(int $allowSmilies)
    {
        $this->allowSmilies->setChanged(true);
        $this->allowSmilies->setValue($allowSmilies);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserNote
    {
        return new UserNote();
    }
}