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

class GeneratedDataStoreRecord implements Record {
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $data RecordValue */
    protected $data;
    
    /** @var $unSerialize RecordValue */
    protected $unSerialize;

    public function __construct() {
		$this->title = new RecordValue();
		$this->data = new RecordValue();
		$this->unSerialize = new RecordValue();
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
    
    public function hasData(): bool
    {
        return $this->data->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getData() : string
    {
        return $this->data->getValue();
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data->setChanged(true);
        $this->data->setValue($data);
    }
    
    public function hasUnSerialize(): bool
    {
        return $this->unSerialize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUnSerialize() : int
    {
        return $this->unSerialize->getValue();
    }

    /**
     * @param int $unSerialize
     */
    public function setUnSerialize(int $unSerialize)
    {
        $this->unSerialize->setChanged(true);
        $this->unSerialize->setValue($unSerialize);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): DataStore
    {
        return new DataStore();
    }
}