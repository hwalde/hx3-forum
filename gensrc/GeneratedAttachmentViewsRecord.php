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

class GeneratedAttachmentViewsRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $attachmentId RecordValue */
    protected $attachmentId;

    public function __construct() {
		$this->attachmentId = new RecordValue();
    }
    
    public function hasAttachmentId(): bool
    {
        return $this->attachmentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId->getValue();
    }

    /**
     * @param int $attachmentId
     */
    public function setAttachmentId(int $attachmentId)
    {
        $this->attachmentId->setChanged(true);
        $this->attachmentId->setValue($attachmentId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AttachmentViews
    {
        return new AttachmentViews();
    }
}