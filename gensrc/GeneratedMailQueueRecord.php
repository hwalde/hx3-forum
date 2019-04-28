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

class GeneratedMailQueueRecord implements Record {
    
    /** @var $mailQueueId int */
    private $mailQueueId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $toEmail string */
    private $toEmail;
    
    /** @var $subject string */
    private $subject;
    
    /** @var $message string */
    private $message;
    
    /** @var $header string */
    private $header;
    
    /** @var $fromEmail string */
    private $fromEmail;
    
    public function hasMailQueueId(): bool
    {
        return isset($this->mailQueueId);
    }    

    /**
     * @return int
     */
    public function getMailQueueId() : int
    {
        return $this->mailQueueId;
    }

    /**
     * @param int $mailQueueId
     */
    public function setMailQueueId(int $mailQueueId)
    {
        $this->mailQueueId = $mailQueueId;
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
    
    public function hasToEmail(): bool
    {
        return isset($this->toEmail);
    }    

    /**
     * @return string
     */
    public function getToEmail() : string
    {
        return $this->toEmail;
    }

    /**
     * @param string $toEmail
     */
    public function setToEmail(string $toEmail)
    {
        $this->toEmail = $toEmail;
    }
    
    public function hasSubject(): bool
    {
        return isset($this->subject);
    }    

    /**
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }
    
    public function hasMessage(): bool
    {
        return isset($this->message);
    }    

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }
    
    public function hasHeader(): bool
    {
        return isset($this->header);
    }    

    /**
     * @return string
     */
    public function getHeader() : string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header)
    {
        $this->header = $header;
    }
    
    public function hasFromEmail(): bool
    {
        return isset($this->fromEmail);
    }    

    /**
     * @return string
     */
    public function getFromEmail() : string
    {
        return $this->fromEmail;
    }

    /**
     * @param string $fromEmail
     */
    public function setFromEmail(string $fromEmail)
    {
        $this->fromEmail = $fromEmail;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): MailQueue
    {
        return new MailQueue();
    }
}