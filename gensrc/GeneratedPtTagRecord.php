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

class GeneratedPtTagRecord implements Record {
    
    /** @var $tagId RecordValue */
    protected $tagId;
    
    /** @var $tagText RecordValue */
    protected $tagText;

    public function __construct() {
		$this->tagId = new RecordValue();
		$this->tagText = new RecordValue();
    }
    
    public function hasTagId(): bool
    {
        return $this->tagId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTagId() : int
    {
        return $this->tagId->getValue();
    }

    /**
     * @param int $tagId
     */
    public function setTagId(int $tagId)
    {
        $this->tagId->setChanged(true);
        $this->tagId->setValue($tagId);
    }
    
    public function hasTagText(): bool
    {
        return $this->tagText->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTagText() : string
    {
        return $this->tagText->getValue();
    }

    /**
     * @param string $tagText
     */
    public function setTagText(string $tagText)
    {
        $this->tagText->setChanged(true);
        $this->tagText->setValue($tagText);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtTag
    {
        return new PtTag();
    }
}