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

class GeneratedPasswordHistoryRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $password string */
    private $password;
    
    /** @var $passwordDate \DateTime */
    private $passwordDate;
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasPassword(): bool
    {
        return isset($this->password);
    }    

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
    public function hasPasswordDate(): bool
    {
        return isset($this->passwordDate);
    }    

    /**
     * @return \DateTime
     */
    public function getPasswordDate() : \DateTime
    {
        return $this->passwordDate;
    }

    /**
     * @param \DateTime $passwordDate
     */
    public function setPasswordDate(\DateTime $passwordDate)
    {
        $this->passwordDate = $passwordDate;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PasswordHistory
    {
        return new PasswordHistory();
    }
}