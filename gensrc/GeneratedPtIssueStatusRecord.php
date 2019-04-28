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

class GeneratedPtIssueStatusRecord implements Record {
    
    /** @var $issueStatusId int */
    private $issueStatusId;
    
    /** @var $issueTypeId string */
    private $issueTypeId;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $canpetitionFrom int */
    private $canpetitionFrom;
    
    public function hasIssueStatusId(): bool
    {
        return isset($this->issueStatusId);
    }    

    /**
     * @return int
     */
    public function getIssueStatusId() : int
    {
        return $this->issueStatusId;
    }

    /**
     * @param int $issueStatusId
     */
    public function setIssueStatusId(int $issueStatusId)
    {
        $this->issueStatusId = $issueStatusId;
    }
    
    public function hasIssueTypeId(): bool
    {
        return isset($this->issueTypeId);
    }    

    /**
     * @return string
     */
    public function getIssueTypeId() : string
    {
        return $this->issueTypeId;
    }

    /**
     * @param string $issueTypeId
     */
    public function setIssueTypeId(string $issueTypeId)
    {
        $this->issueTypeId = $issueTypeId;
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
    
    public function hasCanpetitionFrom(): bool
    {
        return isset($this->canpetitionFrom);
    }    

    /**
     * @return int
     */
    public function getCanpetitionFrom() : int
    {
        return $this->canpetitionFrom;
    }

    /**
     * @param int $canpetitionFrom
     */
    public function setCanpetitionFrom(int $canpetitionFrom)
    {
        $this->canpetitionFrom = $canpetitionFrom;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueStatus
    {
        return new PtIssueStatus();
    }
}