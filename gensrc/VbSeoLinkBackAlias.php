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

class VbSeoLinkBackAlias extends TableAlias {
   
    public function tId() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_id', $this->getAliasName());
    }
    public function tTime() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_time', $this->getAliasName());
    }
    public function tSrcUrl() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_src_url', $this->getAliasName());
    }
    public function tDestUrl() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_dest_url', $this->getAliasName());
    }
    public function tType() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_type', $this->getAliasName());
    }
    public function tPostId() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_postid', $this->getAliasName());
    }
    public function tPostCount() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_postcount', $this->getAliasName());
    }
    public function tThreadId() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_threadid', $this->getAliasName());
    }
    public function tPage() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_page', $this->getAliasName());
    }
    public function tTitle() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_title', $this->getAliasName());
    }
    public function tText() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_text', $this->getAliasName());
    }
    public function tApprove() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_approve', $this->getAliasName());
    }
    public function tWait() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_wait', $this->getAliasName());
    }
    public function tIncoming() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_incoming', $this->getAliasName());
    }
    public function tDeleted() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_deleted', $this->getAliasName());
    }
    public function tHits() : ColumnField
    {
        return new ColumnField('vbseo_linkback', 't_hits', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->tId(),
			$this->tTime(),
			$this->tSrcUrl(),
			$this->tDestUrl(),
			$this->tType(),
			$this->tPostId(),
			$this->tPostCount(),
			$this->tThreadId(),
			$this->tPage(),
			$this->tTitle(),
			$this->tText(),
			$this->tApprove(),
			$this->tWait(),
			$this->tIncoming(),
			$this->tDeleted(),
			$this->tHits()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbSeoLinkBackRecord
    {
        return new VbSeoLinkBackRecord();
    }
}