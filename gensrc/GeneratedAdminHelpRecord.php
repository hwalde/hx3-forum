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

class GeneratedAdminHelpRecord implements Record {
    
    /** @var $adminHelpId RecordValue */
    protected $adminHelpId;
    
    /** @var $script RecordValue */
    protected $script;
    
    /** @var $action RecordValue */
    protected $action;
    
    /** @var $optionName RecordValue */
    protected $optionName;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $volatile RecordValue */
    protected $volatile;
    
    /** @var $product RecordValue */
    protected $product;

    public function __construct() {
		$this->adminHelpId = new RecordValue();
		$this->script = new RecordValue();
		$this->action = new RecordValue();
		$this->optionName = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->volatile = new RecordValue();
		$this->product = new RecordValue();
    }
    
    public function hasAdminHelpId(): bool
    {
        return $this->adminHelpId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminHelpId() : int
    {
        return $this->adminHelpId->getValue();
    }

    /**
     * @param int $adminHelpId
     */
    public function setAdminHelpId(int $adminHelpId)
    {
        $this->adminHelpId->setChanged(true);
        $this->adminHelpId->setValue($adminHelpId);
    }
    
    public function hasScript(): bool
    {
        return $this->script->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getScript() : string
    {
        return $this->script->getValue();
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script->setChanged(true);
        $this->script->setValue($script);
    }
    
    public function hasAction(): bool
    {
        return $this->action->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action->getValue();
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action->setChanged(true);
        $this->action->setValue($action);
    }
    
    public function hasOptionName(): bool
    {
        return $this->optionName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOptionName() : string
    {
        return $this->optionName->getValue();
    }

    /**
     * @param string $optionName
     */
    public function setOptionName(string $optionName)
    {
        $this->optionName->setChanged(true);
        $this->optionName->setValue($optionName);
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
    public function __getModel(): AdminHelp
    {
        return new AdminHelp();
    }
}