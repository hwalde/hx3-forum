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

class GeneratedPmTextRecord implements Record {
    
    /** @var $pmTextId int */
    protected $pmTextId;
    
    /** @var $fromUserId int */
    protected $fromUserId;
    
    /** @var $fromUserName string */
    protected $fromUserName;
    
    /** @var $title string */
    protected $title;
    
    /** @var $message string */
    protected $message;
    
    /** @var $toUserArray string */
    protected $toUserArray;
    
    /** @var $iconId int */
    protected $iconId;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $showSignature int */
    protected $showSignature;
    
    /** @var $allowSmilie int */
    protected $allowSmilie;
    
    /** @var $importPmId int */
    protected $importPmId;
    
    public function hasPmTextId(): bool
    {
        return isset($this->pmTextId);
    }    

    /**
     * @return int
     */
    public function getPmTextId() : int
    {
        return $this->pmTextId;
    }

    /**
     * @param int $pmTextId
     */
    public function setPmTextId(int $pmTextId)
    {
        $this->pmTextId = $pmTextId;
    }
    
    public function hasFromUserId(): bool
    {
        return isset($this->fromUserId);
    }    

    /**
     * @return int
     */
    public function getFromUserId() : int
    {
        return $this->fromUserId;
    }

    /**
     * @param int $fromUserId
     */
    public function setFromUserId(int $fromUserId)
    {
        $this->fromUserId = $fromUserId;
    }
    
    public function hasFromUserName(): bool
    {
        return isset($this->fromUserName);
    }    

    /**
     * @return string
     */
    public function getFromUserName() : string
    {
        return $this->fromUserName;
    }

    /**
     * @param string $fromUserName
     */
    public function setFromUserName(string $fromUserName)
    {
        $this->fromUserName = $fromUserName;
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
    
    public function hasToUserArray(): bool
    {
        return isset($this->toUserArray);
    }    

    /**
     * @return string
     */
    public function getToUserArray() : string
    {
        return $this->toUserArray;
    }

    /**
     * @param string $toUserArray
     */
    public function setToUserArray(string $toUserArray)
    {
        $this->toUserArray = $toUserArray;
    }
    
    public function hasIconId(): bool
    {
        return isset($this->iconId);
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId;
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId = $iconId;
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
    
    public function hasShowSignature(): bool
    {
        return isset($this->showSignature);
    }    

    /**
     * @return int
     */
    public function getShowSignature() : int
    {
        return $this->showSignature;
    }

    /**
     * @param int $showSignature
     */
    public function setShowSignature(int $showSignature)
    {
        $this->showSignature = $showSignature;
    }
    
    public function hasAllowSmilie(): bool
    {
        return isset($this->allowSmilie);
    }    

    /**
     * @return int
     */
    public function getAllowSmilie() : int
    {
        return $this->allowSmilie;
    }

    /**
     * @param int $allowSmilie
     */
    public function setAllowSmilie(int $allowSmilie)
    {
        $this->allowSmilie = $allowSmilie;
    }
    
    public function hasImportPmId(): bool
    {
        return isset($this->importPmId);
    }    

    /**
     * @return int
     */
    public function getImportPmId() : int
    {
        return $this->importPmId;
    }

    /**
     * @param int $importPmId
     */
    public function setImportPmId(int $importPmId)
    {
        $this->importPmId = $importPmId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PmText
    {
        return new PmText();
    }
}