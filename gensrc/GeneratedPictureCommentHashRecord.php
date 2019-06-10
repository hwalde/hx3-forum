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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedPictureCommentHashRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $postUserId RecordValue */
    protected $postUserId;
    
    /** @var $pictureId RecordValue */
    protected $pictureId;
    
    /** @var $dupeHash RecordValue */
    protected $dupeHash;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->postUserId = new RecordValue();
		$this->pictureId = new RecordValue();
		$this->dupeHash = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasPostUserId(): bool
    {
        return $this->postUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostUserId() : int
    {
        return $this->postUserId->getValue();
    }

    /**
     * @param int $postUserId
     */
    public function setPostUserId(int $postUserId)
    {
        $this->postUserId->setChanged(true);
        $this->postUserId->setValue($postUserId);
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
    
    public function hasDupeHash(): bool
    {
        return $this->dupeHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDupeHash() : string
    {
        return $this->dupeHash->getValue();
    }

    /**
     * @param string $dupeHash
     */
    public function setDupeHash(string $dupeHash)
    {
        $this->dupeHash->setChanged(true);
        $this->dupeHash->setValue($dupeHash);
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
    public function __getModel(): PictureCommentHash
    {
        return new PictureCommentHash();
    }
}