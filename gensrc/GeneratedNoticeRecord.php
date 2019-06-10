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

class GeneratedNoticeRecord implements Record {
    
    /** @var $noticeId RecordValue */
    protected $noticeId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $persistent RecordValue */
    protected $persistent;
    
    /** @var $active RecordValue */
    protected $active;

    public function __construct() {
		$this->noticeId = new RecordValue();
		$this->title = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->persistent = new RecordValue();
		$this->active = new RecordValue();
    }
    
    public function hasNoticeId(): bool
    {
        return $this->noticeId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNoticeId() : int
    {
        return $this->noticeId->getValue();
    }

    /**
     * @param int $noticeId
     */
    public function setNoticeId(int $noticeId)
    {
        $this->noticeId->setChanged(true);
        $this->noticeId->setValue($noticeId);
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
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
    }
    
    public function hasPersistent(): bool
    {
        return $this->persistent->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPersistent() : int
    {
        return $this->persistent->getValue();
    }

    /**
     * @param int $persistent
     */
    public function setPersistent(int $persistent)
    {
        $this->persistent->setChanged(true);
        $this->persistent->setValue($persistent);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Notice
    {
        return new Notice();
    }
}