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

class AttachmentViews implements Table {

    const table = 'attachmentviews';
   
    public static function as(string $aliasName): AttachmentViewsAlias
    {
        return new AttachmentViewsAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::attachmentId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentViewsRecord
    {
        return new AttachmentViewsRecord();
    }
    
    public static function attachmentId() : ColumnField
    {
        return new ColumnField('attachmentId', 'AttachmentViews', 'attachmentviews', 'attachmentid');
    }

    public function getTableName(): string
    {
        return 'attachmentviews';
    }
    
    public function __listColumns() : array
    {
        return ['attachmentid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'attachmentid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'attachmentid' => 'attachmentId'
		];
    }
}