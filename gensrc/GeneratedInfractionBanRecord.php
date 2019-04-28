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

class GeneratedInfractionBanRecord implements Record {
    
    /** @var $infractionBanId int */
    private $infractionBanId;
    
    /** @var $userGroupId int */
    private $userGroupId;
    
    /** @var $banuserGroupId int */
    private $banuserGroupId;
    
    /** @var $amount int */
    private $amount;
    
    /** @var $period string */
    private $period;
    
    /** @var $method string */
    private $method;
    
    public function hasInfractionBanId(): bool
    {
        return isset($this->infractionBanId);
    }    

    /**
     * @return int
     */
    public function getInfractionBanId() : int
    {
        return $this->infractionBanId;
    }

    /**
     * @param int $infractionBanId
     */
    public function setInfractionBanId(int $infractionBanId)
    {
        $this->infractionBanId = $infractionBanId;
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
    
    public function hasBanuserGroupId(): bool
    {
        return isset($this->banuserGroupId);
    }    

    /**
     * @return int
     */
    public function getBanuserGroupId() : int
    {
        return $this->banuserGroupId;
    }

    /**
     * @param int $banuserGroupId
     */
    public function setBanuserGroupId(int $banuserGroupId)
    {
        $this->banuserGroupId = $banuserGroupId;
    }
    
    public function hasAmount(): bool
    {
        return isset($this->amount);
    }    

    /**
     * @return int
     */
    public function getAmount() : int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }
    
    public function hasPeriod(): bool
    {
        return isset($this->period);
    }    

    /**
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period;
    }

    /**
     * @param string $period
     */
    public function setPeriod(string $period)
    {
        $this->period = $period;
    }
    
    public function hasMethod(): bool
    {
        return isset($this->method);
    }    

    /**
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): InfractionBan
    {
        return new InfractionBan();
    }
}