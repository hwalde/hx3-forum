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

class GeneratedNoticeRecord implements Record {
    
    /** @var $noticeId int */
    protected $noticeId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $persistent int */
    protected $persistent;
    
    /** @var $active int */
    protected $active;
    
    public function hasNoticeId(): bool
    {
        return isset($this->noticeId);
    }    

    /**
     * @return int
     */
    public function getNoticeId() : int
    {
        return $this->noticeId;
    }

    /**
     * @param int $noticeId
     */
    public function setNoticeId(int $noticeId)
    {
        $this->noticeId = $noticeId;
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
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }
    
    public function hasPersistent(): bool
    {
        return isset($this->persistent);
    }    

    /**
     * @return int
     */
    public function getPersistent() : int
    {
        return $this->persistent;
    }

    /**
     * @param int $persistent
     */
    public function setPersistent(int $persistent)
    {
        $this->persistent = $persistent;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Notice
    {
        return new Notice();
    }
}