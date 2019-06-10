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

class GeneratedStyleRecord implements Record {
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $parentId RecordValue */
    protected $parentId;
    
    /** @var $parentList RecordValue */
    protected $parentList;
    
    /** @var $templateList RecordValue */
    protected $templateList;
    
    /** @var $cssColors RecordValue */
    protected $cssColors;
    
    /** @var $css RecordValue */
    protected $css;
    
    /** @var $styleVars RecordValue */
    protected $styleVars;
    
    /** @var $replacements RecordValue */
    protected $replacements;
    
    /** @var $editorStyles RecordValue */
    protected $editorStyles;
    
    /** @var $userSelect RecordValue */
    protected $userSelect;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $importStyleId RecordValue */
    protected $importStyleId;

    public function __construct() {
		$this->styleId = new RecordValue();
		$this->title = new RecordValue();
		$this->parentId = new RecordValue();
		$this->parentList = new RecordValue();
		$this->templateList = new RecordValue();
		$this->cssColors = new RecordValue();
		$this->css = new RecordValue();
		$this->styleVars = new RecordValue();
		$this->replacements = new RecordValue();
		$this->editorStyles = new RecordValue();
		$this->userSelect = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->importStyleId = new RecordValue();
    }
    
    public function hasStyleId(): bool
    {
        return $this->styleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId->getValue();
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId->setChanged(true);
        $this->styleId->setValue($styleId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasParentId(): bool
    {
        return $this->parentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId->getValue();
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId->setChanged(true);
        $this->parentId->setValue($parentId);
    }
    
    public function hasParentList(): bool
    {
        return $this->parentList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getParentList() : string
    {
        return $this->parentList->getValue();
    }

    /**
     * @param string $parentList
     */
    public function setParentList(string $parentList)
    {
        $this->parentList->setChanged(true);
        $this->parentList->setValue($parentList);
    }
    
    public function hasTemplateList(): bool
    {
        return $this->templateList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTemplateList() : string
    {
        return $this->templateList->getValue();
    }

    /**
     * @param string $templateList
     */
    public function setTemplateList(string $templateList)
    {
        $this->templateList->setChanged(true);
        $this->templateList->setValue($templateList);
    }
    
    public function hasCssColors(): bool
    {
        return $this->cssColors->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCssColors() : string
    {
        return $this->cssColors->getValue();
    }

    /**
     * @param string $cssColors
     */
    public function setCssColors(string $cssColors)
    {
        $this->cssColors->setChanged(true);
        $this->cssColors->setValue($cssColors);
    }
    
    public function hasCss(): bool
    {
        return $this->css->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCss() : string
    {
        return $this->css->getValue();
    }

    /**
     * @param string $css
     */
    public function setCss(string $css)
    {
        $this->css->setChanged(true);
        $this->css->setValue($css);
    }
    
    public function hasStyleVars(): bool
    {
        return $this->styleVars->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getStyleVars() : string
    {
        return $this->styleVars->getValue();
    }

    /**
     * @param string $styleVars
     */
    public function setStyleVars(string $styleVars)
    {
        $this->styleVars->setChanged(true);
        $this->styleVars->setValue($styleVars);
    }
    
    public function hasReplacements(): bool
    {
        return $this->replacements->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReplacements() : string
    {
        return $this->replacements->getValue();
    }

    /**
     * @param string $replacements
     */
    public function setReplacements(string $replacements)
    {
        $this->replacements->setChanged(true);
        $this->replacements->setValue($replacements);
    }
    
    public function hasEditorStyles(): bool
    {
        return $this->editorStyles->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getEditorStyles() : string
    {
        return $this->editorStyles->getValue();
    }

    /**
     * @param string $editorStyles
     */
    public function setEditorStyles(string $editorStyles)
    {
        $this->editorStyles->setChanged(true);
        $this->editorStyles->setValue($editorStyles);
    }
    
    public function hasUserSelect(): bool
    {
        return $this->userSelect->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserSelect() : int
    {
        return $this->userSelect->getValue();
    }

    /**
     * @param int $userSelect
     */
    public function setUserSelect(int $userSelect)
    {
        $this->userSelect->setChanged(true);
        $this->userSelect->setValue($userSelect);
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
    
    public function hasImportStyleId(): bool
    {
        return $this->importStyleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportStyleId() : int
    {
        return $this->importStyleId->getValue();
    }

    /**
     * @param int $importStyleId
     */
    public function setImportStyleId(int $importStyleId)
    {
        $this->importStyleId->setChanged(true);
        $this->importStyleId->setValue($importStyleId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Style
    {
        return new Style();
    }
}