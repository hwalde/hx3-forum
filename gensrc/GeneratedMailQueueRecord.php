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

class GeneratedMailQueueRecord implements Record {
    
    /** @var $mailQueueId RecordValue */
    protected $mailQueueId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $toEmail RecordValue */
    protected $toEmail;
    
    /** @var $subject RecordValue */
    protected $subject;
    
    /** @var $message RecordValue */
    protected $message;
    
    /** @var $header RecordValue */
    protected $header;
    
    /** @var $fromEmail RecordValue */
    protected $fromEmail;

    public function __construct() {
		$this->mailQueueId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->toEmail = new RecordValue();
		$this->subject = new RecordValue();
		$this->message = new RecordValue();
		$this->header = new RecordValue();
		$this->fromEmail = new RecordValue();
    }
    
    public function hasMailQueueId(): bool
    {
        return $this->mailQueueId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMailQueueId() : int
    {
        return $this->mailQueueId->getValue();
    }

    /**
     * @param int $mailQueueId
     */
    public function setMailQueueId(int $mailQueueId)
    {
        $this->mailQueueId->setChanged(true);
        $this->mailQueueId->setValue($mailQueueId);
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
    
    public function hasToEmail(): bool
    {
        return $this->toEmail->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getToEmail() : string
    {
        return $this->toEmail->getValue();
    }

    /**
     * @param string $toEmail
     */
    public function setToEmail(string $toEmail)
    {
        $this->toEmail->setChanged(true);
        $this->toEmail->setValue($toEmail);
    }
    
    public function hasSubject(): bool
    {
        return $this->subject->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject->getValue();
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject)
    {
        $this->subject->setChanged(true);
        $this->subject->setValue($subject);
    }
    
    public function hasMessage(): bool
    {
        return $this->message->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message->getValue();
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message->setChanged(true);
        $this->message->setValue($message);
    }
    
    public function hasHeader(): bool
    {
        return $this->header->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHeader() : string
    {
        return $this->header->getValue();
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header)
    {
        $this->header->setChanged(true);
        $this->header->setValue($header);
    }
    
    public function hasFromEmail(): bool
    {
        return $this->fromEmail->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFromEmail() : string
    {
        return $this->fromEmail->getValue();
    }

    /**
     * @param string $fromEmail
     */
    public function setFromEmail(string $fromEmail)
    {
        $this->fromEmail->setChanged(true);
        $this->fromEmail->setValue($fromEmail);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): MailQueue
    {
        return new MailQueue();
    }
}