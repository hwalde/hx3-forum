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

class GeneratedVbSeoLinkBackRecord implements Record {
    
    /** @var $tId int */
    private $tId;
    
    /** @var $tTime int */
    private $tTime;
    
    /** @var $tSrcUrl string */
    private $tSrcUrl;
    
    /** @var $tDestUrl string */
    private $tDestUrl;
    
    /** @var $tType int */
    private $tType;
    
    /** @var $tPostId int */
    private $tPostId;
    
    /** @var $tPostCount int */
    private $tPostCount;
    
    /** @var $tThreadId int */
    private $tThreadId;
    
    /** @var $tPage int */
    private $tPage;
    
    /** @var $tTitle string */
    private $tTitle;
    
    /** @var $tText string */
    private $tText;
    
    /** @var $tApprove int */
    private $tApprove;
    
    /** @var $tWait int */
    private $tWait;
    
    /** @var $tIncoming int */
    private $tIncoming;
    
    /** @var $tDeleted int */
    private $tDeleted;
    
    /** @var $tHits int */
    private $tHits;
    
    public function hasTId(): bool
    {
        return isset($this->tId);
    }    

    /**
     * @return int
     */
    public function getTId() : int
    {
        return $this->tId;
    }

    /**
     * @param int $tId
     */
    public function setTId(int $tId)
    {
        $this->tId = $tId;
    }
    
    public function hasTTime(): bool
    {
        return isset($this->tTime);
    }    

    /**
     * @return int
     */
    public function getTTime() : int
    {
        return $this->tTime;
    }

    /**
     * @param int $tTime
     */
    public function setTTime(int $tTime)
    {
        $this->tTime = $tTime;
    }
    
    public function hasTSrcUrl(): bool
    {
        return isset($this->tSrcUrl);
    }    

    /**
     * @return string
     */
    public function getTSrcUrl() : string
    {
        return $this->tSrcUrl;
    }

    /**
     * @param string $tSrcUrl
     */
    public function setTSrcUrl(string $tSrcUrl)
    {
        $this->tSrcUrl = $tSrcUrl;
    }
    
    public function hasTDestUrl(): bool
    {
        return isset($this->tDestUrl);
    }    

    /**
     * @return string
     */
    public function getTDestUrl() : string
    {
        return $this->tDestUrl;
    }

    /**
     * @param string $tDestUrl
     */
    public function setTDestUrl(string $tDestUrl)
    {
        $this->tDestUrl = $tDestUrl;
    }
    
    public function hasTType(): bool
    {
        return isset($this->tType);
    }    

    /**
     * @return int
     */
    public function getTType() : int
    {
        return $this->tType;
    }

    /**
     * @param int $tType
     */
    public function setTType(int $tType)
    {
        $this->tType = $tType;
    }
    
    public function hasTPostId(): bool
    {
        return isset($this->tPostId);
    }    

    /**
     * @return int
     */
    public function getTPostId() : int
    {
        return $this->tPostId;
    }

    /**
     * @param int $tPostId
     */
    public function setTPostId(int $tPostId)
    {
        $this->tPostId = $tPostId;
    }
    
    public function hasTPostCount(): bool
    {
        return isset($this->tPostCount);
    }    

    /**
     * @return int
     */
    public function getTPostCount() : int
    {
        return $this->tPostCount;
    }

    /**
     * @param int $tPostCount
     */
    public function setTPostCount(int $tPostCount)
    {
        $this->tPostCount = $tPostCount;
    }
    
    public function hasTThreadId(): bool
    {
        return isset($this->tThreadId);
    }    

    /**
     * @return int
     */
    public function getTThreadId() : int
    {
        return $this->tThreadId;
    }

    /**
     * @param int $tThreadId
     */
    public function setTThreadId(int $tThreadId)
    {
        $this->tThreadId = $tThreadId;
    }
    
    public function hasTPage(): bool
    {
        return isset($this->tPage);
    }    

    /**
     * @return int
     */
    public function getTPage() : int
    {
        return $this->tPage;
    }

    /**
     * @param int $tPage
     */
    public function setTPage(int $tPage)
    {
        $this->tPage = $tPage;
    }
    
    public function hasTTitle(): bool
    {
        return isset($this->tTitle);
    }    

    /**
     * @return string
     */
    public function getTTitle() : string
    {
        return $this->tTitle;
    }

    /**
     * @param string $tTitle
     */
    public function setTTitle(string $tTitle)
    {
        $this->tTitle = $tTitle;
    }
    
    public function hasTText(): bool
    {
        return isset($this->tText);
    }    

    /**
     * @return string
     */
    public function getTText() : string
    {
        return $this->tText;
    }

    /**
     * @param string $tText
     */
    public function setTText(string $tText)
    {
        $this->tText = $tText;
    }
    
    public function hasTApprove(): bool
    {
        return isset($this->tApprove);
    }    

    /**
     * @return int
     */
    public function getTApprove() : int
    {
        return $this->tApprove;
    }

    /**
     * @param int $tApprove
     */
    public function setTApprove(int $tApprove)
    {
        $this->tApprove = $tApprove;
    }
    
    public function hasTWait(): bool
    {
        return isset($this->tWait);
    }    

    /**
     * @return int
     */
    public function getTWait() : int
    {
        return $this->tWait;
    }

    /**
     * @param int $tWait
     */
    public function setTWait(int $tWait)
    {
        $this->tWait = $tWait;
    }
    
    public function hasTIncoming(): bool
    {
        return isset($this->tIncoming);
    }    

    /**
     * @return int
     */
    public function getTIncoming() : int
    {
        return $this->tIncoming;
    }

    /**
     * @param int $tIncoming
     */
    public function setTIncoming(int $tIncoming)
    {
        $this->tIncoming = $tIncoming;
    }
    
    public function hasTDeleted(): bool
    {
        return isset($this->tDeleted);
    }    

    /**
     * @return int
     */
    public function getTDeleted() : int
    {
        return $this->tDeleted;
    }

    /**
     * @param int $tDeleted
     */
    public function setTDeleted(int $tDeleted)
    {
        $this->tDeleted = $tDeleted;
    }
    
    public function hasTHits(): bool
    {
        return isset($this->tHits);
    }    

    /**
     * @return int
     */
    public function getTHits() : int
    {
        return $this->tHits;
    }

    /**
     * @param int $tHits
     */
    public function setTHits(int $tHits)
    {
        $this->tHits = $tHits;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbSeoLinkBack
    {
        return new VbSeoLinkBack();
    }
}