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

class GeneratedPollRecord implements Record {
    
    /** @var $pollId int */
    private $pollId;
    
    /** @var $question string */
    private $question;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $options string */
    private $options;
    
    /** @var $votes string */
    private $votes;
    
    /** @var $active int */
    private $active;
    
    /** @var $numberOptions int */
    private $numberOptions;
    
    /** @var $timeout int */
    private $timeout;
    
    /** @var $multiple int */
    private $multiple;
    
    /** @var $voters int */
    private $voters;
    
    /** @var $public int */
    private $public;
    
    /** @var $lastVote int */
    private $lastVote;
    
    /** @var $importPollId int */
    private $importPollId;
    
    public function hasPollId(): bool
    {
        return isset($this->pollId);
    }    

    /**
     * @return int
     */
    public function getPollId() : int
    {
        return $this->pollId;
    }

    /**
     * @param int $pollId
     */
    public function setPollId(int $pollId)
    {
        $this->pollId = $pollId;
    }
    
    public function hasQuestion(): bool
    {
        return isset($this->question);
    }    

    /**
     * @return string
     */
    public function getQuestion() : string
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion(string $question)
    {
        $this->question = $question;
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
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return string
     */
    public function getOptions() : string
    {
        return $this->options;
    }

    /**
     * @param string $options
     */
    public function setOptions(string $options)
    {
        $this->options = $options;
    }
    
    public function hasVotes(): bool
    {
        return isset($this->votes);
    }    

    /**
     * @return string
     */
    public function getVotes() : string
    {
        return $this->votes;
    }

    /**
     * @param string $votes
     */
    public function setVotes(string $votes)
    {
        $this->votes = $votes;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
    
    public function hasNumberOptions(): bool
    {
        return isset($this->numberOptions);
    }    

    /**
     * @return int
     */
    public function getNumberOptions() : int
    {
        return $this->numberOptions;
    }

    /**
     * @param int $numberOptions
     */
    public function setNumberOptions(int $numberOptions)
    {
        $this->numberOptions = $numberOptions;
    }
    
    public function hasTimeout(): bool
    {
        return isset($this->timeout);
    }    

    /**
     * @return int
     */
    public function getTimeout() : int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
    }
    
    public function hasMultiple(): bool
    {
        return isset($this->multiple);
    }    

    /**
     * @return int
     */
    public function getMultiple() : int
    {
        return $this->multiple;
    }

    /**
     * @param int $multiple
     */
    public function setMultiple(int $multiple)
    {
        $this->multiple = $multiple;
    }
    
    public function hasVoters(): bool
    {
        return isset($this->voters);
    }    

    /**
     * @return int
     */
    public function getVoters() : int
    {
        return $this->voters;
    }

    /**
     * @param int $voters
     */
    public function setVoters(int $voters)
    {
        $this->voters = $voters;
    }
    
    public function hasPublic(): bool
    {
        return isset($this->public);
    }    

    /**
     * @return int
     */
    public function getPublic() : int
    {
        return $this->public;
    }

    /**
     * @param int $public
     */
    public function setPublic(int $public)
    {
        $this->public = $public;
    }
    
    public function hasLastVote(): bool
    {
        return isset($this->lastVote);
    }    

    /**
     * @return int
     */
    public function getLastVote() : int
    {
        return $this->lastVote;
    }

    /**
     * @param int $lastVote
     */
    public function setLastVote(int $lastVote)
    {
        $this->lastVote = $lastVote;
    }
    
    public function hasImportPollId(): bool
    {
        return isset($this->importPollId);
    }    

    /**
     * @return int
     */
    public function getImportPollId() : int
    {
        return $this->importPollId;
    }

    /**
     * @param int $importPollId
     */
    public function setImportPollId(int $importPollId)
    {
        $this->importPollId = $importPollId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Poll
    {
        return new Poll();
    }
}