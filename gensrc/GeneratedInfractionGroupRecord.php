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

class GeneratedInfractionGroupRecord implements Record {
    
    /** @var $infractionGroupId int */
    protected $infractionGroupId;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $oruserGroupId int */
    protected $oruserGroupId;
    
    /** @var $pointLevel int */
    protected $pointLevel;
    
    /** @var $override int */
    protected $override;
    
    public function hasInfractionGroupId(): bool
    {
        return isset($this->infractionGroupId);
    }    

    /**
     * @return int
     */
    public function getInfractionGroupId() : int
    {
        return $this->infractionGroupId;
    }

    /**
     * @param int $infractionGroupId
     */
    public function setInfractionGroupId(int $infractionGroupId)
    {
        $this->infractionGroupId = $infractionGroupId;
    }
    
    public function hasUserGroupId(): bool
    {
        return isset($this->userGroupId);
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId = $userGroupId;
    }
    
    public function hasOruserGroupId(): bool
    {
        return isset($this->oruserGroupId);
    }    

    /**
     * @return int
     */
    public function getOruserGroupId() : int
    {
        return $this->oruserGroupId;
    }

    /**
     * @param int $oruserGroupId
     */
    public function setOruserGroupId(int $oruserGroupId)
    {
        $this->oruserGroupId = $oruserGroupId;
    }
    
    public function hasPointLevel(): bool
    {
        return isset($this->pointLevel);
    }    

    /**
     * @return int
     */
    public function getPointLevel() : int
    {
        return $this->pointLevel;
    }

    /**
     * @param int $pointLevel
     */
    public function setPointLevel(int $pointLevel)
    {
        $this->pointLevel = $pointLevel;
    }
    
    public function hasOverride(): bool
    {
        return isset($this->override);
    }    

    /**
     * @return int
     */
    public function getOverride() : int
    {
        return $this->override;
    }

    /**
     * @param int $override
     */
    public function setOverride(int $override)
    {
        $this->override = $override;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): InfractionGroup
    {
        return new InfractionGroup();
    }
}