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

class GeneratedModerationRecord implements Record {
    
    /** @var $primaryId int */
    private $primaryId;
    
    /** @var $type string */
    private $type;
    
    /** @var $dateLine int */
    private $dateLine;
    
    public function hasPrimaryId(): bool
    {
        return isset($this->primaryId);
    }    

    /**
     * @return int
     */
    public function getPrimaryId() : int
    {
        return $this->primaryId;
    }

    /**
     * @param int $primaryId
     */
    public function setPrimaryId(int $primaryId)
    {
        $this->primaryId = $primaryId;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
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
    public function __getModel(): Moderation
    {
        return new Moderation();
    }
}