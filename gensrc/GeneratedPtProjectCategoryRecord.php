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

class GeneratedPtProjectCategoryRecord implements Record {
    
    /** @var $projectCategoryId RecordValue */
    protected $projectCategoryId;
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;

    public function __construct() {
		$this->projectCategoryId = new RecordValue();
		$this->projectId = new RecordValue();
		$this->title = new RecordValue();
		$this->displayOrder = new RecordValue();
    }
    
    public function hasProjectCategoryId(): bool
    {
        return $this->projectCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProjectCategoryId() : int
    {
        return $this->projectCategoryId->getValue();
    }

    /**
     * @param int $projectCategoryId
     */
    public function setProjectCategoryId(int $projectCategoryId)
    {
        $this->projectCategoryId->setChanged(true);
        $this->projectCategoryId->setValue($projectCategoryId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectCategory
    {
        return new PtProjectCategory();
    }
}