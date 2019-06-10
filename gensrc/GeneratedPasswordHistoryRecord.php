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

class GeneratedPasswordHistoryRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $password RecordValue */
    protected $password;
    
    /** @var $passwordDate RecordValue */
    protected $passwordDate;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->password = new RecordValue();
		$this->passwordDate = new RecordValue();
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasPassword(): bool
    {
        return $this->password->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password->getValue();
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password->setChanged(true);
        $this->password->setValue($password);
    }
    
    public function hasPasswordDate(): bool
    {
        return $this->passwordDate->hasBeenSet();
    }    

    /**
     * @return \DateTime
     */
    public function getPasswordDate() : \DateTime
    {
        return $this->passwordDate->getValue();
    }

    /**
     * @param \DateTime $passwordDate
     */
    public function setPasswordDate(\DateTime $passwordDate)
    {
        $this->passwordDate->setChanged(true);
        $this->passwordDate->setValue($passwordDate);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PasswordHistory
    {
        return new PasswordHistory();
    }
}