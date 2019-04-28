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

class Plugin implements Table {

    const table = 'plugin';
   
    public static function as(string $aliasName): PluginAlias
    {
        return new PluginAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pluginId(),
			self::title(),
			self::hookName(),
			self::phpCode(),
			self::product(),
			self::devKey(),
			self::active(),
			self::executionOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PluginRecord
    {
        return new PluginRecord();
    }
    
    public static function pluginId() : ColumnField
    {
        return new ColumnField('plugin', 'pluginid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('plugin', 'title');
    }
    public static function hookName() : ColumnField
    {
        return new ColumnField('plugin', 'hookname');
    }
    public static function phpCode() : ColumnField
    {
        return new ColumnField('plugin', 'phpcode');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('plugin', 'product');
    }
    public static function devKey() : ColumnField
    {
        return new ColumnField('plugin', 'devkey');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('plugin', 'active');
    }
    public static function executionOrder() : ColumnField
    {
        return new ColumnField('plugin', 'executionorder');
    }

    public function getTableName(): string
    {
        return 'plugin';
    }
    
    public function __listColumns() : array
    {
        return ['pluginid', 'title', 'hookname', 'phpcode', 'product', 'devkey', 'active', 'executionorder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pluginid' => 'integer', 
			'title' => 'string', 
			'hookname' => 'string', 
			'phpcode' => 'string', 
			'product' => 'string', 
			'devkey' => 'string', 
			'active' => 'integer', 
			'executionorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pluginid' => 'pluginId', 
			'title' => 'title', 
			'hookname' => 'hookName', 
			'phpcode' => 'phpCode', 
			'product' => 'product', 
			'devkey' => 'devKey', 
			'active' => 'active', 
			'executionorder' => 'executionOrder'
		];
    }

}