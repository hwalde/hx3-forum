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

class GeneratedPaymentTransactionRecord implements Record {
    
    /** @var $paymentTransactionId int */
    private $paymentTransactionId;
    
    /** @var $paymentInfoId int */
    private $paymentInfoId;
    
    /** @var $transactionId string */
    private $transactionId;
    
    /** @var $state int */
    private $state;
    
    /** @var $amount mixed */
    private $amount;
    
    /** @var $currency string */
    private $currency;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $paymentApiId int */
    private $paymentApiId;
    
    /** @var $request string|null */
    private $request;
    
    /** @var $reversed int */
    private $reversed;
    
    public function hasPaymentTransactionId(): bool
    {
        return isset($this->paymentTransactionId);
    }    

    /**
     * @return int
     */
    public function getPaymentTransactionId() : int
    {
        return $this->paymentTransactionId;
    }

    /**
     * @param int $paymentTransactionId
     */
    public function setPaymentTransactionId(int $paymentTransactionId)
    {
        $this->paymentTransactionId = $paymentTransactionId;
    }
    
    public function hasPaymentInfoId(): bool
    {
        return isset($this->paymentInfoId);
    }    

    /**
     * @return int
     */
    public function getPaymentInfoId() : int
    {
        return $this->paymentInfoId;
    }

    /**
     * @param int $paymentInfoId
     */
    public function setPaymentInfoId(int $paymentInfoId)
    {
        $this->paymentInfoId = $paymentInfoId;
    }
    
    public function hasTransactionId(): bool
    {
        return isset($this->transactionId);
    }    

    /**
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = $transactionId;
    }
    
    public function hasState(): bool
    {
        return isset($this->state);
    }    

    /**
     * @return int
     */
    public function getState() : int
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState(int $state)
    {
        $this->state = $state;
    }
    
    public function hasAmount(): bool
    {
        return isset($this->amount);
    }    

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
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
    
    public function hasRequest(): bool
    {
        return isset($this->request);
    }    

    /**
     * @return string|null
     */
    public function getRequest() : ?string
    {
        return $this->request;
    }

    /**
     * @param string|null $request
     */
    public function setRequest(?string $request)
    {
        $this->request = $request;
    }
    
    public function hasReversed(): bool
    {
        return isset($this->reversed);
    }    

    /**
     * @return int
     */
    public function getReversed() : int
    {
        return $this->reversed;
    }

    /**
     * @param int $reversed
     */
    public function setReversed(int $reversed)
    {
        $this->reversed = $reversed;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PaymentTransaction
    {
        return new PaymentTransaction();
    }
}