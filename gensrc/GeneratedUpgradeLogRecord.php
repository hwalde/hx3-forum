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

class GeneratedUpgradeLogRecord implements Record {
    
    /** @var $upgradeLogId RecordValue */
    protected $upgradeLogId;
    
    /** @var $script RecordValue */
    protected $script;
    
    /** @var $stepTitle RecordValue */
    protected $stepTitle;
    
    /** @var $step RecordValue */
    protected $step;
    
    /** @var $startAt RecordValue */
    protected $startAt;
    
    /** @var $perPage RecordValue */
    protected $perPage;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->upgradeLogId = new RecordValue();
		$this->script = new RecordValue();
		$this->stepTitle = new RecordValue();
		$this->step = new RecordValue();
		$this->startAt = new RecordValue();
		$this->perPage = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasUpgradeLogId(): bool
    {
        return $this->upgradeLogId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUpgradeLogId() : int
    {
        return $this->upgradeLogId->getValue();
    }

    /**
     * @param int $upgradeLogId
     */
    public function setUpgradeLogId(int $upgradeLogId)
    {
        $this->upgradeLogId->setChanged(true);
        $this->upgradeLogId->setValue($upgradeLogId);
    }
    
    public function hasScript(): bool
    {
        return $this->script->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getScript() : string
    {
        return $this->script->getValue();
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script->setChanged(true);
        $this->script->setValue($script);
    }
    
    public function hasStepTitle(): bool
    {
        return $this->stepTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getStepTitle() : string
    {
        return $this->stepTitle->getValue();
    }

    /**
     * @param string $stepTitle
     */
    public function setStepTitle(string $stepTitle)
    {
        $this->stepTitle->setChanged(true);
        $this->stepTitle->setValue($stepTitle);
    }
    
    public function hasStep(): bool
    {
        return $this->step->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStep() : int
    {
        return $this->step->getValue();
    }

    /**
     * @param int $step
     */
    public function setStep(int $step)
    {
        $this->step->setChanged(true);
        $this->step->setValue($step);
    }
    
    public function hasStartAt(): bool
    {
        return $this->startAt->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStartAt() : int
    {
        return $this->startAt->getValue();
    }

    /**
     * @param int $startAt
     */
    public function setStartAt(int $startAt)
    {
        $this->startAt->setChanged(true);
        $this->startAt->setValue($startAt);
    }
    
    public function hasPerPage(): bool
    {
        return $this->perPage->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPerPage() : int
    {
        return $this->perPage->getValue();
    }

    /**
     * @param int $perPage
     */
    public function setPerPage(int $perPage)
    {
        $this->perPage->setChanged(true);
        $this->perPage->setValue($perPage);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UpgradeLog
    {
        return new UpgradeLog();
    }
}