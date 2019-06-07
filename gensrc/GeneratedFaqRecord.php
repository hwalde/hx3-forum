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

class GeneratedFaqRecord implements Record {
    
    /** @var $faqName string */
    protected $faqName;
    
    /** @var $faqParent string */
    protected $faqParent;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $volatile int */
    protected $volatile;
    
    /** @var $product string */
    protected $product;
    
    public function hasFaqName(): bool
    {
        return isset($this->faqName);
    }    

    /**
     * @return string
     */
    public function getFaqName() : string
    {
        return $this->faqName;
    }

    /**
     * @param string $faqName
     */
    public function setFaqName(string $faqName)
    {
        $this->faqName = $faqName;
    }
    
    public function hasFaqParent(): bool
    {
        return isset($this->faqParent);
    }    

    /**
     * @return string
     */
    public function getFaqParent() : string
    {
        return $this->faqParent;
    }

    /**
     * @param string $faqParent
     */
    public function setFaqParent(string $faqParent)
    {
        $this->faqParent = $faqParent;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }
    
    public function hasVolatile(): bool
    {
        return isset($this->volatile);
    }    

    /**
     * @return int
     */
    public function getVolatile() : int
    {
        return $this->volatile;
    }

    /**
     * @param int $volatile
     */
    public function setVolatile(int $volatile)
    {
        $this->volatile = $volatile;
    }
    
    public function hasProduct(): bool
    {
        return isset($this->product);
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product = $product;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Faq
    {
        return new Faq();
    }
}