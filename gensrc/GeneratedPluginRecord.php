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

class GeneratedPluginRecord implements Record {
    
    /** @var $pluginId RecordValue */
    protected $pluginId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $hookName RecordValue */
    protected $hookName;
    
    /** @var $phpCode RecordValue */
    protected $phpCode;
    
    /** @var $product RecordValue */
    protected $product;
    
    /** @var $devKey RecordValue */
    protected $devKey;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $executionOrder RecordValue */
    protected $executionOrder;

    public function __construct() {
		$this->pluginId = new RecordValue();
		$this->title = new RecordValue();
		$this->hookName = new RecordValue();
		$this->phpCode = new RecordValue();
		$this->product = new RecordValue();
		$this->devKey = new RecordValue();
		$this->active = new RecordValue();
		$this->executionOrder = new RecordValue();
    }
    
    public function hasPluginId(): bool
    {
        return $this->pluginId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPluginId() : int
    {
        return $this->pluginId->getValue();
    }

    /**
     * @param int $pluginId
     */
    public function setPluginId(int $pluginId)
    {
        $this->pluginId->setChanged(true);
        $this->pluginId->setValue($pluginId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasHookName(): bool
    {
        return $this->hookName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHookName() : string
    {
        return $this->hookName->getValue();
    }

    /**
     * @param string $hookName
     */
    public function setHookName(string $hookName)
    {
        $this->hookName->setChanged(true);
        $this->hookName->setValue($hookName);
    }
    
    public function hasPhpCode(): bool
    {
        return $this->phpCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhpCode() : string
    {
        return $this->phpCode->getValue();
    }

    /**
     * @param string $phpCode
     */
    public function setPhpCode(string $phpCode)
    {
        $this->phpCode->setChanged(true);
        $this->phpCode->setValue($phpCode);
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
    
    public function hasDevKey(): bool
    {
        return $this->devKey->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDevKey() : string
    {
        return $this->devKey->getValue();
    }

    /**
     * @param string $devKey
     */
    public function setDevKey(string $devKey)
    {
        $this->devKey->setChanged(true);
        $this->devKey->setValue($devKey);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    public function hasExecutionOrder(): bool
    {
        return $this->executionOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExecutionOrder() : int
    {
        return $this->executionOrder->getValue();
    }

    /**
     * @param int $executionOrder
     */
    public function setExecutionOrder(int $executionOrder)
    {
        $this->executionOrder->setChanged(true);
        $this->executionOrder->setValue($executionOrder);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Plugin
    {
        return new Plugin();
    }
}