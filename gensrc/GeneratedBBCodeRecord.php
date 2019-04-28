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

class GeneratedBBCodeRecord implements Record {
    
    /** @var $bbCodeId int */
    private $bbCodeId;
    
    /** @var $bbBodeTag string */
    private $bbBodeTag;
    
    /** @var $bbCodeReplacement string */
    private $bbCodeReplacement;
    
    /** @var $bbCodeExample string */
    private $bbCodeExample;
    
    /** @var $bbCodeExplanation string */
    private $bbCodeExplanation;
    
    /** @var $twoParams int */
    private $twoParams;
    
    /** @var $title string */
    private $title;
    
    /** @var $buttonImage string */
    private $buttonImage;
    
    /** @var $options int */
    private $options;
    
    public function hasBbCodeId(): bool
    {
        return isset($this->bbCodeId);
    }    

    /**
     * @return int
     */
    public function getBbCodeId() : int
    {
        return $this->bbCodeId;
    }

    /**
     * @param int $bbCodeId
     */
    public function setBbCodeId(int $bbCodeId)
    {
        $this->bbCodeId = $bbCodeId;
    }
    
    public function hasBbBodeTag(): bool
    {
        return isset($this->bbBodeTag);
    }    

    /**
     * @return string
     */
    public function getBbBodeTag() : string
    {
        return $this->bbBodeTag;
    }

    /**
     * @param string $bbBodeTag
     */
    public function setBbBodeTag(string $bbBodeTag)
    {
        $this->bbBodeTag = $bbBodeTag;
    }
    
    public function hasBbCodeReplacement(): bool
    {
        return isset($this->bbCodeReplacement);
    }    

    /**
     * @return string
     */
    public function getBbCodeReplacement() : string
    {
        return $this->bbCodeReplacement;
    }

    /**
     * @param string $bbCodeReplacement
     */
    public function setBbCodeReplacement(string $bbCodeReplacement)
    {
        $this->bbCodeReplacement = $bbCodeReplacement;
    }
    
    public function hasBbCodeExample(): bool
    {
        return isset($this->bbCodeExample);
    }    

    /**
     * @return string
     */
    public function getBbCodeExample() : string
    {
        return $this->bbCodeExample;
    }

    /**
     * @param string $bbCodeExample
     */
    public function setBbCodeExample(string $bbCodeExample)
    {
        $this->bbCodeExample = $bbCodeExample;
    }
    
    public function hasBbCodeExplanation(): bool
    {
        return isset($this->bbCodeExplanation);
    }    

    /**
     * @return string
     */
    public function getBbCodeExplanation() : string
    {
        return $this->bbCodeExplanation;
    }

    /**
     * @param string $bbCodeExplanation
     */
    public function setBbCodeExplanation(string $bbCodeExplanation)
    {
        $this->bbCodeExplanation = $bbCodeExplanation;
    }
    
    public function hasTwoParams(): bool
    {
        return isset($this->twoParams);
    }    

    /**
     * @return int
     */
    public function getTwoParams() : int
    {
        return $this->twoParams;
    }

    /**
     * @param int $twoParams
     */
    public function setTwoParams(int $twoParams)
    {
        $this->twoParams = $twoParams;
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
    
    public function hasButtonImage(): bool
    {
        return isset($this->buttonImage);
    }    

    /**
     * @return string
     */
    public function getButtonImage() : string
    {
        return $this->buttonImage;
    }

    /**
     * @param string $buttonImage
     */
    public function setButtonImage(string $buttonImage)
    {
        $this->buttonImage = $buttonImage;
    }
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options = $options;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): BBCode
    {
        return new BBCode();
    }
}