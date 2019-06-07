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

class GeneratedPtProjectVersionRecord implements Record {
    
    /** @var $projectVersionId int */
    protected $projectVersionId;
    
    /** @var $projectId int */
    protected $projectId;
    
    /** @var $versionName string */
    protected $versionName;
    
    /** @var $projectVersionGroupId int */
    protected $projectVersionGroupId;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $effectiveOrder int */
    protected $effectiveOrder;
    
    public function hasProjectVersionId(): bool
    {
        return isset($this->projectVersionId);
    }    

    /**
     * @return int
     */
    public function getProjectVersionId() : int
    {
        return $this->projectVersionId;
    }

    /**
     * @param int $projectVersionId
     */
    public function setProjectVersionId(int $projectVersionId)
    {
        $this->projectVersionId = $projectVersionId;
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
    
    public function hasVersionName(): bool
    {
        return isset($this->versionName);
    }    

    /**
     * @return string
     */
    public function getVersionName() : string
    {
        return $this->versionName;
    }

    /**
     * @param string $versionName
     */
    public function setVersionName(string $versionName)
    {
        $this->versionName = $versionName;
    }
    
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
    
    public function hasEffectiveOrder(): bool
    {
        return isset($this->effectiveOrder);
    }    

    /**
     * @return int
     */
    public function getEffectiveOrder() : int
    {
        return $this->effectiveOrder;
    }

    /**
     * @param int $effectiveOrder
     */
    public function setEffectiveOrder(int $effectiveOrder)
    {
        $this->effectiveOrder = $effectiveOrder;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectVersion
    {
        return new PtProjectVersion();
    }
}