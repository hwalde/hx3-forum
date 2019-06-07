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

use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedAttachmentViewsRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $attachmentId int */
    protected $attachmentId;
    
    public function hasAttachmentId(): bool
    {
        return isset($this->attachmentId);
    }    

    /**
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId;
    }

    /**
     * @param int $attachmentId
     */
    public function setAttachmentId(int $attachmentId)
    {
        $this->attachmentId = $attachmentId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AttachmentViews
    {
        return new AttachmentViews();
    }
}