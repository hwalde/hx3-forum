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

class GeneratedTemplateHistoryRecord implements Record {
    
    /** @var $templateHistoryId RecordValue */
    protected $templateHistoryId;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $template RecordValue */
    protected $template;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $version RecordValue */
    protected $version;
    
    /** @var $comment RecordValue */
    protected $comment;

    public function __construct() {
		$this->templateHistoryId = new RecordValue();
		$this->styleId = new RecordValue();
		$this->title = new RecordValue();
		$this->template = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->userName = new RecordValue();
		$this->version = new RecordValue();
		$this->comment = new RecordValue();
    }
    
    public function hasTemplateHistoryId(): bool
    {
        return $this->templateHistoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTemplateHistoryId() : int
    {
        return $this->templateHistoryId->getValue();
    }

    /**
     * @param int $templateHistoryId
     */
    public function setTemplateHistoryId(int $templateHistoryId)
    {
        $this->templateHistoryId->setChanged(true);
        $this->templateHistoryId->setValue($templateHistoryId);
    }
    
    public function hasStyleId(): bool
    {
        return $this->styleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId->getValue();
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId->setChanged(true);
        $this->styleId->setValue($styleId);
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
    
    public function hasTemplate(): bool
    {
        return $this->template->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTemplate() : string
    {
        return $this->template->getValue();
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template)
    {
        $this->template->setChanged(true);
        $this->template->setValue($template);
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
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
    }
    
    public function hasVersion(): bool
    {
        return $this->version->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version->getValue();
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version->setChanged(true);
        $this->version->setValue($version);
    }
    
    public function hasComment(): bool
    {
        return $this->comment->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment->getValue();
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment->setChanged(true);
        $this->comment->setValue($comment);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TemplateHistory
    {
        return new TemplateHistory();
    }
}