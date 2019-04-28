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

class GeneratedPaymentApiRecord implements Record {
    
    /** @var $paymentApiId int */
    private $paymentApiId;
    
    /** @var $title string */
    private $title;
    
    /** @var $currency string */
    private $currency;
    
    /** @var $recurring int */
    private $recurring;
    
    /** @var $className string */
    private $className;
    
    /** @var $active int */
    private $active;
    
    /** @var $settings string */
    private $settings;
    
    public function hasPaymentApiId(): bool
    {
        return isset($this->paymentApiId);
    }    

    /**
     * @return int
     */
    public function getPaymentApiId() : int
    {
        return $this->paymentApiId;
    }

    /**
     * @param int $paymentApiId
     */
    public function setPaymentApiId(int $paymentApiId)
    {
        $this->paymentApiId = $paymentApiId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasCurrency(): bool
    {
        return isset($this->currency);
    }    

    /**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }
    
    public function hasRecurring(): bool
    {
        return isset($this->recurring);
    }    

    /**
     * @return int
     */
    public function getRecurring() : int
    {
        return $this->recurring;
    }

    /**
     * @param int $recurring
     */
    public function setRecurring(int $recurring)
    {
        $this->recurring = $recurring;
    }
    
    public function hasClassName(): bool
    {
        return isset($this->className);
    }    

    /**
     * @return string
     */
    public function getClassName() : string
    {
        return $this->className;
    }

    /**
     * @param string $className
     */
    public function setClassName(string $className)
    {
        $this->className = $className;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
    
    public function hasSettings(): bool
    {
        return isset($this->settings);
    }    

    /**
     * @return string
     */
    public function getSettings() : string
    {
        return $this->settings;
    }

    /**
     * @param string $settings
     */
    public function setSettings(string $settings)
    {
        $this->settings = $settings;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PaymentApi
    {
        return new PaymentApi();
    }
}