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

class GeneratedPluginRecord implements Record {
    
    /** @var $pluginId int */
    protected $pluginId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $hookName string */
    protected $hookName;
    
    /** @var $phpCode string */
    protected $phpCode;
    
    /** @var $product string */
    protected $product;
    
    /** @var $devKey string */
    protected $devKey;
    
    /** @var $active int */
    protected $active;
    
    /** @var $executionOrder int */
    protected $executionOrder;
    
    public function hasPluginId(): bool
    {
        return isset($this->pluginId);
    }    

    /**
     * @return int
     */
    public function getPluginId() : int
    {
        return $this->pluginId;
    }

    /**
     * @param int $pluginId
     */
    public function setPluginId(int $pluginId)
    {
        $this->pluginId = $pluginId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasHookName(): bool
    {
        return isset($this->hookName);
    }    

    /**
     * @return string
     */
    public function getHookName() : string
    {
        return $this->hookName;
    }

    /**
     * @param string $hookName
     */
    public function setHookName(string $hookName)
    {
        $this->hookName = $hookName;
    }
    
    public function hasPhpCode(): bool
    {
        return isset($this->phpCode);
    }    

    /**
     * @return string
     */
    public function getPhpCode() : string
    {
        return $this->phpCode;
    }

    /**
     * @param string $phpCode
     */
    public function setPhpCode(string $phpCode)
    {
        $this->phpCode = $phpCode;
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
    
    public function hasDevKey(): bool
    {
        return isset($this->devKey);
    }    

    /**
     * @return string
     */
    public function getDevKey() : string
    {
        return $this->devKey;
    }

    /**
     * @param string $devKey
     */
    public function setDevKey(string $devKey)
    {
        $this->devKey = $devKey;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
    
    public function hasExecutionOrder(): bool
    {
        return isset($this->executionOrder);
    }    

    /**
     * @return int
     */
    public function getExecutionOrder() : int
    {
        return $this->executionOrder;
    }

    /**
     * @param int $executionOrder
     */
    public function setExecutionOrder(int $executionOrder)
    {
        $this->executionOrder = $executionOrder;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Plugin
    {
        return new Plugin();
    }
}