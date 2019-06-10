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

class GeneratedPaymentApiRecord implements Record {
    
    /** @var $paymentApiId RecordValue */
    protected $paymentApiId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $currency RecordValue */
    protected $currency;
    
    /** @var $recurring RecordValue */
    protected $recurring;
    
    /** @var $className RecordValue */
    protected $className;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $settings RecordValue */
    protected $settings;

    public function __construct() {
		$this->paymentApiId = new RecordValue();
		$this->title = new RecordValue();
		$this->currency = new RecordValue();
		$this->recurring = new RecordValue();
		$this->className = new RecordValue();
		$this->active = new RecordValue();
		$this->settings = new RecordValue();
    }
    
    public function hasPaymentApiId(): bool
    {
        return $this->paymentApiId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPaymentApiId() : int
    {
        return $this->paymentApiId->getValue();
    }

    /**
     * @param int $paymentApiId
     */
    public function setPaymentApiId(int $paymentApiId)
    {
        $this->paymentApiId->setChanged(true);
        $this->paymentApiId->setValue($paymentApiId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasCurrency(): bool
    {
        return $this->currency->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency->getValue();
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency->setChanged(true);
        $this->currency->setValue($currency);
    }
    
    public function hasRecurring(): bool
    {
        return $this->recurring->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRecurring() : int
    {
        return $this->recurring->getValue();
    }

    /**
     * @param int $recurring
     */
    public function setRecurring(int $recurring)
    {
        $this->recurring->setChanged(true);
        $this->recurring->setValue($recurring);
    }
    
    public function hasClassName(): bool
    {
        return $this->className->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getClassName() : string
    {
        return $this->className->getValue();
    }

    /**
     * @param string $className
     */
    public function setClassName(string $className)
    {
        $this->className->setChanged(true);
        $this->className->setValue($className);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    public function hasSettings(): bool
    {
        return $this->settings->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSettings() : string
    {
        return $this->settings->getValue();
    }

    /**
     * @param string $settings
     */
    public function setSettings(string $settings)
    {
        $this->settings->setChanged(true);
        $this->settings->setValue($settings);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PaymentApi
    {
        return new PaymentApi();
    }
}