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

class GeneratedPtProjectRecord implements Record {
    
    /** @var $projectId int */
    private $projectId;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $title string */
    private $title;
    
    /** @var $titleClean string */
    private $titleClean;
    
    /** @var $summary string */
    private $summary;
    
    /** @var $summaryClean string */
    private $summaryClean;
    
    /** @var $description string */
    private $description;
    
    /** @var $options int */
    private $options;
    
    /** @var $afterForumIds string */
    private $afterForumIds;
    
    /** @var $forumTitle string */
    private $forumTitle;
    
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
    
    public function hasTitleClean(): bool
    {
        return isset($this->titleClean);
    }    

    /**
     * @return string
     */
    public function getTitleClean() : string
    {
        return $this->titleClean;
    }

    /**
     * @param string $titleClean
     */
    public function setTitleClean(string $titleClean)
    {
        $this->titleClean = $titleClean;
    }
    
    public function hasSummary(): bool
    {
        return isset($this->summary);
    }    

    /**
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }
    
    public function hasSummaryClean(): bool
    {
        return isset($this->summaryClean);
    }    

    /**
     * @return string
     */
    public function getSummaryClean() : string
    {
        return $this->summaryClean;
    }

    /**
     * @param string $summaryClean
     */
    public function setSummaryClean(string $summaryClean)
    {
        $this->summaryClean = $summaryClean;
    }
    
    public function hasDescription(): bool
    {
        return isset($this->description);
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options = $options;
    }
    
    public function hasAfterForumIds(): bool
    {
        return isset($this->afterForumIds);
    }    

    /**
     * @return string
     */
    public function getAfterForumIds() : string
    {
        return $this->afterForumIds;
    }

    /**
     * @param string $afterForumIds
     */
    public function setAfterForumIds(string $afterForumIds)
    {
        $this->afterForumIds = $afterForumIds;
    }
    
    public function hasForumTitle(): bool
    {
        return isset($this->forumTitle);
    }    

    /**
     * @return string
     */
    public function getForumTitle() : string
    {
        return $this->forumTitle;
    }

    /**
     * @param string $forumTitle
     */
    public function setForumTitle(string $forumTitle)
    {
        $this->forumTitle = $forumTitle;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProject
    {
        return new PtProject();
    }
}