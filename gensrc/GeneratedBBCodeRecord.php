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

class GeneratedBBCodeRecord implements Record {
    
    /** @var $bbCodeId RecordValue */
    protected $bbCodeId;
    
    /** @var $bbBodeTag RecordValue */
    protected $bbBodeTag;
    
    /** @var $bbCodeReplacement RecordValue */
    protected $bbCodeReplacement;
    
    /** @var $bbCodeExample RecordValue */
    protected $bbCodeExample;
    
    /** @var $bbCodeExplanation RecordValue */
    protected $bbCodeExplanation;
    
    /** @var $twoParams RecordValue */
    protected $twoParams;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $buttonImage RecordValue */
    protected $buttonImage;
    
    /** @var $options RecordValue */
    protected $options;

    public function __construct() {
		$this->bbCodeId = new RecordValue();
		$this->bbBodeTag = new RecordValue();
		$this->bbCodeReplacement = new RecordValue();
		$this->bbCodeExample = new RecordValue();
		$this->bbCodeExplanation = new RecordValue();
		$this->twoParams = new RecordValue();
		$this->title = new RecordValue();
		$this->buttonImage = new RecordValue();
		$this->options = new RecordValue();
    }
    
    public function hasBbCodeId(): bool
    {
        return $this->bbCodeId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBbCodeId() : int
    {
        return $this->bbCodeId->getValue();
    }

    /**
     * @param int $bbCodeId
     */
    public function setBbCodeId(int $bbCodeId)
    {
        $this->bbCodeId->setChanged(true);
        $this->bbCodeId->setValue($bbCodeId);
    }
    
    public function hasBbBodeTag(): bool
    {
        return $this->bbBodeTag->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBbBodeTag() : string
    {
        return $this->bbBodeTag->getValue();
    }

    /**
     * @param string $bbBodeTag
     */
    public function setBbBodeTag(string $bbBodeTag)
    {
        $this->bbBodeTag->setChanged(true);
        $this->bbBodeTag->setValue($bbBodeTag);
    }
    
    public function hasBbCodeReplacement(): bool
    {
        return $this->bbCodeReplacement->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBbCodeReplacement() : string
    {
        return $this->bbCodeReplacement->getValue();
    }

    /**
     * @param string $bbCodeReplacement
     */
    public function setBbCodeReplacement(string $bbCodeReplacement)
    {
        $this->bbCodeReplacement->setChanged(true);
        $this->bbCodeReplacement->setValue($bbCodeReplacement);
    }
    
    public function hasBbCodeExample(): bool
    {
        return $this->bbCodeExample->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBbCodeExample() : string
    {
        return $this->bbCodeExample->getValue();
    }

    /**
     * @param string $bbCodeExample
     */
    public function setBbCodeExample(string $bbCodeExample)
    {
        $this->bbCodeExample->setChanged(true);
        $this->bbCodeExample->setValue($bbCodeExample);
    }
    
    public function hasBbCodeExplanation(): bool
    {
        return $this->bbCodeExplanation->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBbCodeExplanation() : string
    {
        return $this->bbCodeExplanation->getValue();
    }

    /**
     * @param string $bbCodeExplanation
     */
    public function setBbCodeExplanation(string $bbCodeExplanation)
    {
        $this->bbCodeExplanation->setChanged(true);
        $this->bbCodeExplanation->setValue($bbCodeExplanation);
    }
    
    public function hasTwoParams(): bool
    {
        return $this->twoParams->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTwoParams() : int
    {
        return $this->twoParams->getValue();
    }

    /**
     * @param int $twoParams
     */
    public function setTwoParams(int $twoParams)
    {
        $this->twoParams->setChanged(true);
        $this->twoParams->setValue($twoParams);
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
    
    public function hasButtonImage(): bool
    {
        return $this->buttonImage->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getButtonImage() : string
    {
        return $this->buttonImage->getValue();
    }

    /**
     * @param string $buttonImage
     */
    public function setButtonImage(string $buttonImage)
    {
        $this->buttonImage->setChanged(true);
        $this->buttonImage->setValue($buttonImage);
    }
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options->getValue();
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): BBCode
    {
        return new BBCode();
    }
}