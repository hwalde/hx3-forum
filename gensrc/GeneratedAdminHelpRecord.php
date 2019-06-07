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

class GeneratedAdminHelpRecord implements Record {
    
    /** @var $adminHelpId int */
    protected $adminHelpId;
    
    /** @var $script string */
    protected $script;
    
    /** @var $action string */
    protected $action;
    
    /** @var $optionName string */
    protected $optionName;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $volatile int */
    protected $volatile;
    
    /** @var $product string */
    protected $product;
    
    public function hasAdminHelpId(): bool
    {
        return isset($this->adminHelpId);
    }    

    /**
     * @return int
     */
    public function getAdminHelpId() : int
    {
        return $this->adminHelpId;
    }

    /**
     * @param int $adminHelpId
     */
    public function setAdminHelpId(int $adminHelpId)
    {
        $this->adminHelpId = $adminHelpId;
    }
    
    public function hasScript(): bool
    {
        return isset($this->script);
    }    

    /**
     * @return string
     */
    public function getScript() : string
    {
        return $this->script;
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script = $script;
    }
    
    public function hasAction(): bool
    {
        return isset($this->action);
    }    

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }
    
    public function hasOptionName(): bool
    {
        return isset($this->optionName);
    }    

    /**
     * @return string
     */
    public function getOptionName() : string
    {
        return $this->optionName;
    }

    /**
     * @param string $optionName
     */
    public function setOptionName(string $optionName)
    {
        $this->optionName = $optionName;
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
    public function __getModel(): AdminHelp
    {
        return new AdminHelp();
    }
}