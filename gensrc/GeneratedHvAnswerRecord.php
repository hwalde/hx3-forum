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

class GeneratedHvAnswerRecord implements Record {
    
    /** @var $answerId RecordValue */
    protected $answerId;
    
    /** @var $questionId RecordValue */
    protected $questionId;
    
    /** @var $answer RecordValue */
    protected $answer;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->answerId = new RecordValue();
		$this->questionId = new RecordValue();
		$this->answer = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasAnswerId(): bool
    {
        return $this->answerId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAnswerId() : int
    {
        return $this->answerId->getValue();
    }

    /**
     * @param int $answerId
     */
    public function setAnswerId(int $answerId)
    {
        $this->answerId->setChanged(true);
        $this->answerId->setValue($answerId);
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
    
    public function hasAnswer(): bool
    {
        return $this->answer->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAnswer() : string
    {
        return $this->answer->getValue();
    }

    /**
     * @param string $answer
     */
    public function setAnswer(string $answer)
    {
        $this->answer->setChanged(true);
        $this->answer->setValue($answer);
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
    public function __getModel(): HvAnswer
    {
        return new HvAnswer();
    }
}