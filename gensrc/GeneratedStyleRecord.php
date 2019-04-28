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

class GeneratedStyleRecord implements Record {
    
    /** @var $styleId int */
    private $styleId;
    
    /** @var $title string */
    private $title;
    
    /** @var $parentId int */
    private $parentId;
    
    /** @var $parentList string */
    private $parentList;
    
    /** @var $templateList string */
    private $templateList;
    
    /** @var $cssColors string */
    private $cssColors;
    
    /** @var $css string */
    private $css;
    
    /** @var $styleVars string */
    private $styleVars;
    
    /** @var $replacements string */
    private $replacements;
    
    /** @var $editorStyles string */
    private $editorStyles;
    
    /** @var $userSelect int */
    private $userSelect;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $importStyleId int */
    private $importStyleId;
    
    public function hasStyleId(): bool
    {
        return isset($this->styleId);
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId;
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId = $styleId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasParentId(): bool
    {
        return isset($this->parentId);
    }    

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
    }
    
    public function hasParentList(): bool
    {
        return isset($this->parentList);
    }    

    /**
     * @return string
     */
    public function getParentList() : string
    {
        return $this->parentList;
    }

    /**
     * @param string $parentList
     */
    public function setParentList(string $parentList)
    {
        $this->parentList = $parentList;
    }
    
    public function hasTemplateList(): bool
    {
        return isset($this->templateList);
    }    

    /**
     * @return string
     */
    public function getTemplateList() : string
    {
        return $this->templateList;
    }

    /**
     * @param string $templateList
     */
    public function setTemplateList(string $templateList)
    {
        $this->templateList = $templateList;
    }
    
    public function hasCssColors(): bool
    {
        return isset($this->cssColors);
    }    

    /**
     * @return string
     */
    public function getCssColors() : string
    {
        return $this->cssColors;
    }

    /**
     * @param string $cssColors
     */
    public function setCssColors(string $cssColors)
    {
        $this->cssColors = $cssColors;
    }
    
    public function hasCss(): bool
    {
        return isset($this->css);
    }    

    /**
     * @return string
     */
    public function getCss() : string
    {
        return $this->css;
    }

    /**
     * @param string $css
     */
    public function setCss(string $css)
    {
        $this->css = $css;
    }
    
    public function hasStyleVars(): bool
    {
        return isset($this->styleVars);
    }    

    /**
     * @return string
     */
    public function getStyleVars() : string
    {
        return $this->styleVars;
    }

    /**
     * @param string $styleVars
     */
    public function setStyleVars(string $styleVars)
    {
        $this->styleVars = $styleVars;
    }
    
    public function hasReplacements(): bool
    {
        return isset($this->replacements);
    }    

    /**
     * @return string
     */
    public function getReplacements() : string
    {
        return $this->replacements;
    }

    /**
     * @param string $replacements
     */
    public function setReplacements(string $replacements)
    {
        $this->replacements = $replacements;
    }
    
    public function hasEditorStyles(): bool
    {
        return isset($this->editorStyles);
    }    

    /**
     * @return string
     */
    public function getEditorStyles() : string
    {
        return $this->editorStyles;
    }

    /**
     * @param string $editorStyles
     */
    public function setEditorStyles(string $editorStyles)
    {
        $this->editorStyles = $editorStyles;
    }
    
    public function hasUserSelect(): bool
    {
        return isset($this->userSelect);
    }    

    /**
     * @return int
     */
    public function getUserSelect() : int
    {
        return $this->userSelect;
    }

    /**
     * @param int $userSelect
     */
    public function setUserSelect(int $userSelect)
    {
        $this->userSelect = $userSelect;
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
    
    public function hasImportStyleId(): bool
    {
        return isset($this->importStyleId);
    }    

    /**
     * @return int
     */
    public function getImportStyleId() : int
    {
        return $this->importStyleId;
    }

    /**
     * @param int $importStyleId
     */
    public function setImportStyleId(int $importStyleId)
    {
        $this->importStyleId = $importStyleId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Style
    {
        return new Style();
    }
}