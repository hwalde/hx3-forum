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

class GeneratedSigParsedRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $styleId int */
    private $styleId;
    
    /** @var $languageId int */
    private $languageId;
    
    /** @var $signatureParsed string|null */
    private $signatureParsed;
    
    /** @var $hasImages int */
    private $hasImages;
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
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
    
    public function hasLanguageId(): bool
    {
        return isset($this->languageId);
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId;
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId = $languageId;
    }
    
    public function hasSignatureParsed(): bool
    {
        return isset($this->signatureParsed);
    }    

    /**
     * @return string|null
     */
    public function getSignatureParsed() : ?string
    {
        return $this->signatureParsed;
    }

    /**
     * @param string|null $signatureParsed
     */
    public function setSignatureParsed(?string $signatureParsed)
    {
        $this->signatureParsed = $signatureParsed;
    }
    
    public function hasHasImages(): bool
    {
        return isset($this->hasImages);
    }    

    /**
     * @return int
     */
    public function getHasImages() : int
    {
        return $this->hasImages;
    }

    /**
     * @param int $hasImages
     */
    public function setHasImages(int $hasImages)
    {
        $this->hasImages = $hasImages;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SigParsed
    {
        return new SigParsed();
    }
}