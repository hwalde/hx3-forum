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

class GeneratedPaymentTransactionRecord implements Record {
    
    /** @var $paymentTransactionId RecordValue */
    protected $paymentTransactionId;
    
    /** @var $paymentInfoId RecordValue */
    protected $paymentInfoId;
    
    /** @var $transactionId RecordValue */
    protected $transactionId;
    
    /** @var $state RecordValue */
    protected $state;
    
    /** @var $amount RecordValue */
    protected $amount;
    
    /** @var $currency RecordValue */
    protected $currency;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $paymentApiId RecordValue */
    protected $paymentApiId;
    
    /** @var $request RecordValue */
    protected $request;
    
    /** @var $reversed RecordValue */
    protected $reversed;

    public function __construct() {
		$this->paymentTransactionId = new RecordValue();
		$this->paymentInfoId = new RecordValue();
		$this->transactionId = new RecordValue();
		$this->state = new RecordValue();
		$this->amount = new RecordValue();
		$this->currency = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->paymentApiId = new RecordValue();
		$this->request = new RecordValue();
		$this->reversed = new RecordValue();
    }
    
    public function hasPaymentTransactionId(): bool
    {
        return $this->paymentTransactionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPaymentTransactionId() : int
    {
        return $this->paymentTransactionId->getValue();
    }

    /**
     * @param int $paymentTransactionId
     */
    public function setPaymentTransactionId(int $paymentTransactionId)
    {
        $this->paymentTransactionId->setChanged(true);
        $this->paymentTransactionId->setValue($paymentTransactionId);
    }
    
    public function hasPaymentInfoId(): bool
    {
        return $this->paymentInfoId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPaymentInfoId() : int
    {
        return $this->paymentInfoId->getValue();
    }

    /**
     * @param int $paymentInfoId
     */
    public function setPaymentInfoId(int $paymentInfoId)
    {
        $this->paymentInfoId->setChanged(true);
        $this->paymentInfoId->setValue($paymentInfoId);
    }
    
    public function hasTransactionId(): bool
    {
        return $this->transactionId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId->getValue();
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId->setChanged(true);
        $this->transactionId->setValue($transactionId);
    }
    
    public function hasState(): bool
    {
        return $this->state->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getState() : int
    {
        return $this->state->getValue();
    }

    /**
     * @param int $state
     */
    public function setState(int $state)
    {
        $this->state->setChanged(true);
        $this->state->setValue($state);
    }
    
    public function hasAmount(): bool
    {
        return $this->amount->hasBeenSet();
    }    

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount->getValue();
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount->setChanged(true);
        $this->amount->setValue($amount);
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
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
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
    
    public function hasRequest(): bool
    {
        return $this->request->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getRequest() : ?string
    {
        return $this->request->getValue();
    }

    /**
     * @param string|null $request
     */
    public function setRequest(?string $request)
    {
        $this->request->setChanged(true);
        $this->request->setValue($request);
    }
    
    public function hasReversed(): bool
    {
        return $this->reversed->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReversed() : int
    {
        return $this->reversed->getValue();
    }

    /**
     * @param int $reversed
     */
    public function setReversed(int $reversed)
    {
        $this->reversed->setChanged(true);
        $this->reversed->setValue($reversed);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PaymentTransaction
    {
        return new PaymentTransaction();
    }
}