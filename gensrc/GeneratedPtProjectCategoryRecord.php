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

class GeneratedPtProjectCategoryRecord implements Record {
    
    /** @var $projectCategoryId int */
    private $projectCategoryId;
    
    /** @var $projectId int */
    private $projectId;
    
    /** @var $title string */
    private $title;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    public function hasProjectCategoryId(): bool
    {
        return isset($this->projectCategoryId);
    }    

    /**
     * @return int
     */
    public function getProjectCategoryId() : int
    {
        return $this->projectCategoryId;
    }

    /**
     * @param int $projectCategoryId
     */
    public function setProjectCategoryId(int $projectCategoryId)
    {
        $this->projectCategoryId = $projectCategoryId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectCategory
    {
        return new PtProjectCategory();
    }
}