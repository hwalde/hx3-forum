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

class GeneratedPtProjectRecord implements Record {
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $titleClean RecordValue */
    protected $titleClean;
    
    /** @var $summary RecordValue */
    protected $summary;
    
    /** @var $summaryClean RecordValue */
    protected $summaryClean;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $afterForumIds RecordValue */
    protected $afterForumIds;
    
    /** @var $forumTitle RecordValue */
    protected $forumTitle;

    public function __construct() {
		$this->projectId = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->title = new RecordValue();
		$this->titleClean = new RecordValue();
		$this->summary = new RecordValue();
		$this->summaryClean = new RecordValue();
		$this->description = new RecordValue();
		$this->options = new RecordValue();
		$this->afterForumIds = new RecordValue();
		$this->forumTitle = new RecordValue();
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
    
    public function hasTitleClean(): bool
    {
        return $this->titleClean->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitleClean() : string
    {
        return $this->titleClean->getValue();
    }

    /**
     * @param string $titleClean
     */
    public function setTitleClean(string $titleClean)
    {
        $this->titleClean->setChanged(true);
        $this->titleClean->setValue($titleClean);
    }
    
    public function hasSummary(): bool
    {
        return $this->summary->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary->getValue();
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary)
    {
        $this->summary->setChanged(true);
        $this->summary->setValue($summary);
    }
    
    public function hasSummaryClean(): bool
    {
        return $this->summaryClean->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSummaryClean() : string
    {
        return $this->summaryClean->getValue();
    }

    /**
     * @param string $summaryClean
     */
    public function setSummaryClean(string $summaryClean)
    {
        $this->summaryClean->setChanged(true);
        $this->summaryClean->setValue($summaryClean);
    }
    
    public function hasDescription(): bool
    {
        return $this->description->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description->getValue();
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description->setChanged(true);
        $this->description->setValue($description);
    }
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options->getValue();
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasAfterForumIds(): bool
    {
        return $this->afterForumIds->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAfterForumIds() : string
    {
        return $this->afterForumIds->getValue();
    }

    /**
     * @param string $afterForumIds
     */
    public function setAfterForumIds(string $afterForumIds)
    {
        $this->afterForumIds->setChanged(true);
        $this->afterForumIds->setValue($afterForumIds);
    }
    
    public function hasForumTitle(): bool
    {
        return $this->forumTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getForumTitle() : string
    {
        return $this->forumTitle->getValue();
    }

    /**
     * @param string $forumTitle
     */
    public function setForumTitle(string $forumTitle)
    {
        $this->forumTitle->setChanged(true);
        $this->forumTitle->setValue($forumTitle);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProject
    {
        return new PtProject();
    }
}