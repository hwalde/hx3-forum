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

class GeneratedProductCodeRecord implements Record {
    
    /** @var $productCodeId RecordValue */
    protected $productCodeId;
    
    /** @var $productId RecordValue */
    protected $productId;
    
    /** @var $version RecordValue */
    protected $version;
    
    /** @var $installCode RecordValue */
    protected $installCode;
    
    /** @var $uninstallCode RecordValue */
    protected $uninstallCode;

    public function __construct() {
		$this->productCodeId = new RecordValue();
		$this->productId = new RecordValue();
		$this->version = new RecordValue();
		$this->installCode = new RecordValue();
		$this->uninstallCode = new RecordValue();
    }
    
    public function hasProductCodeId(): bool
    {
        return $this->productCodeId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProductCodeId() : int
    {
        return $this->productCodeId->getValue();
    }

    /**
     * @param int $productCodeId
     */
    public function setProductCodeId(int $productCodeId)
    {
        $this->productCodeId->setChanged(true);
        $this->productCodeId->setValue($productCodeId);
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
    
    public function hasVersion(): bool
    {
        return $this->version->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version->getValue();
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version->setChanged(true);
        $this->version->setValue($version);
    }
    
    public function hasInstallCode(): bool
    {
        return $this->installCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getInstallCode() : string
    {
        return $this->installCode->getValue();
    }

    /**
     * @param string $installCode
     */
    public function setInstallCode(string $installCode)
    {
        $this->installCode->setChanged(true);
        $this->installCode->setValue($installCode);
    }
    
    public function hasUninstallCode(): bool
    {
        return $this->uninstallCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUninstallCode() : string
    {
        return $this->uninstallCode->getValue();
    }

    /**
     * @param string $uninstallCode
     */
    public function setUninstallCode(string $uninstallCode)
    {
        $this->uninstallCode->setChanged(true);
        $this->uninstallCode->setValue($uninstallCode);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProductCode
    {
        return new ProductCode();
    }
}