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

class GeneratedInfractionGroupRecord implements Record {
    
    /** @var $infractionGroupId RecordValue */
    protected $infractionGroupId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $oruserGroupId RecordValue */
    protected $oruserGroupId;
    
    /** @var $pointLevel RecordValue */
    protected $pointLevel;
    
    /** @var $override RecordValue */
    protected $override;

    public function __construct() {
		$this->infractionGroupId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->oruserGroupId = new RecordValue();
		$this->pointLevel = new RecordValue();
		$this->override = new RecordValue();
    }
    
    public function hasInfractionGroupId(): bool
    {
        return $this->infractionGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractionGroupId() : int
    {
        return $this->infractionGroupId->getValue();
    }

    /**
     * @param int $infractionGroupId
     */
    public function setInfractionGroupId(int $infractionGroupId)
    {
        $this->infractionGroupId->setChanged(true);
        $this->infractionGroupId->setValue($infractionGroupId);
    }
    
    public function hasUserGroupId(): bool
    {
        return $this->userGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId->getValue();
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId->setChanged(true);
        $this->userGroupId->setValue($userGroupId);
    }
    
    public function hasOruserGroupId(): bool
    {
        return $this->oruserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOruserGroupId() : int
    {
        return $this->oruserGroupId->getValue();
    }

    /**
     * @param int $oruserGroupId
     */
    public function setOruserGroupId(int $oruserGroupId)
    {
        $this->oruserGroupId->setChanged(true);
        $this->oruserGroupId->setValue($oruserGroupId);
    }
    
    public function hasPointLevel(): bool
    {
        return $this->pointLevel->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPointLevel() : int
    {
        return $this->pointLevel->getValue();
    }

    /**
     * @param int $pointLevel
     */
    public function setPointLevel(int $pointLevel)
    {
        $this->pointLevel->setChanged(true);
        $this->pointLevel->setValue($pointLevel);
    }
    
    public function hasOverride(): bool
    {
        return $this->override->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOverride() : int
    {
        return $this->override->getValue();
    }

    /**
     * @param int $override
     */
    public function setOverride(int $override)
    {
        $this->override->setChanged(true);
        $this->override->setValue($override);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): InfractionGroup
    {
        return new InfractionGroup();
    }
}