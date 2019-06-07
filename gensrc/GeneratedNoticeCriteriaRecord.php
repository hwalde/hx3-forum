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

class GeneratedNoticeCriteriaRecord implements Record {
    
    /** @var $noticeId int */
    protected $noticeId;
    
    /** @var $criteriaId string */
    protected $criteriaId;
    
    /** @var $condition1 string */
    protected $condition1;
    
    /** @var $condition2 string */
    protected $condition2;
    
    /** @var $condition3 string */
    protected $condition3;
    
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
    
    public function hasCriteriaId(): bool
    {
        return isset($this->criteriaId);
    }    

    /**
     * @return string
     */
    public function getCriteriaId() : string
    {
        return $this->criteriaId;
    }

    /**
     * @param string $criteriaId
     */
    public function setCriteriaId(string $criteriaId)
    {
        $this->criteriaId = $criteriaId;
    }
    
    public function hasCondition1(): bool
    {
        return isset($this->condition1);
    }    

    /**
     * @return string
     */
    public function getCondition1() : string
    {
        return $this->condition1;
    }

    /**
     * @param string $condition1
     */
    public function setCondition1(string $condition1)
    {
        $this->condition1 = $condition1;
    }
    
    public function hasCondition2(): bool
    {
        return isset($this->condition2);
    }    

    /**
     * @return string
     */
    public function getCondition2() : string
    {
        return $this->condition2;
    }

    /**
     * @param string $condition2
     */
    public function setCondition2(string $condition2)
    {
        $this->condition2 = $condition2;
    }
    
    public function hasCondition3(): bool
    {
        return isset($this->condition3);
    }    

    /**
     * @return string
     */
    public function getCondition3() : string
    {
        return $this->condition3;
    }

    /**
     * @param string $condition3
     */
    public function setCondition3(string $condition3)
    {
        $this->condition3 = $condition3;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): NoticeCriteria
    {
        return new NoticeCriteria();
    }
}