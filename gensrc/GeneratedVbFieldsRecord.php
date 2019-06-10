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

class GeneratedVbFieldsRecord implements Record {
    
    /** @var $fieldId RecordValue */
    protected $fieldId;
    
    /** @var $fieldName RecordValue */
    protected $fieldName;
    
    /** @var $fieldType RecordValue */
    protected $fieldType;
    
    /** @var $isUnsigned RecordValue */
    protected $isUnsigned;
    
    /** @var $tableName RecordValue */
    protected $tableName;
    
    /** @var $createSql RecordValue */
    protected $createSql;
    
    /** @var $vbMandatory RecordValue */
    protected $vbMandatory;
    
    /** @var $defaultValue RecordValue */
    protected $defaultValue;
    
    /** @var $dictionary RecordValue */
    protected $dictionary;

    public function __construct() {
		$this->fieldId = new RecordValue();
		$this->fieldName = new RecordValue();
		$this->fieldType = new RecordValue();
		$this->isUnsigned = new RecordValue();
		$this->tableName = new RecordValue();
		$this->createSql = new RecordValue();
		$this->vbMandatory = new RecordValue();
		$this->defaultValue = new RecordValue();
		$this->dictionary = new RecordValue();
    }
    
    public function hasFieldId(): bool
    {
        return $this->fieldId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFieldId() : int
    {
        return $this->fieldId->getValue();
    }

    /**
     * @param int $fieldId
     */
    public function setFieldId(int $fieldId)
    {
        $this->fieldId->setChanged(true);
        $this->fieldId->setValue($fieldId);
    }
    
    public function hasFieldName(): bool
    {
        return $this->fieldName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName->getValue();
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName->setChanged(true);
        $this->fieldName->setValue($fieldName);
    }
    
    public function hasFieldType(): bool
    {
        return $this->fieldType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFieldType() : string
    {
        return $this->fieldType->getValue();
    }

    /**
     * @param string $fieldType
     */
    public function setFieldType(string $fieldType)
    {
        $this->fieldType->setChanged(true);
        $this->fieldType->setValue($fieldType);
    }
    
    public function hasIsUnsigned(): bool
    {
        return $this->isUnsigned->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIsUnsigned() : string
    {
        return $this->isUnsigned->getValue();
    }

    /**
     * @param string $isUnsigned
     */
    public function setIsUnsigned(string $isUnsigned)
    {
        $this->isUnsigned->setChanged(true);
        $this->isUnsigned->setValue($isUnsigned);
    }
    
    public function hasTableName(): bool
    {
        return $this->tableName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return $this->tableName->getValue();
    }

    /**
     * @param string $tableName
     */
    public function setTableName(string $tableName)
    {
        $this->tableName->setChanged(true);
        $this->tableName->setValue($tableName);
    }
    
    public function hasCreateSql(): bool
    {
        return $this->createSql->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCreateSql() : string
    {
        return $this->createSql->getValue();
    }

    /**
     * @param string $createSql
     */
    public function setCreateSql(string $createSql)
    {
        $this->createSql->setChanged(true);
        $this->createSql->setValue($createSql);
    }
    
    public function hasVbMandatory(): bool
    {
        return $this->vbMandatory->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVbMandatory() : string
    {
        return $this->vbMandatory->getValue();
    }

    /**
     * @param string $vbMandatory
     */
    public function setVbMandatory(string $vbMandatory)
    {
        $this->vbMandatory->setChanged(true);
        $this->vbMandatory->setValue($vbMandatory);
    }
    
    public function hasDefaultValue(): bool
    {
        return $this->defaultValue->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getDefaultValue() : ?string
    {
        return $this->defaultValue->getValue();
    }

    /**
     * @param string|null $defaultValue
     */
    public function setDefaultValue(?string $defaultValue)
    {
        $this->defaultValue->setChanged(true);
        $this->defaultValue->setValue($defaultValue);
    }
    
    public function hasDictionary(): bool
    {
        return $this->dictionary->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDictionary() : string
    {
        return $this->dictionary->getValue();
    }

    /**
     * @param string $dictionary
     */
    public function setDictionary(string $dictionary)
    {
        $this->dictionary->setChanged(true);
        $this->dictionary->setValue($dictionary);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbFields
    {
        return new VbFields();
    }
}