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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;

class PluginAlias extends TableAlias {
   
    public function pluginId() : ColumnField
    {
        return new ColumnField('plugin', 'pluginid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('plugin', 'title', $this->getAliasName());
    }
    public function hookName() : ColumnField
    {
        return new ColumnField('plugin', 'hookname', $this->getAliasName());
    }
    public function phpCode() : ColumnField
    {
        return new ColumnField('plugin', 'phpcode', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('plugin', 'product', $this->getAliasName());
    }
    public function devKey() : ColumnField
    {
        return new ColumnField('plugin', 'devkey', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('plugin', 'active', $this->getAliasName());
    }
    public function executionOrder() : ColumnField
    {
        return new ColumnField('plugin', 'executionorder', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pluginId(),
			$this->title(),
			$this->hookName(),
			$this->phpCode(),
			$this->product(),
			$this->devKey(),
			$this->active(),
			$this->executionOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PluginRecord
    {
        return new PluginRecord();
    }
}