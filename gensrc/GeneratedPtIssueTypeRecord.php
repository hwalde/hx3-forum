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

class GeneratedPtIssueTypeRecord implements Record {
    
    /** @var $issueTypeId string */
    protected $issueTypeId;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $iconFile string */
    protected $iconFile;
    
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
    
    public function hasIconFile(): bool
    {
        return isset($this->iconFile);
    }    

    /**
     * @return string
     */
    public function getIconFile() : string
    {
        return $this->iconFile;
    }

    /**
     * @param string $iconFile
     */
    public function setIconFile(string $iconFile)
    {
        $this->iconFile = $iconFile;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueType
    {
        return new PtIssueType();
    }
}