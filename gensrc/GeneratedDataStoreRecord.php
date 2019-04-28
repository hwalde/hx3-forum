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

class GeneratedDataStoreRecord implements Record {
    
    /** @var $title string */
    private $title;
    
    /** @var $data string */
    private $data;
    
    /** @var $unSerialize int */
    private $unSerialize;
    
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
    
    public function hasData(): bool
    {
        return isset($this->data);
    }    

    /**
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }
    
    public function hasUnSerialize(): bool
    {
        return isset($this->unSerialize);
    }    

    /**
     * @return int
     */
    public function getUnSerialize() : int
    {
        return $this->unSerialize;
    }

    /**
     * @param int $unSerialize
     */
    public function setUnSerialize(int $unSerialize)
    {
        $this->unSerialize = $unSerialize;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): DataStore
    {
        return new DataStore();
    }
}