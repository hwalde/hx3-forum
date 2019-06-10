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

class GeneratedVbSeoLinkBackRecord implements Record {
    
    /** @var $tId RecordValue */
    protected $tId;
    
    /** @var $tTime RecordValue */
    protected $tTime;
    
    /** @var $tSrcUrl RecordValue */
    protected $tSrcUrl;
    
    /** @var $tDestUrl RecordValue */
    protected $tDestUrl;
    
    /** @var $tType RecordValue */
    protected $tType;
    
    /** @var $tPostId RecordValue */
    protected $tPostId;
    
    /** @var $tPostCount RecordValue */
    protected $tPostCount;
    
    /** @var $tThreadId RecordValue */
    protected $tThreadId;
    
    /** @var $tPage RecordValue */
    protected $tPage;
    
    /** @var $tTitle RecordValue */
    protected $tTitle;
    
    /** @var $tText RecordValue */
    protected $tText;
    
    /** @var $tApprove RecordValue */
    protected $tApprove;
    
    /** @var $tWait RecordValue */
    protected $tWait;
    
    /** @var $tIncoming RecordValue */
    protected $tIncoming;
    
    /** @var $tDeleted RecordValue */
    protected $tDeleted;
    
    /** @var $tHits RecordValue */
    protected $tHits;

    public function __construct() {
		$this->tId = new RecordValue();
		$this->tTime = new RecordValue();
		$this->tSrcUrl = new RecordValue();
		$this->tDestUrl = new RecordValue();
		$this->tType = new RecordValue();
		$this->tPostId = new RecordValue();
		$this->tPostCount = new RecordValue();
		$this->tThreadId = new RecordValue();
		$this->tPage = new RecordValue();
		$this->tTitle = new RecordValue();
		$this->tText = new RecordValue();
		$this->tApprove = new RecordValue();
		$this->tWait = new RecordValue();
		$this->tIncoming = new RecordValue();
		$this->tDeleted = new RecordValue();
		$this->tHits = new RecordValue();
    }
    
    public function hasTId(): bool
    {
        return $this->tId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTId() : int
    {
        return $this->tId->getValue();
    }

    /**
     * @param int $tId
     */
    public function setTId(int $tId)
    {
        $this->tId->setChanged(true);
        $this->tId->setValue($tId);
    }
    
    public function hasTTime(): bool
    {
        return $this->tTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTTime() : int
    {
        return $this->tTime->getValue();
    }

    /**
     * @param int $tTime
     */
    public function setTTime(int $tTime)
    {
        $this->tTime->setChanged(true);
        $this->tTime->setValue($tTime);
    }
    
    public function hasTSrcUrl(): bool
    {
        return $this->tSrcUrl->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTSrcUrl() : string
    {
        return $this->tSrcUrl->getValue();
    }

    /**
     * @param string $tSrcUrl
     */
    public function setTSrcUrl(string $tSrcUrl)
    {
        $this->tSrcUrl->setChanged(true);
        $this->tSrcUrl->setValue($tSrcUrl);
    }
    
    public function hasTDestUrl(): bool
    {
        return $this->tDestUrl->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTDestUrl() : string
    {
        return $this->tDestUrl->getValue();
    }

    /**
     * @param string $tDestUrl
     */
    public function setTDestUrl(string $tDestUrl)
    {
        $this->tDestUrl->setChanged(true);
        $this->tDestUrl->setValue($tDestUrl);
    }
    
    public function hasTType(): bool
    {
        return $this->tType->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTType() : int
    {
        return $this->tType->getValue();
    }

    /**
     * @param int $tType
     */
    public function setTType(int $tType)
    {
        $this->tType->setChanged(true);
        $this->tType->setValue($tType);
    }
    
    public function hasTPostId(): bool
    {
        return $this->tPostId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTPostId() : int
    {
        return $this->tPostId->getValue();
    }

    /**
     * @param int $tPostId
     */
    public function setTPostId(int $tPostId)
    {
        $this->tPostId->setChanged(true);
        $this->tPostId->setValue($tPostId);
    }
    
    public function hasTPostCount(): bool
    {
        return $this->tPostCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTPostCount() : int
    {
        return $this->tPostCount->getValue();
    }

    /**
     * @param int $tPostCount
     */
    public function setTPostCount(int $tPostCount)
    {
        $this->tPostCount->setChanged(true);
        $this->tPostCount->setValue($tPostCount);
    }
    
    public function hasTThreadId(): bool
    {
        return $this->tThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTThreadId() : int
    {
        return $this->tThreadId->getValue();
    }

    /**
     * @param int $tThreadId
     */
    public function setTThreadId(int $tThreadId)
    {
        $this->tThreadId->setChanged(true);
        $this->tThreadId->setValue($tThreadId);
    }
    
    public function hasTPage(): bool
    {
        return $this->tPage->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTPage() : int
    {
        return $this->tPage->getValue();
    }

    /**
     * @param int $tPage
     */
    public function setTPage(int $tPage)
    {
        $this->tPage->setChanged(true);
        $this->tPage->setValue($tPage);
    }
    
    public function hasTTitle(): bool
    {
        return $this->tTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTTitle() : string
    {
        return $this->tTitle->getValue();
    }

    /**
     * @param string $tTitle
     */
    public function setTTitle(string $tTitle)
    {
        $this->tTitle->setChanged(true);
        $this->tTitle->setValue($tTitle);
    }
    
    public function hasTText(): bool
    {
        return $this->tText->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTText() : string
    {
        return $this->tText->getValue();
    }

    /**
     * @param string $tText
     */
    public function setTText(string $tText)
    {
        $this->tText->setChanged(true);
        $this->tText->setValue($tText);
    }
    
    public function hasTApprove(): bool
    {
        return $this->tApprove->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTApprove() : int
    {
        return $this->tApprove->getValue();
    }

    /**
     * @param int $tApprove
     */
    public function setTApprove(int $tApprove)
    {
        $this->tApprove->setChanged(true);
        $this->tApprove->setValue($tApprove);
    }
    
    public function hasTWait(): bool
    {
        return $this->tWait->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTWait() : int
    {
        return $this->tWait->getValue();
    }

    /**
     * @param int $tWait
     */
    public function setTWait(int $tWait)
    {
        $this->tWait->setChanged(true);
        $this->tWait->setValue($tWait);
    }
    
    public function hasTIncoming(): bool
    {
        return $this->tIncoming->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTIncoming() : int
    {
        return $this->tIncoming->getValue();
    }

    /**
     * @param int $tIncoming
     */
    public function setTIncoming(int $tIncoming)
    {
        $this->tIncoming->setChanged(true);
        $this->tIncoming->setValue($tIncoming);
    }
    
    public function hasTDeleted(): bool
    {
        return $this->tDeleted->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTDeleted() : int
    {
        return $this->tDeleted->getValue();
    }

    /**
     * @param int $tDeleted
     */
    public function setTDeleted(int $tDeleted)
    {
        $this->tDeleted->setChanged(true);
        $this->tDeleted->setValue($tDeleted);
    }
    
    public function hasTHits(): bool
    {
        return $this->tHits->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTHits() : int
    {
        return $this->tHits->getValue();
    }

    /**
     * @param int $tHits
     */
    public function setTHits(int $tHits)
    {
        $this->tHits->setChanged(true);
        $this->tHits->setValue($tHits);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbSeoLinkBack
    {
        return new VbSeoLinkBack();
    }
}