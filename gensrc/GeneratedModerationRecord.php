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

class GeneratedModerationRecord implements Record {
    
    /** @var $primaryId RecordValue */
    protected $primaryId;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->primaryId = new RecordValue();
		$this->type = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasPrimaryId(): bool
    {
        return $this->primaryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPrimaryId() : int
    {
        return $this->primaryId->getValue();
    }

    /**
     * @param int $primaryId
     */
    public function setPrimaryId(int $primaryId)
    {
        $this->primaryId->setChanged(true);
        $this->primaryId->setValue($primaryId);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type->getValue();
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
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
    public function __getModel(): Moderation
    {
        return new Moderation();
    }
}