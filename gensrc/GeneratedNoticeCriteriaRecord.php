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

class GeneratedNoticeCriteriaRecord implements Record {
    
    /** @var $noticeId RecordValue */
    protected $noticeId;
    
    /** @var $criteriaId RecordValue */
    protected $criteriaId;
    
    /** @var $condition1 RecordValue */
    protected $condition1;
    
    /** @var $condition2 RecordValue */
    protected $condition2;
    
    /** @var $condition3 RecordValue */
    protected $condition3;

    public function __construct() {
		$this->noticeId = new RecordValue();
		$this->criteriaId = new RecordValue();
		$this->condition1 = new RecordValue();
		$this->condition2 = new RecordValue();
		$this->condition3 = new RecordValue();
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
    
    public function hasCriteriaId(): bool
    {
        return $this->criteriaId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCriteriaId() : string
    {
        return $this->criteriaId->getValue();
    }

    /**
     * @param string $criteriaId
     */
    public function setCriteriaId(string $criteriaId)
    {
        $this->criteriaId->setChanged(true);
        $this->criteriaId->setValue($criteriaId);
    }
    
    public function hasCondition1(): bool
    {
        return $this->condition1->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCondition1() : string
    {
        return $this->condition1->getValue();
    }

    /**
     * @param string $condition1
     */
    public function setCondition1(string $condition1)
    {
        $this->condition1->setChanged(true);
        $this->condition1->setValue($condition1);
    }
    
    public function hasCondition2(): bool
    {
        return $this->condition2->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCondition2() : string
    {
        return $this->condition2->getValue();
    }

    /**
     * @param string $condition2
     */
    public function setCondition2(string $condition2)
    {
        $this->condition2->setChanged(true);
        $this->condition2->setValue($condition2);
    }
    
    public function hasCondition3(): bool
    {
        return $this->condition3->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCondition3() : string
    {
        return $this->condition3->getValue();
    }

    /**
     * @param string $condition3
     */
    public function setCondition3(string $condition3)
    {
        $this->condition3->setChanged(true);
        $this->condition3->setValue($condition3);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): NoticeCriteria
    {
        return new NoticeCriteria();
    }
}