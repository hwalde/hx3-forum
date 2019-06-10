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

class GeneratedAlbumPictureRecord implements Record {
    
    /** @var $albumId RecordValue */
    protected $albumId;
    
    /** @var $pictureId RecordValue */
    protected $pictureId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->albumId = new RecordValue();
		$this->pictureId = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasAlbumId(): bool
    {
        return $this->albumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumId() : int
    {
        return $this->albumId->getValue();
    }

    /**
     * @param int $albumId
     */
    public function setAlbumId(int $albumId)
    {
        $this->albumId->setChanged(true);
        $this->albumId->setValue($albumId);
    }
    
    public function hasPictureId(): bool
    {
        return $this->pictureId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPictureId() : int
    {
        return $this->pictureId->getValue();
    }

    /**
     * @param int $pictureId
     */
    public function setPictureId(int $pictureId)
    {
        $this->pictureId->setChanged(true);
        $this->pictureId->setValue($pictureId);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AlbumPicture
    {
        return new AlbumPicture();
    }
}