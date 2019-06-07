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

class GeneratedProductCodeRecord implements Record {
    
    /** @var $productCodeId int */
    protected $productCodeId;
    
    /** @var $productId string */
    protected $productId;
    
    /** @var $version string */
    protected $version;
    
    /** @var $installCode string */
    protected $installCode;
    
    /** @var $uninstallCode string */
    protected $uninstallCode;
    
    public function hasProductCodeId(): bool
    {
        return isset($this->productCodeId);
    }    

    /**
     * @return int
     */
    public function getProductCodeId() : int
    {
        return $this->productCodeId;
    }

    /**
     * @param int $productCodeId
     */
    public function setProductCodeId(int $productCodeId)
    {
        $this->productCodeId = $productCodeId;
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
    
    public function hasVersion(): bool
    {
        return isset($this->version);
    }    

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }
    
    public function hasInstallCode(): bool
    {
        return isset($this->installCode);
    }    

    /**
     * @return string
     */
    public function getInstallCode() : string
    {
        return $this->installCode;
    }

    /**
     * @param string $installCode
     */
    public function setInstallCode(string $installCode)
    {
        $this->installCode = $installCode;
    }
    
    public function hasUninstallCode(): bool
    {
        return isset($this->uninstallCode);
    }    

    /**
     * @return string
     */
    public function getUninstallCode() : string
    {
        return $this->uninstallCode;
    }

    /**
     * @param string $uninstallCode
     */
    public function setUninstallCode(string $uninstallCode)
    {
        $this->uninstallCode = $uninstallCode;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProductCode
    {
        return new ProductCode();
    }
}