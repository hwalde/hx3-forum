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

class GeneratedProfileFieldRecord implements Record {
    
    /** @var $profileFieldId RecordValue */
    protected $profileFieldId;
    
    /** @var $required RecordValue */
    protected $required;
    
    /** @var $hidden RecordValue */
    protected $hidden;
    
    /** @var $maxLength RecordValue */
    protected $maxLength;
    
    /** @var $size RecordValue */
    protected $size;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $editable RecordValue */
    protected $editable;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $data RecordValue */
    protected $data;
    
    /** @var $height RecordValue */
    protected $height;
    
    /** @var $def RecordValue */
    protected $def;
    
    /** @var $optional RecordValue */
    protected $optional;
    
    /** @var $searchable RecordValue */
    protected $searchable;
    
    /** @var $memberList RecordValue */
    protected $memberList;
    
    /** @var $regex RecordValue */
    protected $regex;
    
    /** @var $form RecordValue */
    protected $form;
    
    /** @var $html RecordValue */
    protected $html;
    
    /** @var $perLine RecordValue */
    protected $perLine;
    
    /** @var $profileFieldCategoryId RecordValue */
    protected $profileFieldCategoryId;

    public function __construct() {
		$this->profileFieldId = new RecordValue();
		$this->required = new RecordValue();
		$this->hidden = new RecordValue();
		$this->maxLength = new RecordValue();
		$this->size = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->editable = new RecordValue();
		$this->type = new RecordValue();
		$this->data = new RecordValue();
		$this->height = new RecordValue();
		$this->def = new RecordValue();
		$this->optional = new RecordValue();
		$this->searchable = new RecordValue();
		$this->memberList = new RecordValue();
		$this->regex = new RecordValue();
		$this->form = new RecordValue();
		$this->html = new RecordValue();
		$this->perLine = new RecordValue();
		$this->profileFieldCategoryId = new RecordValue();
    }
    
    public function hasProfileFieldId(): bool
    {
        return $this->profileFieldId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfileFieldId() : int
    {
        return $this->profileFieldId->getValue();
    }

    /**
     * @param int $profileFieldId
     */
    public function setProfileFieldId(int $profileFieldId)
    {
        $this->profileFieldId->setChanged(true);
        $this->profileFieldId->setValue($profileFieldId);
    }
    
    public function hasRequired(): bool
    {
        return $this->required->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRequired() : int
    {
        return $this->required->getValue();
    }

    /**
     * @param int $required
     */
    public function setRequired(int $required)
    {
        $this->required->setChanged(true);
        $this->required->setValue($required);
    }
    
    public function hasHidden(): bool
    {
        return $this->hidden->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHidden() : int
    {
        return $this->hidden->getValue();
    }

    /**
     * @param int $hidden
     */
    public function setHidden(int $hidden)
    {
        $this->hidden->setChanged(true);
        $this->hidden->setValue($hidden);
    }
    
    public function hasMaxLength(): bool
    {
        return $this->maxLength->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMaxLength() : int
    {
        return $this->maxLength->getValue();
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength(int $maxLength)
    {
        $this->maxLength->setChanged(true);
        $this->maxLength->setValue($maxLength);
    }
    
    public function hasSize(): bool
    {
        return $this->size->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSize() : int
    {
        return $this->size->getValue();
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size->setChanged(true);
        $this->size->setValue($size);
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
    
    public function hasEditable(): bool
    {
        return $this->editable->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEditable() : int
    {
        return $this->editable->getValue();
    }

    /**
     * @param int $editable
     */
    public function setEditable(int $editable)
    {
        $this->editable->setChanged(true);
        $this->editable->setValue($editable);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type->getValue();
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    public function hasData(): bool
    {
        return $this->data->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getData() : string
    {
        return $this->data->getValue();
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data->setChanged(true);
        $this->data->setValue($data);
    }
    
    public function hasHeight(): bool
    {
        return $this->height->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height->getValue();
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->height->setChanged(true);
        $this->height->setValue($height);
    }
    
    public function hasDef(): bool
    {
        return $this->def->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDef() : int
    {
        return $this->def->getValue();
    }

    /**
     * @param int $def
     */
    public function setDef(int $def)
    {
        $this->def->setChanged(true);
        $this->def->setValue($def);
    }
    
    public function hasOptional(): bool
    {
        return $this->optional->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptional() : int
    {
        return $this->optional->getValue();
    }

    /**
     * @param int $optional
     */
    public function setOptional(int $optional)
    {
        $this->optional->setChanged(true);
        $this->optional->setValue($optional);
    }
    
    public function hasSearchable(): bool
    {
        return $this->searchable->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSearchable() : int
    {
        return $this->searchable->getValue();
    }

    /**
     * @param int $searchable
     */
    public function setSearchable(int $searchable)
    {
        $this->searchable->setChanged(true);
        $this->searchable->setValue($searchable);
    }
    
    public function hasMemberList(): bool
    {
        return $this->memberList->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMemberList() : int
    {
        return $this->memberList->getValue();
    }

    /**
     * @param int $memberList
     */
    public function setMemberList(int $memberList)
    {
        $this->memberList->setChanged(true);
        $this->memberList->setValue($memberList);
    }
    
    public function hasRegex(): bool
    {
        return $this->regex->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getRegex() : string
    {
        return $this->regex->getValue();
    }

    /**
     * @param string $regex
     */
    public function setRegex(string $regex)
    {
        $this->regex->setChanged(true);
        $this->regex->setValue($regex);
    }
    
    public function hasForm(): bool
    {
        return $this->form->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForm() : int
    {
        return $this->form->getValue();
    }

    /**
     * @param int $form
     */
    public function setForm(int $form)
    {
        $this->form->setChanged(true);
        $this->form->setValue($form);
    }
    
    public function hasHtml(): bool
    {
        return $this->html->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHtml() : int
    {
        return $this->html->getValue();
    }

    /**
     * @param int $html
     */
    public function setHtml(int $html)
    {
        $this->html->setChanged(true);
        $this->html->setValue($html);
    }
    
    public function hasPerLine(): bool
    {
        return $this->perLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPerLine() : int
    {
        return $this->perLine->getValue();
    }

    /**
     * @param int $perLine
     */
    public function setPerLine(int $perLine)
    {
        $this->perLine->setChanged(true);
        $this->perLine->setValue($perLine);
    }
    
    public function hasProfileFieldCategoryId(): bool
    {
        return $this->profileFieldCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfileFieldCategoryId() : int
    {
        return $this->profileFieldCategoryId->getValue();
    }

    /**
     * @param int $profileFieldCategoryId
     */
    public function setProfileFieldCategoryId(int $profileFieldCategoryId)
    {
        $this->profileFieldCategoryId->setChanged(true);
        $this->profileFieldCategoryId->setValue($profileFieldCategoryId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProfileField
    {
        return new ProfileField();
    }
}