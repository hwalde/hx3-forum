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

class GeneratedSigParsedRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $languageId RecordValue */
    protected $languageId;
    
    /** @var $signatureParsed RecordValue */
    protected $signatureParsed;
    
    /** @var $hasImages RecordValue */
    protected $hasImages;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->styleId = new RecordValue();
		$this->languageId = new RecordValue();
		$this->signatureParsed = new RecordValue();
		$this->hasImages = new RecordValue();
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
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
    
    public function hasSignatureParsed(): bool
    {
        return $this->signatureParsed->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getSignatureParsed() : ?string
    {
        return $this->signatureParsed->getValue();
    }

    /**
     * @param string|null $signatureParsed
     */
    public function setSignatureParsed(?string $signatureParsed)
    {
        $this->signatureParsed->setChanged(true);
        $this->signatureParsed->setValue($signatureParsed);
    }
    
    public function hasHasImages(): bool
    {
        return $this->hasImages->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHasImages() : int
    {
        return $this->hasImages->getValue();
    }

    /**
     * @param int $hasImages
     */
    public function setHasImages(int $hasImages)
    {
        $this->hasImages->setChanged(true);
        $this->hasImages->setValue($hasImages);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SigParsed
    {
        return new SigParsed();
    }
}