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

class GeneratedPostParsedRecord implements Record {
    
    /** @var $postId int */
    protected $postId;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $hasImages int */
    protected $hasImages;
    
    /** @var $pageTextHtml string */
    protected $pageTextHtml;
    
    /** @var $styleId int */
    protected $styleId;
    
    /** @var $languageId int */
    protected $languageId;
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
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
    
    public function hasPageTextHtml(): bool
    {
        return isset($this->pageTextHtml);
    }    

    /**
     * @return string
     */
    public function getPageTextHtml() : string
    {
        return $this->pageTextHtml;
    }

    /**
     * @param string $pageTextHtml
     */
    public function setPageTextHtml(string $pageTextHtml)
    {
        $this->pageTextHtml = $pageTextHtml;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostParsed
    {
        return new PostParsed();
    }
}