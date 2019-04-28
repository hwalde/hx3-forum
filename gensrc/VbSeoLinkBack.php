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

class VbSeoLinkBack implements Table {

    const table = 'vbseo_linkback';
   
    public static function as(string $aliasName): VbSeoLinkBackAlias
    {
        return new VbSeoLinkBackAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::tId(),
			self::tTime(),
			self::tSrcUrl(),
			self::tDestUrl(),
			self::tType(),
			self::tPostId(),
			self::tPostCount(),
			self::tThreadId(),
			self::tPage(),
			self::tTitle(),
			self::tText(),
			self::tApprove(),
			self::tWait(),
			self::tIncoming(),
			self::tDeleted(),
			self::tHits()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbSeoLinkBackRecord
    {
        return new VbSeoLinkBackRecord();
    }
    
    public static function tId() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_id');
    }
    public static function tTime() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_time');
    }
    public static function tSrcUrl() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_src_url');
    }
    public static function tDestUrl() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_dest_url');
    }
    public static function tType() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_type');
    }
    public static function tPostId() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_postid');
    }
    public static function tPostCount() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_postcount');
    }
    public static function tThreadId() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_threadid');
    }
    public static function tPage() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_page');
    }
    public static function tTitle() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_title');
    }
    public static function tText() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_text');
    }
    public static function tApprove() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_approve');
    }
    public static function tWait() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_wait');
    }
    public static function tIncoming() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_incoming');
    }
    public static function tDeleted() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_deleted');
    }
    public static function tHits() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_hits');
    }

    public function getTableName(): string
    {
        return 'vbseo_linkback';
    }
    
    public function __listColumns() : array
    {
        return ['t_id', 't_time', 't_src_url', 't_dest_url', 't_type', 't_postid', 't_postcount', 't_threadid', 't_page', 't_title', 't_text', 't_approve', 't_wait', 't_incoming', 't_deleted', 't_hits'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			't_id' => 'integer', 
			't_time' => 'integer', 
			't_src_url' => 'string', 
			't_dest_url' => 'string', 
			't_type' => 'integer', 
			't_postid' => 'integer', 
			't_postcount' => 'integer', 
			't_threadid' => 'integer', 
			't_page' => 'integer', 
			't_title' => 'string', 
			't_text' => 'string', 
			't_approve' => 'integer', 
			't_wait' => 'integer', 
			't_incoming' => 'integer', 
			't_deleted' => 'integer', 
			't_hits' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			't_id' => 'tId', 
			't_time' => 'tTime', 
			't_src_url' => 'tSrcUrl', 
			't_dest_url' => 'tDestUrl', 
			't_type' => 'tType', 
			't_postid' => 'tPostId', 
			't_postcount' => 'tPostCount', 
			't_threadid' => 'tThreadId', 
			't_page' => 'tPage', 
			't_title' => 'tTitle', 
			't_text' => 'tText', 
			't_approve' => 'tApprove', 
			't_wait' => 'tWait', 
			't_incoming' => 'tIncoming', 
			't_deleted' => 'tDeleted', 
			't_hits' => 'tHits'
		];
    }

}