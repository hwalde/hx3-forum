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

class GeneratedHvQuestionRecord implements Record {
    
    /** @var $questionId RecordValue */
    protected $questionId;
    
    /** @var $regex RecordValue */
    protected $regex;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->questionId = new RecordValue();
		$this->regex = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasQuestionId(): bool
    {
        return $this->questionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getQuestionId() : int
    {
        return $this->questionId->getValue();
    }

    /**
     * @param int $questionId
     */
    public function setQuestionId(int $questionId)
    {
        $this->questionId->setChanged(true);
        $this->questionId->setValue($questionId);
    }
    
    public function hasRegex(): bool
    {
        return $this->regex->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getRegex() : string
    {
        return $this->regex->getValue();
    }

    /**
     * @param string $regex
     */
    public function setRegex(string $regex)
    {
        $this->regex->setChanged(true);
        $this->regex->setValue($regex);
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
    public function __getModel(): HvQuestion
    {
        return new HvQuestion();
    }
}