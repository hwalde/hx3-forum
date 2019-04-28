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

class GeneratedProductDependencyRecord implements Record {
    
    /** @var $productDependencyId int */
    private $productDependencyId;
    
    /** @var $productId string */
    private $productId;
    
    /** @var $dependencyType string */
    private $dependencyType;
    
    /** @var $parentProductId string */
    private $parentProductId;
    
    /** @var $minVersion string */
    private $minVersion;
    
    /** @var $maxVersion string */
    private $maxVersion;
    
    public function hasProductDependencyId(): bool
    {
        return isset($this->productDependencyId);
    }    

    /**
     * @return int
     */
    public function getProductDependencyId() : int
    {
        return $this->productDependencyId;
    }

    /**
     * @param int $productDependencyId
     */
    public function setProductDependencyId(int $productDependencyId)
    {
        $this->productDependencyId = $productDependencyId;
    }
    
    public function hasProductId(): bool
    {
        return isset($this->productId);
    }    

    /**
     * @return string
     */
    public function getProductId() : string
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId(string $productId)
    {
        $this->productId = $productId;
    }
    
    public function hasDependencyType(): bool
    {
        return isset($this->dependencyType);
    }    

    /**
     * @return string
     */
    public function getDependencyType() : string
    {
        return $this->dependencyType;
    }

    /**
     * @param string $dependencyType
     */
    public function setDependencyType(string $dependencyType)
    {
        $this->dependencyType = $dependencyType;
    }
    
    public function hasParentProductId(): bool
    {
        return isset($this->parentProductId);
    }    

    /**
     * @return string
     */
    public function getParentProductId() : string
    {
        return $this->parentProductId;
    }

    /**
     * @param string $parentProductId
     */
    public function setParentProductId(string $parentProductId)
    {
        $this->parentProductId = $parentProductId;
    }
    
    public function hasMinVersion(): bool
    {
        return isset($this->minVersion);
    }    

    /**
     * @return string
     */
    public function getMinVersion() : string
    {
        return $this->minVersion;
    }

    /**
     * @param string $minVersion
     */
    public function setMinVersion(string $minVersion)
    {
        $this->minVersion = $minVersion;
    }
    
    public function hasMaxVersion(): bool
    {
        return isset($this->maxVersion);
    }    

    /**
     * @return string
     */
    public function getMaxVersion() : string
    {
        return $this->maxVersion;
    }

    /**
     * @param string $maxVersion
     */
    public function setMaxVersion(string $maxVersion)
    {
        $this->maxVersion = $maxVersion;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProductDependency
    {
        return new ProductDependency();
    }
}