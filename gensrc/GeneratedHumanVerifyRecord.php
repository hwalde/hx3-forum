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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedHumanVerifyRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $hash RecordValue */
    protected $hash;
    
    /** @var $answer RecordValue */
    protected $answer;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $viewed RecordValue */
    protected $viewed;

    public function __construct() {
		$this->hash = new RecordValue();
		$this->answer = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->viewed = new RecordValue();
    }
    
    public function hasHash(): bool
    {
        return $this->hash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash->getValue();
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash->setChanged(true);
        $this->hash->setValue($hash);
    }
    
    public function hasAnswer(): bool
    {
        return $this->answer->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getAnswer() : ?string
    {
        return $this->answer->getValue();
    }

    /**
     * @param string|null $answer
     */
    public function setAnswer(?string $answer)
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
    
    public function hasViewed(): bool
    {
        return $this->viewed->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getViewed() : int
    {
        return $this->viewed->getValue();
    }

    /**
     * @param int $viewed
     */
    public function setViewed(int $viewed)
    {
        $this->viewed->setChanged(true);
        $this->viewed->setValue($viewed);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): HumanVerify
    {
        return new HumanVerify();
    }
}