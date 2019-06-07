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

class GeneratedSettingRecord implements Record {
    
    /** @var $varName string */
    protected $varName;
    
    /** @var $groupTitle string */
    protected $groupTitle;
    
    /** @var $value string */
    protected $value;
    
    /** @var $defaultValue string */
    protected $defaultValue;
    
    /** @var $optionCode string */
    protected $optionCode;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $advanced int */
    protected $advanced;
    
    /** @var $volatile int */
    protected $volatile;
    
    /** @var $product string */
    protected $product;
    
    /** @var $dataType string */
    protected $dataType;
    
    /** @var $blackList int */
    protected $blackList;
    
    /** @var $validationCode string|null */
    protected $validationCode;
    
    public function hasVarName(): bool
    {
        return isset($this->varName);
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName;
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName = $varName;
    }
    
    public function hasGroupTitle(): bool
    {
        return isset($this->groupTitle);
    }    

    /**
     * @return string
     */
    public function getGroupTitle() : string
    {
        return $this->groupTitle;
    }

    /**
     * @param string $groupTitle
     */
    public function setGroupTitle(string $groupTitle)
    {
        $this->groupTitle = $groupTitle;
    }
    
    public function hasValue(): bool
    {
        return isset($this->value);
    }    

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
    
    public function hasDefaultValue(): bool
    {
        return isset($this->defaultValue);
    }    

    /**
     * @return string
     */
    public function getDefaultValue() : string
    {
        return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     */
    public function setDefaultValue(string $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }
    
    public function hasOptionCode(): bool
    {
        return isset($this->optionCode);
    }    

    /**
     * @return string
     */
    public function getOptionCode() : string
    {
        return $this->optionCode;
    }

    /**
     * @param string $optionCode
     */
    public function setOptionCode(string $optionCode)
    {
        $this->optionCode = $optionCode;
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
    
    public function hasAdvanced(): bool
    {
        return isset($this->advanced);
    }    

    /**
     * @return int
     */
    public function getAdvanced() : int
    {
        return $this->advanced;
    }

    /**
     * @param int $advanced
     */
    public function setAdvanced(int $advanced)
    {
        $this->advanced = $advanced;
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
    
    public function hasDataType(): bool
    {
        return isset($this->dataType);
    }    

    /**
     * @return string
     */
    public function getDataType() : string
    {
        return $this->dataType;
    }

    /**
     * @param string $dataType
     */
    public function setDataType(string $dataType)
    {
        $this->dataType = $dataType;
    }
    
    public function hasBlackList(): bool
    {
        return isset($this->blackList);
    }    

    /**
     * @return int
     */
    public function getBlackList() : int
    {
        return $this->blackList;
    }

    /**
     * @param int $blackList
     */
    public function setBlackList(int $blackList)
    {
        $this->blackList = $blackList;
    }
    
    public function hasValidationCode(): bool
    {
        return isset($this->validationCode);
    }    

    /**
     * @return string|null
     */
    public function getValidationCode() : ?string
    {
        return $this->validationCode;
    }

    /**
     * @param string|null $validationCode
     */
    public function setValidationCode(?string $validationCode)
    {
        $this->validationCode = $validationCode;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Setting
    {
        return new Setting();
    }
}