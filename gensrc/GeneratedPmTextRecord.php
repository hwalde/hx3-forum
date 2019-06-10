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

class GeneratedPmTextRecord implements Record {
    
    /** @var $pmTextId RecordValue */
    protected $pmTextId;
    
    /** @var $fromUserId RecordValue */
    protected $fromUserId;
    
    /** @var $fromUserName RecordValue */
    protected $fromUserName;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $message RecordValue */
    protected $message;
    
    /** @var $toUserArray RecordValue */
    protected $toUserArray;
    
    /** @var $iconId RecordValue */
    protected $iconId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $showSignature RecordValue */
    protected $showSignature;
    
    /** @var $allowSmilie RecordValue */
    protected $allowSmilie;
    
    /** @var $importPmId RecordValue */
    protected $importPmId;

    public function __construct() {
		$this->pmTextId = new RecordValue();
		$this->fromUserId = new RecordValue();
		$this->fromUserName = new RecordValue();
		$this->title = new RecordValue();
		$this->message = new RecordValue();
		$this->toUserArray = new RecordValue();
		$this->iconId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->showSignature = new RecordValue();
		$this->allowSmilie = new RecordValue();
		$this->importPmId = new RecordValue();
    }
    
    public function hasPmTextId(): bool
    {
        return $this->pmTextId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmTextId() : int
    {
        return $this->pmTextId->getValue();
    }

    /**
     * @param int $pmTextId
     */
    public function setPmTextId(int $pmTextId)
    {
        $this->pmTextId->setChanged(true);
        $this->pmTextId->setValue($pmTextId);
    }
    
    public function hasFromUserId(): bool
    {
        return $this->fromUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFromUserId() : int
    {
        return $this->fromUserId->getValue();
    }

    /**
     * @param int $fromUserId
     */
    public function setFromUserId(int $fromUserId)
    {
        $this->fromUserId->setChanged(true);
        $this->fromUserId->setValue($fromUserId);
    }
    
    public function hasFromUserName(): bool
    {
        return $this->fromUserName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFromUserName() : string
    {
        return $this->fromUserName->getValue();
    }

    /**
     * @param string $fromUserName
     */
    public function setFromUserName(string $fromUserName)
    {
        $this->fromUserName->setChanged(true);
        $this->fromUserName->setValue($fromUserName);
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
    
    public function hasToUserArray(): bool
    {
        return $this->toUserArray->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getToUserArray() : string
    {
        return $this->toUserArray->getValue();
    }

    /**
     * @param string $toUserArray
     */
    public function setToUserArray(string $toUserArray)
    {
        $this->toUserArray->setChanged(true);
        $this->toUserArray->setValue($toUserArray);
    }
    
    public function hasIconId(): bool
    {
        return $this->iconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId->getValue();
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId->setChanged(true);
        $this->iconId->setValue($iconId);
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
    
    public function hasShowSignature(): bool
    {
        return $this->showSignature->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getShowSignature() : int
    {
        return $this->showSignature->getValue();
    }

    /**
     * @param int $showSignature
     */
    public function setShowSignature(int $showSignature)
    {
        $this->showSignature->setChanged(true);
        $this->showSignature->setValue($showSignature);
    }
    
    public function hasAllowSmilie(): bool
    {
        return $this->allowSmilie->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAllowSmilie() : int
    {
        return $this->allowSmilie->getValue();
    }

    /**
     * @param int $allowSmilie
     */
    public function setAllowSmilie(int $allowSmilie)
    {
        $this->allowSmilie->setChanged(true);
        $this->allowSmilie->setValue($allowSmilie);
    }
    
    public function hasImportPmId(): bool
    {
        return $this->importPmId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportPmId() : int
    {
        return $this->importPmId->getValue();
    }

    /**
     * @param int $importPmId
     */
    public function setImportPmId(int $importPmId)
    {
        $this->importPmId->setChanged(true);
        $this->importPmId->setValue($importPmId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PmText
    {
        return new PmText();
    }
}