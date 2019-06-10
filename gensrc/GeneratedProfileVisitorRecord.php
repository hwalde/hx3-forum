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

class GeneratedProfileVisitorRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $visitorId RecordValue */
    protected $visitorId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $visible RecordValue */
    protected $visible;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->visitorId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->visible = new RecordValue();
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
    
    public function hasVisitorId(): bool
    {
        return $this->visitorId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisitorId() : int
    {
        return $this->visitorId->getValue();
    }

    /**
     * @param int $visitorId
     */
    public function setVisitorId(int $visitorId)
    {
        $this->visitorId->setChanged(true);
        $this->visitorId->setValue($visitorId);
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
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible->getValue();
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProfileVisitor
    {
        return new ProfileVisitor();
    }
}