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

class GeneratedHvAnswerRecord implements Record {
    
    /** @var $answerId int */
    protected $answerId;
    
    /** @var $questionId int */
    protected $questionId;
    
    /** @var $answer string */
    protected $answer;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    public function hasAnswerId(): bool
    {
        return isset($this->answerId);
    }    

    /**
     * @return int
     */
    public function getAnswerId() : int
    {
        return $this->answerId;
    }

    /**
     * @param int $answerId
     */
    public function setAnswerId(int $answerId)
    {
        $this->answerId = $answerId;
    }
    
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
    
    public function hasAnswer(): bool
    {
        return isset($this->answer);
    }    

    /**
     * @return string
     */
    public function getAnswer() : string
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     */
    public function setAnswer(string $answer)
    {
        $this->answer = $answer;
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
    public function __getModel(): HvAnswer
    {
        return new HvAnswer();
    }
}