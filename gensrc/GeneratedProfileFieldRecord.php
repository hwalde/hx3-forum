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

class GeneratedProfileFieldRecord implements Record {
    
    /** @var $profileFieldId int */
    protected $profileFieldId;
    
    /** @var $required int */
    protected $required;
    
    /** @var $hidden int */
    protected $hidden;
    
    /** @var $maxLength int */
    protected $maxLength;
    
    /** @var $size int */
    protected $size;
    
    /** @var $displayOrder int */
    protected $displayOrder;
    
    /** @var $editable int */
    protected $editable;
    
    /** @var $type string */
    protected $type;
    
    /** @var $data string */
    protected $data;
    
    /** @var $height int */
    protected $height;
    
    /** @var $def int */
    protected $def;
    
    /** @var $optional int */
    protected $optional;
    
    /** @var $searchable int */
    protected $searchable;
    
    /** @var $memberList int */
    protected $memberList;
    
    /** @var $regex string */
    protected $regex;
    
    /** @var $form int */
    protected $form;
    
    /** @var $html int */
    protected $html;
    
    /** @var $perLine int */
    protected $perLine;
    
    /** @var $profileFieldCategoryId int */
    protected $profileFieldCategoryId;
    
    public function hasProfileFieldId(): bool
    {
        return isset($this->profileFieldId);
    }    

    /**
     * @return int
     */
    public function getProfileFieldId() : int
    {
        return $this->profileFieldId;
    }

    /**
     * @param int $profileFieldId
     */
    public function setProfileFieldId(int $profileFieldId)
    {
        $this->profileFieldId = $profileFieldId;
    }
    
    public function hasRequired(): bool
    {
        return isset($this->required);
    }    

    /**
     * @return int
     */
    public function getRequired() : int
    {
        return $this->required;
    }

    /**
     * @param int $required
     */
    public function setRequired(int $required)
    {
        $this->required = $required;
    }
    
    public function hasHidden(): bool
    {
        return isset($this->hidden);
    }    

    /**
     * @return int
     */
    public function getHidden() : int
    {
        return $this->hidden;
    }

    /**
     * @param int $hidden
     */
    public function setHidden(int $hidden)
    {
        $this->hidden = $hidden;
    }
    
    public function hasMaxLength(): bool
    {
        return isset($this->maxLength);
    }    

    /**
     * @return int
     */
    public function getMaxLength() : int
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength(int $maxLength)
    {
        $this->maxLength = $maxLength;
    }
    
    public function hasSize(): bool
    {
        return isset($this->size);
    }    

    /**
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
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
    
    public function hasEditable(): bool
    {
        return isset($this->editable);
    }    

    /**
     * @return int
     */
    public function getEditable() : int
    {
        return $this->editable;
    }

    /**
     * @param int $editable
     */
    public function setEditable(int $editable)
    {
        $this->editable = $editable;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
    
    public function hasData(): bool
    {
        return isset($this->data);
    }    

    /**
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }
    
    public function hasHeight(): bool
    {
        return isset($this->height);
    }    

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
    }
    
    public function hasDef(): bool
    {
        return isset($this->def);
    }    

    /**
     * @return int
     */
    public function getDef() : int
    {
        return $this->def;
    }

    /**
     * @param int $def
     */
    public function setDef(int $def)
    {
        $this->def = $def;
    }
    
    public function hasOptional(): bool
    {
        return isset($this->optional);
    }    

    /**
     * @return int
     */
    public function getOptional() : int
    {
        return $this->optional;
    }

    /**
     * @param int $optional
     */
    public function setOptional(int $optional)
    {
        $this->optional = $optional;
    }
    
    public function hasSearchable(): bool
    {
        return isset($this->searchable);
    }    

    /**
     * @return int
     */
    public function getSearchable() : int
    {
        return $this->searchable;
    }

    /**
     * @param int $searchable
     */
    public function setSearchable(int $searchable)
    {
        $this->searchable = $searchable;
    }
    
    public function hasMemberList(): bool
    {
        return isset($this->memberList);
    }    

    /**
     * @return int
     */
    public function getMemberList() : int
    {
        return $this->memberList;
    }

    /**
     * @param int $memberList
     */
    public function setMemberList(int $memberList)
    {
        $this->memberList = $memberList;
    }
    
    public function hasRegex(): bool
    {
        return isset($this->regex);
    }    

    /**
     * @return string
     */
    public function getRegex() : string
    {
        return $this->regex;
    }

    /**
     * @param string $regex
     */
    public function setRegex(string $regex)
    {
        $this->regex = $regex;
    }
    
    public function hasForm(): bool
    {
        return isset($this->form);
    }    

    /**
     * @return int
     */
    public function getForm() : int
    {
        return $this->form;
    }

    /**
     * @param int $form
     */
    public function setForm(int $form)
    {
        $this->form = $form;
    }
    
    public function hasHtml(): bool
    {
        return isset($this->html);
    }    

    /**
     * @return int
     */
    public function getHtml() : int
    {
        return $this->html;
    }

    /**
     * @param int $html
     */
    public function setHtml(int $html)
    {
        $this->html = $html;
    }
    
    public function hasPerLine(): bool
    {
        return isset($this->perLine);
    }    

    /**
     * @return int
     */
    public function getPerLine() : int
    {
        return $this->perLine;
    }

    /**
     * @param int $perLine
     */
    public function setPerLine(int $perLine)
    {
        $this->perLine = $perLine;
    }
    
    public function hasProfileFieldCategoryId(): bool
    {
        return isset($this->profileFieldCategoryId);
    }    

    /**
     * @return int
     */
    public function getProfileFieldCategoryId() : int
    {
        return $this->profileFieldCategoryId;
    }

    /**
     * @param int $profileFieldCategoryId
     */
    public function setProfileFieldCategoryId(int $profileFieldCategoryId)
    {
        $this->profileFieldCategoryId = $profileFieldCategoryId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ProfileField
    {
        return new ProfileField();
    }
}