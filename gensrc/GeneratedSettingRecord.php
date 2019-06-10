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

class GeneratedSettingRecord implements Record {
    
    /** @var $varName RecordValue */
    protected $varName;
    
    /** @var $groupTitle RecordValue */
    protected $groupTitle;
    
    /** @var $value RecordValue */
    protected $value;
    
    /** @var $defaultValue RecordValue */
    protected $defaultValue;
    
    /** @var $optionCode RecordValue */
    protected $optionCode;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $advanced RecordValue */
    protected $advanced;
    
    /** @var $volatile RecordValue */
    protected $volatile;
    
    /** @var $product RecordValue */
    protected $product;
    
    /** @var $dataType RecordValue */
    protected $dataType;
    
    /** @var $blackList RecordValue */
    protected $blackList;
    
    /** @var $validationCode RecordValue */
    protected $validationCode;

    public function __construct() {
		$this->varName = new RecordValue();
		$this->groupTitle = new RecordValue();
		$this->value = new RecordValue();
		$this->defaultValue = new RecordValue();
		$this->optionCode = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->advanced = new RecordValue();
		$this->volatile = new RecordValue();
		$this->product = new RecordValue();
		$this->dataType = new RecordValue();
		$this->blackList = new RecordValue();
		$this->validationCode = new RecordValue();
    }
    
    public function hasVarName(): bool
    {
        return $this->varName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName->getValue();
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName->setChanged(true);
        $this->varName->setValue($varName);
    }
    
    public function hasGroupTitle(): bool
    {
        return $this->groupTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getGroupTitle() : string
    {
        return $this->groupTitle->getValue();
    }

    /**
     * @param string $groupTitle
     */
    public function setGroupTitle(string $groupTitle)
    {
        $this->groupTitle->setChanged(true);
        $this->groupTitle->setValue($groupTitle);
    }
    
    public function hasValue(): bool
    {
        return $this->value->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value->getValue();
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value->setChanged(true);
        $this->value->setValue($value);
    }
    
    public function hasDefaultValue(): bool
    {
        return $this->defaultValue->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDefaultValue() : string
    {
        return $this->defaultValue->getValue();
    }

    /**
     * @param string $defaultValue
     */
    public function setDefaultValue(string $defaultValue)
    {
        $this->defaultValue->setChanged(true);
        $this->defaultValue->setValue($defaultValue);
    }
    
    public function hasOptionCode(): bool
    {
        return $this->optionCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOptionCode() : string
    {
        return $this->optionCode->getValue();
    }

    /**
     * @param string $optionCode
     */
    public function setOptionCode(string $optionCode)
    {
        $this->optionCode->setChanged(true);
        $this->optionCode->setValue($optionCode);
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
    
    public function hasAdvanced(): bool
    {
        return $this->advanced->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdvanced() : int
    {
        return $this->advanced->getValue();
    }

    /**
     * @param int $advanced
     */
    public function setAdvanced(int $advanced)
    {
        $this->advanced->setChanged(true);
        $this->advanced->setValue($advanced);
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
    
    public function hasDataType(): bool
    {
        return $this->dataType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDataType() : string
    {
        return $this->dataType->getValue();
    }

    /**
     * @param string $dataType
     */
    public function setDataType(string $dataType)
    {
        $this->dataType->setChanged(true);
        $this->dataType->setValue($dataType);
    }
    
    public function hasBlackList(): bool
    {
        return $this->blackList->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBlackList() : int
    {
        return $this->blackList->getValue();
    }

    /**
     * @param int $blackList
     */
    public function setBlackList(int $blackList)
    {
        $this->blackList->setChanged(true);
        $this->blackList->setValue($blackList);
    }
    
    public function hasValidationCode(): bool
    {
        return $this->validationCode->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getValidationCode() : ?string
    {
        return $this->validationCode->getValue();
    }

    /**
     * @param string|null $validationCode
     */
    public function setValidationCode(?string $validationCode)
    {
        $this->validationCode->setChanged(true);
        $this->validationCode->setValue($validationCode);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Setting
    {
        return new Setting();
    }
}