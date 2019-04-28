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

class GeneratedUserFieldRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $temp string */
    private $temp;
    
    /** @var $field1 string */
    private $field1;
    
    /** @var $field2 string */
    private $field2;
    
    /** @var $field3 string */
    private $field3;
    
    /** @var $field4 string */
    private $field4;
    
    /** @var $field5 string */
    private $field5;
    
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
    
    public function hasTemp(): bool
    {
        return isset($this->temp);
    }    

    /**
     * @return string
     */
    public function getTemp() : string
    {
        return $this->temp;
    }

    /**
     * @param string $temp
     */
    public function setTemp(string $temp)
    {
        $this->temp = $temp;
    }
    
    public function hasField1(): bool
    {
        return isset($this->field1);
    }    

    /**
     * @return string
     */
    public function getField1() : string
    {
        return $this->field1;
    }

    /**
     * @param string $field1
     */
    public function setField1(string $field1)
    {
        $this->field1 = $field1;
    }
    
    public function hasField2(): bool
    {
        return isset($this->field2);
    }    

    /**
     * @return string
     */
    public function getField2() : string
    {
        return $this->field2;
    }

    /**
     * @param string $field2
     */
    public function setField2(string $field2)
    {
        $this->field2 = $field2;
    }
    
    public function hasField3(): bool
    {
        return isset($this->field3);
    }    

    /**
     * @return string
     */
    public function getField3() : string
    {
        return $this->field3;
    }

    /**
     * @param string $field3
     */
    public function setField3(string $field3)
    {
        $this->field3 = $field3;
    }
    
    public function hasField4(): bool
    {
        return isset($this->field4);
    }    

    /**
     * @return string
     */
    public function getField4() : string
    {
        return $this->field4;
    }

    /**
     * @param string $field4
     */
    public function setField4(string $field4)
    {
        $this->field4 = $field4;
    }
    
    public function hasField5(): bool
    {
        return isset($this->field5);
    }    

    /**
     * @return string
     */
    public function getField5() : string
    {
        return $this->field5;
    }

    /**
     * @param string $field5
     */
    public function setField5(string $field5)
    {
        $this->field5 = $field5;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserField
    {
        return new UserField();
    }
}