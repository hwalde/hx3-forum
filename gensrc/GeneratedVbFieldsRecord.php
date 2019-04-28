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

class GeneratedVbFieldsRecord implements Record {
    
    /** @var $fieldId int */
    private $fieldId;
    
    /** @var $fieldName string */
    private $fieldName;
    
    /** @var $fieldType string */
    private $fieldType;
    
    /** @var $isUnsigned string */
    private $isUnsigned;
    
    /** @var $tableName string */
    private $tableName;
    
    /** @var $createSql string */
    private $createSql;
    
    /** @var $vbMandatory string */
    private $vbMandatory;
    
    /** @var $defaultValue string|null */
    private $defaultValue;
    
    /** @var $dictionary string */
    private $dictionary;
    
    public function hasFieldId(): bool
    {
        return isset($this->fieldId);
    }    

    /**
     * @return int
     */
    public function getFieldId() : int
    {
        return $this->fieldId;
    }

    /**
     * @param int $fieldId
     */
    public function setFieldId(int $fieldId)
    {
        $this->fieldId = $fieldId;
    }
    
    public function hasFieldName(): bool
    {
        return isset($this->fieldName);
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }
    
    public function hasFieldType(): bool
    {
        return isset($this->fieldType);
    }    

    /**
     * @return string
     */
    public function getFieldType() : string
    {
        return $this->fieldType;
    }

    /**
     * @param string $fieldType
     */
    public function setFieldType(string $fieldType)
    {
        $this->fieldType = $fieldType;
    }
    
    public function hasIsUnsigned(): bool
    {
        return isset($this->isUnsigned);
    }    

    /**
     * @return string
     */
    public function getIsUnsigned() : string
    {
        return $this->isUnsigned;
    }

    /**
     * @param string $isUnsigned
     */
    public function setIsUnsigned(string $isUnsigned)
    {
        $this->isUnsigned = $isUnsigned;
    }
    
    public function hasTableName(): bool
    {
        return isset($this->tableName);
    }    

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     */
    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
    }
    
    public function hasCreateSql(): bool
    {
        return isset($this->createSql);
    }    

    /**
     * @return string
     */
    public function getCreateSql() : string
    {
        return $this->createSql;
    }

    /**
     * @param string $createSql
     */
    public function setCreateSql(string $createSql)
    {
        $this->createSql = $createSql;
    }
    
    public function hasVbMandatory(): bool
    {
        return isset($this->vbMandatory);
    }    

    /**
     * @return string
     */
    public function getVbMandatory() : string
    {
        return $this->vbMandatory;
    }

    /**
     * @param string $vbMandatory
     */
    public function setVbMandatory(string $vbMandatory)
    {
        $this->vbMandatory = $vbMandatory;
    }
    
    public function hasDefaultValue(): bool
    {
        return isset($this->defaultValue);
    }    

    /**
     * @return string|null
     */
    public function getDefaultValue() : ?string
    {
        return $this->defaultValue;
    }

    /**
     * @param string|null $defaultValue
     */
    public function setDefaultValue(?string $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }
    
    public function hasDictionary(): bool
    {
        return isset($this->dictionary);
    }    

    /**
     * @return string
     */
    public function getDictionary() : string
    {
        return $this->dictionary;
    }

    /**
     * @param string $dictionary
     */
    public function setDictionary(string $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbFields
    {
        return new VbFields();
    }
}