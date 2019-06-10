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

class GeneratedPhraseRecord implements Record {
    
    /** @var $phraseId RecordValue */
    protected $phraseId;
    
    /** @var $languageId RecordValue */
    protected $languageId;
    
    /** @var $varName RecordValue */
    protected $varName;
    
    /** @var $text RecordValue */
    protected $text;
    
    /** @var $product RecordValue */
    protected $product;
    
    /** @var $fieldName RecordValue */
    protected $fieldName;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $version RecordValue */
    protected $version;

    public function __construct() {
		$this->phraseId = new RecordValue();
		$this->languageId = new RecordValue();
		$this->varName = new RecordValue();
		$this->text = new RecordValue();
		$this->product = new RecordValue();
		$this->fieldName = new RecordValue();
		$this->userName = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->version = new RecordValue();
    }
    
    public function hasPhraseId(): bool
    {
        return $this->phraseId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPhraseId() : int
    {
        return $this->phraseId->getValue();
    }

    /**
     * @param int $phraseId
     */
    public function setPhraseId(int $phraseId)
    {
        $this->phraseId->setChanged(true);
        $this->phraseId->setValue($phraseId);
    }
    
    public function hasLanguageId(): bool
    {
        return $this->languageId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId->getValue();
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId->setChanged(true);
        $this->languageId->setValue($languageId);
    }
    
    public function hasVarName(): bool
    {
        return $this->varName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName->getValue();
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName->setChanged(true);
        $this->varName->setValue($varName);
    }
    
    public function hasText(): bool
    {
        return $this->text->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text->getValue();
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text->setChanged(true);
        $this->text->setValue($text);
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
    
    public function hasFieldName(): bool
    {
        return $this->fieldName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName->getValue();
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName->setChanged(true);
        $this->fieldName->setValue($fieldName);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Phrase
    {
        return new Phrase();
    }
}