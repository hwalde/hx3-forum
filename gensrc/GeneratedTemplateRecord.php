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

class GeneratedTemplateRecord implements Record {
    
    /** @var $templateId int */
    private $templateId;
    
    /** @var $styleId int */
    private $styleId;
    
    /** @var $title string */
    private $title;
    
    /** @var $template string */
    private $template;
    
    /** @var $templateUn string */
    private $templateUn;
    
    /** @var $templateType string */
    private $templateType;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $userName string */
    private $userName;
    
    /** @var $version string */
    private $version;
    
    /** @var $product string */
    private $product;
    
    public function hasTemplateId(): bool
    {
        return isset($this->templateId);
    }    

    /**
     * @return int
     */
    public function getTemplateId() : int
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     */
    public function setTemplateId(int $templateId)
    {
        $this->templateId = $templateId;
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
    
    public function hasTemplateUn(): bool
    {
        return isset($this->templateUn);
    }    

    /**
     * @return string
     */
    public function getTemplateUn() : string
    {
        return $this->templateUn;
    }

    /**
     * @param string $templateUn
     */
    public function setTemplateUn(string $templateUn)
    {
        $this->templateUn = $templateUn;
    }
    
    public function hasTemplateType(): bool
    {
        return isset($this->templateType);
    }    

    /**
     * @return string
     */
    public function getTemplateType() : string
    {
        return $this->templateType;
    }

    /**
     * @param string $templateType
     */
    public function setTemplateType(string $templateType)
    {
        $this->templateType = $templateType;
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
    
    public function hasProduct(): bool
    {
        return isset($this->product);
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product = $product;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Template
    {
        return new Template();
    }
}