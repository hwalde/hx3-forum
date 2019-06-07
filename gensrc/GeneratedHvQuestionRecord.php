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

class GeneratedHvQuestionRecord implements Record {
    
    /** @var $questionId int */
    protected $questionId;
    
    /** @var $regex string */
    protected $regex;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    public function hasQuestionId(): bool
    {
        return isset($this->questionId);
    }    

    /**
     * @return int
     */
    public function getQuestionId() : int
    {
        return $this->questionId;
    }

    /**
     * @param int $questionId
     */
    public function setQuestionId(int $questionId)
    {
        $this->questionId = $questionId;
    }
    
    public function hasRegex(): bool
    {
        return isset($this->regex);
    }    

    /**
     * @return string
     */
    public function getRegex() : string
    {
        return $this->regex;
    }

    /**
     * @param string $regex
     */
    public function setRegex(string $regex)
    {
        $this->regex = $regex;
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
    public function __getModel(): HvQuestion
    {
        return new HvQuestion();
    }
}