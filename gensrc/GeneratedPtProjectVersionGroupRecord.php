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

class GeneratedPtProjectVersionGroupRecord implements Record {
    
    /** @var $projectVersionGroupId int */
    protected $projectVersionGroupId;
    
    /** @var $projectId int */
    protected $projectId;
    
    /** @var $groupName string */
    protected $groupName;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    public function hasProjectVersionGroupId(): bool
    {
        return isset($this->projectVersionGroupId);
    }    

    /**
     * @return int
     */
    public function getProjectVersionGroupId() : int
    {
        return $this->projectVersionGroupId;
    }

    /**
     * @param int $projectVersionGroupId
     */
    public function setProjectVersionGroupId(int $projectVersionGroupId)
    {
        $this->projectVersionGroupId = $projectVersionGroupId;
    }
    
    public function hasProjectId(): bool
    {
        return isset($this->projectId);
    }    

    /**
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     */
    public function setProjectId(int $projectId)
    {
        $this->projectId = $projectId;
    }
    
    public function hasGroupName(): bool
    {
        return isset($this->groupName);
    }    

    /**
     * @return string
     */
    public function getGroupName() : string
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     */
    public function setGroupName(string $groupName)
    {
        $this->groupName = $groupName;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectVersionGroup
    {
        return new PtProjectVersionGroup();
    }
}