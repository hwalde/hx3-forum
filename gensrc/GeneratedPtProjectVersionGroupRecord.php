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

class GeneratedPtProjectVersionGroupRecord implements Record {
    
    /** @var $projectVersionGroupId RecordValue */
    protected $projectVersionGroupId;
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $groupName RecordValue */
    protected $groupName;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->projectVersionGroupId = new RecordValue();
		$this->projectId = new RecordValue();
		$this->groupName = new RecordValue();
		$this->displayOrder = new RecordValue();
    }
    
    public function hasProjectVersionGroupId(): bool
    {
        return $this->projectVersionGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProjectVersionGroupId() : int
    {
        return $this->projectVersionGroupId->getValue();
    }

    /**
     * @param int $projectVersionGroupId
     */
    public function setProjectVersionGroupId(int $projectVersionGroupId)
    {
        $this->projectVersionGroupId->setChanged(true);
        $this->projectVersionGroupId->setValue($projectVersionGroupId);
    }
    
    public function hasProjectId(): bool
    {
        return $this->projectId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId->getValue();
    }

    /**
     * @param int $projectId
     */
    public function setProjectId(int $projectId)
    {
        $this->projectId->setChanged(true);
        $this->projectId->setValue($projectId);
    }
    
    public function hasGroupName(): bool
    {
        return $this->groupName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getGroupName() : string
    {
        return $this->groupName->getValue();
    }

    /**
     * @param string $groupName
     */
    public function setGroupName(string $groupName)
    {
        $this->groupName->setChanged(true);
        $this->groupName->setValue($groupName);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectVersionGroup
    {
        return new PtProjectVersionGroup();
    }
}