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

class GeneratedTemplateRecord implements Record {
    
    /** @var $templateId RecordValue */
    protected $templateId;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $template RecordValue */
    protected $template;
    
    /** @var $templateUn RecordValue */
    protected $templateUn;
    
    /** @var $templateType RecordValue */
    protected $templateType;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $version RecordValue */
    protected $version;
    
    /** @var $product RecordValue */
    protected $product;

    public function __construct() {
		$this->templateId = new RecordValue();
		$this->styleId = new RecordValue();
		$this->title = new RecordValue();
		$this->template = new RecordValue();
		$this->templateUn = new RecordValue();
		$this->templateType = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->userName = new RecordValue();
		$this->version = new RecordValue();
		$this->product = new RecordValue();
    }
    
    public function hasTemplateId(): bool
    {
        return $this->templateId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTemplateId() : int
    {
        return $this->templateId->getValue();
    }

    /**
     * @param int $templateId
     */
    public function setTemplateId(int $templateId)
    {
        $this->templateId->setChanged(true);
        $this->templateId->setValue($templateId);
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
    
    public function hasTemplateUn(): bool
    {
        return $this->templateUn->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTemplateUn() : string
    {
        return $this->templateUn->getValue();
    }

    /**
     * @param string $templateUn
     */
    public function setTemplateUn(string $templateUn)
    {
        $this->templateUn->setChanged(true);
        $this->templateUn->setValue($templateUn);
    }
    
    public function hasTemplateType(): bool
    {
        return $this->templateType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTemplateType() : string
    {
        return $this->templateType->getValue();
    }

    /**
     * @param string $templateType
     */
    public function setTemplateType(string $templateType)
    {
        $this->templateType->setChanged(true);
        $this->templateType->setValue($templateType);
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
    
    public function hasProduct(): bool
    {
        return $this->product->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product->getValue();
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product->setChanged(true);
        $this->product->setValue($product);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Template
    {
        return new Template();
    }
}