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

class GeneratedInfractionBanRecord implements Record {
    
    /** @var $infractionBanId RecordValue */
    protected $infractionBanId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $banuserGroupId RecordValue */
    protected $banuserGroupId;
    
    /** @var $amount RecordValue */
    protected $amount;
    
    /** @var $period RecordValue */
    protected $period;
    
    /** @var $method RecordValue */
    protected $method;

    public function __construct() {
		$this->infractionBanId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->banuserGroupId = new RecordValue();
		$this->amount = new RecordValue();
		$this->period = new RecordValue();
		$this->method = new RecordValue();
    }
    
    public function hasInfractionBanId(): bool
    {
        return $this->infractionBanId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractionBanId() : int
    {
        return $this->infractionBanId->getValue();
    }

    /**
     * @param int $infractionBanId
     */
    public function setInfractionBanId(int $infractionBanId)
    {
        $this->infractionBanId->setChanged(true);
        $this->infractionBanId->setValue($infractionBanId);
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
    
    public function hasBanuserGroupId(): bool
    {
        return $this->banuserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBanuserGroupId() : int
    {
        return $this->banuserGroupId->getValue();
    }

    /**
     * @param int $banuserGroupId
     */
    public function setBanuserGroupId(int $banuserGroupId)
    {
        $this->banuserGroupId->setChanged(true);
        $this->banuserGroupId->setValue($banuserGroupId);
    }
    
    public function hasAmount(): bool
    {
        return $this->amount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAmount() : int
    {
        return $this->amount->getValue();
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount->setChanged(true);
        $this->amount->setValue($amount);
    }
    
    public function hasPeriod(): bool
    {
        return $this->period->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period->getValue();
    }

    /**
     * @param string $period
     */
    public function setPeriod(string $period)
    {
        $this->period->setChanged(true);
        $this->period->setValue($period);
    }
    
    public function hasMethod(): bool
    {
        return $this->method->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method->getValue();
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method->setChanged(true);
        $this->method->setValue($method);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): InfractionBan
    {
        return new InfractionBan();
    }
}