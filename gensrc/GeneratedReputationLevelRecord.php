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

class GeneratedReputationLevelRecord implements Record {
    
    /** @var $reputationLevelId int */
    protected $reputationLevelId;
    
    /** @var $minimumReputation int */
    protected $minimumReputation;
    
    public function hasReputationLevelId(): bool
    {
        return isset($this->reputationLevelId);
    }    

    /**
     * @return int
     */
    public function getReputationLevelId() : int
    {
        return $this->reputationLevelId;
    }

    /**
     * @param int $reputationLevelId
     */
    public function setReputationLevelId(int $reputationLevelId)
    {
        $this->reputationLevelId = $reputationLevelId;
    }
    
    public function hasMinimumReputation(): bool
    {
        return isset($this->minimumReputation);
    }    

    /**
     * @return int
     */
    public function getMinimumReputation() : int
    {
        return $this->minimumReputation;
    }

    /**
     * @param int $minimumReputation
     */
    public function setMinimumReputation(int $minimumReputation)
    {
        $this->minimumReputation = $minimumReputation;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ReputationLevel
    {
        return new ReputationLevel();
    }
}