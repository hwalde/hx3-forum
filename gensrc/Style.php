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

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class Style implements Table {

    const table = 'style';
   
    public static function as(string $aliasName): StyleAlias
    {
        return new StyleAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::styleId(),
			self::title(),
			self::parentId(),
			self::parentList(),
			self::templateList(),
			self::cssColors(),
			self::css(),
			self::styleVars(),
			self::replacements(),
			self::editorStyles(),
			self::userSelect(),
			self::displayOrder(),
			self::importStyleId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StyleRecord
    {
        return new StyleRecord();
    }
    
    public static function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'Style', 'style', 'styleid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Style', 'style', 'title');
    }
    public static function parentId() : ColumnField
    {
        return new ColumnField('parentId', 'Style', 'style', 'parentid');
    }
    public static function parentList() : ColumnField
    {
        return new ColumnField('parentList', 'Style', 'style', 'parentlist');
    }
    public static function templateList() : ColumnField
    {
        return new ColumnField('templateList', 'Style', 'style', 'templatelist');
    }
    public static function cssColors() : ColumnField
    {
        return new ColumnField('cssColors', 'Style', 'style', 'csscolors');
    }
    public static function css() : ColumnField
    {
        return new ColumnField('css', 'Style', 'style', 'css');
    }
    public static function styleVars() : ColumnField
    {
        return new ColumnField('styleVars', 'Style', 'style', 'stylevars');
    }
    public static function replacements() : ColumnField
    {
        return new ColumnField('replacements', 'Style', 'style', 'replacements');
    }
    public static function editorStyles() : ColumnField
    {
        return new ColumnField('editorStyles', 'Style', 'style', 'editorstyles');
    }
    public static function userSelect() : ColumnField
    {
        return new ColumnField('userSelect', 'Style', 'style', 'userselect');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Style', 'style', 'displayorder');
    }
    public static function importStyleId() : ColumnField
    {
        return new ColumnField('importStyleId', 'Style', 'style', 'importstyleid');
    }

    public function getTableName(): string
    {
        return 'style';
    }
    
    public function __listColumns() : array
    {
        return ['styleid', 'title', 'parentid', 'parentlist', 'templatelist', 'csscolors', 'css', 'stylevars', 'replacements', 'editorstyles', 'userselect', 'displayorder', 'importstyleid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['styleid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'styleid' => 'integer', 
			'title' => 'string', 
			'parentid' => 'integer', 
			'parentlist' => 'string', 
			'templatelist' => 'string', 
			'csscolors' => 'string', 
			'css' => 'string', 
			'stylevars' => 'string', 
			'replacements' => 'string', 
			'editorstyles' => 'string', 
			'userselect' => 'integer', 
			'displayorder' => 'integer', 
			'importstyleid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'styleid' => 'styleId', 
			'title' => 'title', 
			'parentid' => 'parentId', 
			'parentlist' => 'parentList', 
			'templatelist' => 'templateList', 
			'csscolors' => 'cssColors', 
			'css' => 'css', 
			'stylevars' => 'styleVars', 
			'replacements' => 'replacements', 
			'editorstyles' => 'editorStyles', 
			'userselect' => 'userSelect', 
			'displayorder' => 'displayOrder', 
			'importstyleid' => 'importStyleId'
		];
    }
}