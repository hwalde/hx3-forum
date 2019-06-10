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

class GeneratedPtProjectVersionRecord implements Record {
    
    /** @var $projectVersionId RecordValue */
    protected $projectVersionId;
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $versionName RecordValue */
    protected $versionName;
    
    /** @var $projectVersionGroupId RecordValue */
    protected $projectVersionGroupId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $effectiveOrder RecordValue */
    protected $effectiveOrder;

    public function __construct() {
		$this->projectVersionId = new RecordValue();
		$this->projectId = new RecordValue();
		$this->versionName = new RecordValue();
		$this->projectVersionGroupId = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->effectiveOrder = new RecordValue();
    }
    
    public function hasProjectVersionId(): bool
    {
        return $this->projectVersionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProjectVersionId() : int
    {
        return $this->projectVersionId->getValue();
    }

    /**
     * @param int $projectVersionId
     */
    public function setProjectVersionId(int $projectVersionId)
    {
        $this->projectVersionId->setChanged(true);
        $this->projectVersionId->setValue($projectVersionId);
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
    
    public function hasVersionName(): bool
    {
        return $this->versionName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVersionName() : string
    {
        return $this->versionName->getValue();
    }

    /**
     * @param string $versionName
     */
    public function setVersionName(string $versionName)
    {
        $this->versionName->setChanged(true);
        $this->versionName->setValue($versionName);
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
    
    public function hasEffectiveOrder(): bool
    {
        return $this->effectiveOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEffectiveOrder() : int
    {
        return $this->effectiveOrder->getValue();
    }

    /**
     * @param int $effectiveOrder
     */
    public function setEffectiveOrder(int $effectiveOrder)
    {
        $this->effectiveOrder->setChanged(true);
        $this->effectiveOrder->setValue($effectiveOrder);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectVersion
    {
        return new PtProjectVersion();
    }
}