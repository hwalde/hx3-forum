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

class GeneratedUpgradeLogRecord implements Record {
    
    /** @var $upgradeLogId int */
    protected $upgradeLogId;
    
    /** @var $script string */
    protected $script;
    
    /** @var $stepTitle string */
    protected $stepTitle;
    
    /** @var $step int */
    protected $step;
    
    /** @var $startAt int */
    protected $startAt;
    
    /** @var $perPage int */
    protected $perPage;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    public function hasUpgradeLogId(): bool
    {
        return isset($this->upgradeLogId);
    }    

    /**
     * @return int
     */
    public function getUpgradeLogId() : int
    {
        return $this->upgradeLogId;
    }

    /**
     * @param int $upgradeLogId
     */
    public function setUpgradeLogId(int $upgradeLogId)
    {
        $this->upgradeLogId = $upgradeLogId;
    }
    
    public function hasScript(): bool
    {
        return isset($this->script);
    }    

    /**
     * @return string
     */
    public function getScript() : string
    {
        return $this->script;
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script = $script;
    }
    
    public function hasStepTitle(): bool
    {
        return isset($this->stepTitle);
    }    

    /**
     * @return string
     */
    public function getStepTitle() : string
    {
        return $this->stepTitle;
    }

    /**
     * @param string $stepTitle
     */
    public function setStepTitle(string $stepTitle)
    {
        $this->stepTitle = $stepTitle;
    }
    
    public function hasStep(): bool
    {
        return isset($this->step);
    }    

    /**
     * @return int
     */
    public function getStep() : int
    {
        return $this->step;
    }

    /**
     * @param int $step
     */
    public function setStep(int $step)
    {
        $this->step = $step;
    }
    
    public function hasStartAt(): bool
    {
        return isset($this->startAt);
    }    

    /**
     * @return int
     */
    public function getStartAt() : int
    {
        return $this->startAt;
    }

    /**
     * @param int $startAt
     */
    public function setStartAt(int $startAt)
    {
        $this->startAt = $startAt;
    }
    
    public function hasPerPage(): bool
    {
        return isset($this->perPage);
    }    

    /**
     * @return int
     */
    public function getPerPage() : int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     */
    public function setPerPage(int $perPage)
    {
        $this->perPage = $perPage;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UpgradeLog
    {
        return new UpgradeLog();
    }
}