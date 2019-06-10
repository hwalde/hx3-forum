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

class GeneratedReputationLevelRecord implements Record {
    
    /** @var $reputationLevelId RecordValue */
    protected $reputationLevelId;
    
    /** @var $minimumReputation RecordValue */
    protected $minimumReputation;

    public function __construct() {
		$this->reputationLevelId = new RecordValue();
		$this->minimumReputation = new RecordValue();
    }
    
    public function hasReputationLevelId(): bool
    {
        return $this->reputationLevelId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReputationLevelId() : int
    {
        return $this->reputationLevelId->getValue();
    }

    /**
     * @param int $reputationLevelId
     */
    public function setReputationLevelId(int $reputationLevelId)
    {
        $this->reputationLevelId->setChanged(true);
        $this->reputationLevelId->setValue($reputationLevelId);
    }
    
    public function hasMinimumReputation(): bool
    {
        return $this->minimumReputation->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMinimumReputation() : int
    {
        return $this->minimumReputation->getValue();
    }

    /**
     * @param int $minimumReputation
     */
    public function setMinimumReputation(int $minimumReputation)
    {
        $this->minimumReputation->setChanged(true);
        $this->minimumReputation->setValue($minimumReputation);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ReputationLevel
    {
        return new ReputationLevel();
    }
}