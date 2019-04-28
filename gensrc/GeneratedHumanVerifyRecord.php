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

class GeneratedHumanVerifyRecord implements Record {
    
    /** @var $hash string */
    private $hash;
    
    /** @var $answer string|null */
    private $answer;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $viewed int */
    private $viewed;
    
    public function hasHash(): bool
    {
        return isset($this->hash);
    }    

    /**
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash = $hash;
    }
    
    public function hasAnswer(): bool
    {
        return isset($this->answer);
    }    

    /**
     * @return string|null
     */
    public function getAnswer() : ?string
    {
        return $this->answer;
    }

    /**
     * @param string|null $answer
     */
    public function setAnswer(?string $answer)
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
    
    public function hasViewed(): bool
    {
        return isset($this->viewed);
    }    

    /**
     * @return int
     */
    public function getViewed() : int
    {
        return $this->viewed;
    }

    /**
     * @param int $viewed
     */
    public function setViewed(int $viewed)
    {
        $this->viewed = $viewed;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): HumanVerify
    {
        return new HumanVerify();
    }
}