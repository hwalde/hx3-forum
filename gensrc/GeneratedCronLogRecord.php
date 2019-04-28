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

class GeneratedCronLogRecord implements Record {
    
    /** @var $cronLogId int */
    private $cronLogId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $description string */
    private $description;
    
    /** @var $type int */
    private $type;
    
    /** @var $varName string */
    private $varName;
    
    public function hasCronLogId(): bool
    {
        return isset($this->cronLogId);
    }    

    /**
     * @return int
     */
    public function getCronLogId() : int
    {
        return $this->cronLogId;
    }

    /**
     * @param int $cronLogId
     */
    public function setCronLogId(int $cronLogId)
    {
        $this->cronLogId = $cronLogId;
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
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }
    
    public function hasVarName(): bool
    {
        return isset($this->varName);
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName;
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName = $varName;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CronLog
    {
        return new CronLog();
    }
}