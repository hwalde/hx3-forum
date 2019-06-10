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

class GeneratedProductDependencyRecord implements Record {
    
    /** @var $productDependencyId RecordValue */
    protected $productDependencyId;
    
    /** @var $productId RecordValue */
    protected $productId;
    
    /** @var $dependencyType RecordValue */
    protected $dependencyType;
    
    /** @var $parentProductId RecordValue */
    protected $parentProductId;
    
    /** @var $minVersion RecordValue */
    protected $minVersion;
    
    /** @var $maxVersion RecordValue */
    protected $maxVersion;

    public function __construct() {
		$this->productDependencyId = new RecordValue();
		$this->productId = new RecordValue();
		$this->dependencyType = new RecordValue();
		$this->parentProductId = new RecordValue();
		$this->minVersion = new RecordValue();
		$this->maxVersion = new RecordValue();
    }
    
    public function hasProductDependencyId(): bool
    {
        return $this->productDependencyId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProductDependencyId() : int
    {
        return $this->productDependencyId->getValue();
    }

    /**
     * @param int $productDependencyId
     */
    public function setProductDependencyId(int $productDependencyId)
    {
        $this->productDependencyId->setChanged(true);
        $this->productDependencyId->setValue($productDependencyId);
    }
    
    public function hasProductId(): bool
    {
        return $this->productId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProductId() : string
    {
        return $this->productId->getValue();
    }

    /**
     * @param string $productId
     */
    public function setProductId(string $productId)
    {
        $this->productId->setChanged(true);
        $this->productId->setValue($productId);
    }
    
    public function hasDependencyType(): bool
    {
        return $this->dependencyType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDependencyType() : string
    {
        return $this->dependencyType->getValue();
    }

    /**
     * @param string $dependencyType
     */
    public function setDependencyType(string $dependencyType)
    {
        $this->dependencyType->setChanged(true);
        $this->dependencyType->setValue($dependencyType);
    }
    
    public function hasParentProductId(): bool
    {
        return $this->parentProductId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getParentProductId() : string
    {
        return $this->parentProductId->getValue();
    }

    /**
     * @param string $parentProductId
     */
    public function setParentProductId(string $parentProductId)
    {
        $this->parentProductId->setChanged(true);
        $this->parentProductId->setValue($parentProductId);
    }
    
    public function hasMinVersion(): bool
    {
        return $this->minVersion->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMinVersion() : string
    {
        return $this->minVersion->getValue();
    }

    /**
     * @param string $minVersion
     */
    public function setMinVersion(string $minVersion)
    {
        $this->minVersion->setChanged(true);
        $this->minVersion->setValue($minVersion);
    }
    
    public function hasMaxVersion(): bool
    {
        return $this->maxVersion->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMaxVersion() : string
    {
        return $this->maxVersion->getValue();
    }

    /**
     * @param string $maxVersion
     */
    public function setMaxVersion(string $maxVersion)
    {
        $this->maxVersion->setChanged(true);
        $this->maxVersion->setValue($maxVersion);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProductDependency
    {
        return new ProductDependency();
    }
}