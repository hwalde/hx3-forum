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

class GeneratedUserFieldRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $temp RecordValue */
    protected $temp;
    
    /** @var $field1 RecordValue */
    protected $field1;
    
    /** @var $field2 RecordValue */
    protected $field2;
    
    /** @var $field3 RecordValue */
    protected $field3;
    
    /** @var $field4 RecordValue */
    protected $field4;
    
    /** @var $field5 RecordValue */
    protected $field5;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->temp = new RecordValue();
		$this->field1 = new RecordValue();
		$this->field2 = new RecordValue();
		$this->field3 = new RecordValue();
		$this->field4 = new RecordValue();
		$this->field5 = new RecordValue();
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
    
    public function hasTemp(): bool
    {
        return $this->temp->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTemp() : string
    {
        return $this->temp->getValue();
    }

    /**
     * @param string $temp
     */
    public function setTemp(string $temp)
    {
        $this->temp->setChanged(true);
        $this->temp->setValue($temp);
    }
    
    public function hasField1(): bool
    {
        return $this->field1->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getField1() : string
    {
        return $this->field1->getValue();
    }

    /**
     * @param string $field1
     */
    public function setField1(string $field1)
    {
        $this->field1->setChanged(true);
        $this->field1->setValue($field1);
    }
    
    public function hasField2(): bool
    {
        return $this->field2->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getField2() : string
    {
        return $this->field2->getValue();
    }

    /**
     * @param string $field2
     */
    public function setField2(string $field2)
    {
        $this->field2->setChanged(true);
        $this->field2->setValue($field2);
    }
    
    public function hasField3(): bool
    {
        return $this->field3->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getField3() : string
    {
        return $this->field3->getValue();
    }

    /**
     * @param string $field3
     */
    public function setField3(string $field3)
    {
        $this->field3->setChanged(true);
        $this->field3->setValue($field3);
    }
    
    public function hasField4(): bool
    {
        return $this->field4->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getField4() : string
    {
        return $this->field4->getValue();
    }

    /**
     * @param string $field4
     */
    public function setField4(string $field4)
    {
        $this->field4->setChanged(true);
        $this->field4->setValue($field4);
    }
    
    public function hasField5(): bool
    {
        return $this->field5->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getField5() : string
    {
        return $this->field5->getValue();
    }

    /**
     * @param string $field5
     */
    public function setField5(string $field5)
    {
        $this->field5->setChanged(true);
        $this->field5->setValue($field5);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserField
    {
        return new UserField();
    }
}