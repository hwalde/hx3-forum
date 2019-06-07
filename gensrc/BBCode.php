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

class BBCode implements Table {

    const table = 'bbcode';
   
    public static function as(string $aliasName): BBCodeAlias
    {
        return new BBCodeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::bbCodeId(),
			self::bbBodeTag(),
			self::bbCodeReplacement(),
			self::bbCodeExample(),
			self::bbCodeExplanation(),
			self::twoParams(),
			self::title(),
			self::buttonImage(),
			self::options()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : BBCodeRecord
    {
        return new BBCodeRecord();
    }
    
    public static function bbCodeId() : ColumnField
    {
        return new ColumnField('bbCodeId', 'BBCode', 'bbcode', 'bbcodeid');
    }
    public static function bbBodeTag() : ColumnField
    {
        return new ColumnField('bbBodeTag', 'BBCode', 'bbcode', 'bbcodetag');
    }
    public static function bbCodeReplacement() : ColumnField
    {
        return new ColumnField('bbCodeReplacement', 'BBCode', 'bbcode', 'bbcodereplacement');
    }
    public static function bbCodeExample() : ColumnField
    {
        return new ColumnField('bbCodeExample', 'BBCode', 'bbcode', 'bbcodeexample');
    }
    public static function bbCodeExplanation() : ColumnField
    {
        return new ColumnField('bbCodeExplanation', 'BBCode', 'bbcode', 'bbcodeexplanation');
    }
    public static function twoParams() : ColumnField
    {
        return new ColumnField('twoParams', 'BBCode', 'bbcode', 'twoparams');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'BBCode', 'bbcode', 'title');
    }
    public static function buttonImage() : ColumnField
    {
        return new ColumnField('buttonImage', 'BBCode', 'bbcode', 'buttonimage');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'BBCode', 'bbcode', 'options');
    }

    public function getTableName(): string
    {
        return 'bbcode';
    }
    
    public function __listColumns() : array
    {
        return ['bbcodeid', 'bbcodetag', 'bbcodereplacement', 'bbcodeexample', 'bbcodeexplanation', 'twoparams', 'title', 'buttonimage', 'options'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['bbcodeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'bbcodeid' => 'integer', 
			'bbcodetag' => 'string', 
			'bbcodereplacement' => 'string', 
			'bbcodeexample' => 'string', 
			'bbcodeexplanation' => 'string', 
			'twoparams' => 'integer', 
			'title' => 'string', 
			'buttonimage' => 'string', 
			'options' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'bbcodeid' => 'bbCodeId', 
			'bbcodetag' => 'bbBodeTag', 
			'bbcodereplacement' => 'bbCodeReplacement', 
			'bbcodeexample' => 'bbCodeExample', 
			'bbcodeexplanation' => 'bbCodeExplanation', 
			'twoparams' => 'twoParams', 
			'title' => 'title', 
			'buttonimage' => 'buttonImage', 
			'options' => 'options'
		];
    }
}