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

class GeneratedFaqRecord implements Record {
    
    /** @var $faqName RecordValue */
    protected $faqName;
    
    /** @var $faqParent RecordValue */
    protected $faqParent;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $volatile RecordValue */
    protected $volatile;
    
    /** @var $product RecordValue */
    protected $product;

    public function __construct() {
		$this->faqName = new RecordValue();
		$this->faqParent = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->volatile = new RecordValue();
		$this->product = new RecordValue();
    }
    
    public function hasFaqName(): bool
    {
        return $this->faqName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFaqName() : string
    {
        return $this->faqName->getValue();
    }

    /**
     * @param string $faqName
     */
    public function setFaqName(string $faqName)
    {
        $this->faqName->setChanged(true);
        $this->faqName->setValue($faqName);
    }
    
    public function hasFaqParent(): bool
    {
        return $this->faqParent->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFaqParent() : string
    {
        return $this->faqParent->getValue();
    }

    /**
     * @param string $faqParent
     */
    public function setFaqParent(string $faqParent)
    {
        $this->faqParent->setChanged(true);
        $this->faqParent->setValue($faqParent);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
    }
    
    public function hasVolatile(): bool
    {
        return $this->volatile->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVolatile() : int
    {
        return $this->volatile->getValue();
    }

    /**
     * @param int $volatile
     */
    public function setVolatile(int $volatile)
    {
        $this->volatile->setChanged(true);
        $this->volatile->setValue($volatile);
    }
    
    public function hasProduct(): bool
    {
        return $this->product->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product->getValue();
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product->setChanged(true);
        $this->product->setValue($product);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Faq
    {
        return new Faq();
    }
}