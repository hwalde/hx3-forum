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

class GeneratedAdminUtilRecord implements Record {
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $text RecordValue */
    protected $text;

    public function __construct() {
		$this->title = new RecordValue();
		$this->text = new RecordValue();
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AdminUtil
    {
        return new AdminUtil();
    }
}