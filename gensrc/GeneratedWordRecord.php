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

class GeneratedWordRecord implements Record {
    
    /** @var $wordId RecordValue */
    protected $wordId;
    
    /** @var $title RecordValue */
    protected $title;

    public function __construct() {
		$this->wordId = new RecordValue();
		$this->title = new RecordValue();
    }
    
    public function hasWordId(): bool
    {
        return $this->wordId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWordId() : int
    {
        return $this->wordId->getValue();
    }

    /**
     * @param int $wordId
     */
    public function setWordId(int $wordId)
    {
        $this->wordId->setChanged(true);
        $this->wordId->setValue($wordId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Word
    {
        return new Word();
    }
}