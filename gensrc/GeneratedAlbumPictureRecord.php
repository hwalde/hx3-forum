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

class GeneratedAlbumPictureRecord implements Record {
    
    /** @var $albumId int */
    private $albumId;
    
    /** @var $pictureId int */
    private $pictureId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    public function hasAlbumId(): bool
    {
        return isset($this->albumId);
    }    

    /**
     * @return int
     */
    public function getAlbumId() : int
    {
        return $this->albumId;
    }

    /**
     * @param int $albumId
     */
    public function setAlbumId(int $albumId)
    {
        $this->albumId = $albumId;
    }
    
    public function hasPictureId(): bool
    {
        return isset($this->pictureId);
    }    

    /**
     * @return int
     */
    public function getPictureId() : int
    {
        return $this->pictureId;
    }

    /**
     * @param int $pictureId
     */
    public function setPictureId(int $pictureId)
    {
        $this->pictureId = $pictureId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AlbumPicture
    {
        return new AlbumPicture();
    }
}