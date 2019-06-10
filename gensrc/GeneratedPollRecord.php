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

class GeneratedPollRecord implements Record {
    
    /** @var $pollId RecordValue */
    protected $pollId;
    
    /** @var $question RecordValue */
    protected $question;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $votes RecordValue */
    protected $votes;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $numberOptions RecordValue */
    protected $numberOptions;
    
    /** @var $timeout RecordValue */
    protected $timeout;
    
    /** @var $multiple RecordValue */
    protected $multiple;
    
    /** @var $voters RecordValue */
    protected $voters;
    
    /** @var $public RecordValue */
    protected $public;
    
    /** @var $lastVote RecordValue */
    protected $lastVote;
    
    /** @var $importPollId RecordValue */
    protected $importPollId;

    public function __construct() {
		$this->pollId = new RecordValue();
		$this->question = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->options = new RecordValue();
		$this->votes = new RecordValue();
		$this->active = new RecordValue();
		$this->numberOptions = new RecordValue();
		$this->timeout = new RecordValue();
		$this->multiple = new RecordValue();
		$this->voters = new RecordValue();
		$this->public = new RecordValue();
		$this->lastVote = new RecordValue();
		$this->importPollId = new RecordValue();
    }
    
    public function hasPollId(): bool
    {
        return $this->pollId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPollId() : int
    {
        return $this->pollId->getValue();
    }

    /**
     * @param int $pollId
     */
    public function setPollId(int $pollId)
    {
        $this->pollId->setChanged(true);
        $this->pollId->setValue($pollId);
    }
    
    public function hasQuestion(): bool
    {
        return $this->question->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getQuestion() : string
    {
        return $this->question->getValue();
    }

    /**
     * @param string $question
     */
    public function setQuestion(string $question)
    {
        $this->question->setChanged(true);
        $this->question->setValue($question);
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
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOptions() : string
    {
        return $this->options->getValue();
    }

    /**
     * @param string $options
     */
    public function setOptions(string $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasVotes(): bool
    {
        return $this->votes->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVotes() : string
    {
        return $this->votes->getValue();
    }

    /**
     * @param string $votes
     */
    public function setVotes(string $votes)
    {
        $this->votes->setChanged(true);
        $this->votes->setValue($votes);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    public function hasNumberOptions(): bool
    {
        return $this->numberOptions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNumberOptions() : int
    {
        return $this->numberOptions->getValue();
    }

    /**
     * @param int $numberOptions
     */
    public function setNumberOptions(int $numberOptions)
    {
        $this->numberOptions->setChanged(true);
        $this->numberOptions->setValue($numberOptions);
    }
    
    public function hasTimeout(): bool
    {
        return $this->timeout->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTimeout() : int
    {
        return $this->timeout->getValue();
    }

    /**
     * @param int $timeout
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout->setChanged(true);
        $this->timeout->setValue($timeout);
    }
    
    public function hasMultiple(): bool
    {
        return $this->multiple->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMultiple() : int
    {
        return $this->multiple->getValue();
    }

    /**
     * @param int $multiple
     */
    public function setMultiple(int $multiple)
    {
        $this->multiple->setChanged(true);
        $this->multiple->setValue($multiple);
    }
    
    public function hasVoters(): bool
    {
        return $this->voters->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoters() : int
    {
        return $this->voters->getValue();
    }

    /**
     * @param int $voters
     */
    public function setVoters(int $voters)
    {
        $this->voters->setChanged(true);
        $this->voters->setValue($voters);
    }
    
    public function hasPublic(): bool
    {
        return $this->public->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPublic() : int
    {
        return $this->public->getValue();
    }

    /**
     * @param int $public
     */
    public function setPublic(int $public)
    {
        $this->public->setChanged(true);
        $this->public->setValue($public);
    }
    
    public function hasLastVote(): bool
    {
        return $this->lastVote->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastVote() : int
    {
        return $this->lastVote->getValue();
    }

    /**
     * @param int $lastVote
     */
    public function setLastVote(int $lastVote)
    {
        $this->lastVote->setChanged(true);
        $this->lastVote->setValue($lastVote);
    }
    
    public function hasImportPollId(): bool
    {
        return $this->importPollId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportPollId() : int
    {
        return $this->importPollId->getValue();
    }

    /**
     * @param int $importPollId
     */
    public function setImportPollId(int $importPollId)
    {
        $this->importPollId->setChanged(true);
        $this->importPollId->setValue($importPollId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Poll
    {
        return new Poll();
    }
}