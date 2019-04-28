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

class GeneratedSocialGroupPictureRecord implements Record {
    
    /** @var $groupId int */
    private $groupId;
    
    /** @var $pictureId int */
    private $pictureId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    public function hasGroupId(): bool
    {
        return isset($this->groupId);
    }    

    /**
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->groupId = $groupId;
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
    public function __getModel(): SocialGroupPicture
    {
        return new SocialGroupPicture();
    }
}