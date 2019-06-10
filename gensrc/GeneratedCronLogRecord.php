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

class GeneratedCronLogRecord implements Record {
    
    /** @var $cronLogId RecordValue */
    protected $cronLogId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $varName RecordValue */
    protected $varName;

    public function __construct() {
		$this->cronLogId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->description = new RecordValue();
		$this->type = new RecordValue();
		$this->varName = new RecordValue();
    }
    
    public function hasCronLogId(): bool
    {
        return $this->cronLogId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCronLogId() : int
    {
        return $this->cronLogId->getValue();
    }

    /**
     * @param int $cronLogId
     */
    public function setCronLogId(int $cronLogId)
    {
        $this->cronLogId->setChanged(true);
        $this->cronLogId->setValue($cronLogId);
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
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type->getValue();
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    public function hasVarName(): bool
    {
        return $this->varName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName->getValue();
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName->setChanged(true);
        $this->varName->setValue($varName);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CronLog
    {
        return new CronLog();
    }
}