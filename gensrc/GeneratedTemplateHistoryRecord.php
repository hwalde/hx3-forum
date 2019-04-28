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

class GeneratedTemplateHistoryRecord implements Record {
    
    /** @var $templateHistoryId int */
    private $templateHistoryId;
    
    /** @var $styleId int */
    private $styleId;
    
    /** @var $title string */
    private $title;
    
    /** @var $template string */
    private $template;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $userName string */
    private $userName;
    
    /** @var $version string */
    private $version;
    
    /** @var $comment string */
    private $comment;
    
    public function hasTemplateHistoryId(): bool
    {
        return isset($this->templateHistoryId);
    }    

    /**
     * @return int
     */
    public function getTemplateHistoryId() : int
    {
        return $this->templateHistoryId;
    }

    /**
     * @param int $templateHistoryId
     */
    public function setTemplateHistoryId(int $templateHistoryId)
    {
        $this->templateHistoryId = $templateHistoryId;
    }
    
    public function hasStyleId(): bool
    {
        return isset($this->styleId);
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId;
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId = $styleId;
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
    
    public function hasTemplate(): bool
    {
        return isset($this->template);
    }    

    /**
     * @return string
     */
    public function getTemplate() : string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template)
    {
        $this->template = $template;
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
    
    public function hasUserName(): bool
    {
        return isset($this->userName);
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }
    
    public function hasVersion(): bool
    {
        return isset($this->version);
    }    

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }
    
    public function hasComment(): bool
    {
        return isset($this->comment);
    }    

    /**
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TemplateHistory
    {
        return new TemplateHistory();
    }
}