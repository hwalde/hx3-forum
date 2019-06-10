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

class GeneratedUserCssRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $selector RecordValue */
    protected $selector;
    
    /** @var $property RecordValue */
    protected $property;
    
    /** @var $value RecordValue */
    protected $value;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->selector = new RecordValue();
		$this->property = new RecordValue();
		$this->value = new RecordValue();
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
    
    public function hasSelector(): bool
    {
        return $this->selector->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSelector() : string
    {
        return $this->selector->getValue();
    }

    /**
     * @param string $selector
     */
    public function setSelector(string $selector)
    {
        $this->selector->setChanged(true);
        $this->selector->setValue($selector);
    }
    
    public function hasProperty(): bool
    {
        return $this->property->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProperty() : string
    {
        return $this->property->getValue();
    }

    /**
     * @param string $property
     */
    public function setProperty(string $property)
    {
        $this->property->setChanged(true);
        $this->property->setValue($property);
    }
    
    public function hasValue(): bool
    {
        return $this->value->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value->getValue();
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value->setChanged(true);
        $this->value->setValue($value);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserCss
    {
        return new UserCss();
    }
}