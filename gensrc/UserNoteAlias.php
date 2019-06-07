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

class UserNoteAlias extends TableAlias {
   
    public function usernoteid() : ColumnField
    {
        return new ColumnField('usernoteid', 'UserNote', 'usernote', 'usernoteid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserNote', 'usernote', 'userid', $this->getAliasName());
    }
    public function posterid() : ColumnField
    {
        return new ColumnField('posterid', 'UserNote', 'usernote', 'posterid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('userName', 'UserNote', 'usernote', 'username', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'UserNote', 'usernote', 'dateline', $this->getAliasName());
    }
    public function message() : ColumnField
    {
        return new ColumnField('message', 'UserNote', 'usernote', 'message', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'UserNote', 'usernote', 'title', $this->getAliasName());
    }
    public function allowSmilies() : ColumnField
    {
        return new ColumnField('allowSmilies', 'UserNote', 'usernote', 'allowsmilies', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'usernote';
    }
    
    public function __listColumns() : array
    {
        return ['usernoteid', 'userid', 'posterid', 'username', 'dateline', 'message', 'title', 'allowsmilies'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['usernoteid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usernoteid' => 'integer', 
			'userid' => 'integer', 
			'posterid' => 'integer', 
			'username' => 'string', 
			'dateline' => 'integer', 
			'message' => 'string', 
			'title' => 'string', 
			'allowsmilies' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usernoteid' => 'usernoteid', 
			'userid' => 'userId', 
			'posterid' => 'posterid', 
			'username' => 'userName', 
			'dateline' => 'dateLine', 
			'message' => 'message', 
			'title' => 'title', 
			'allowsmilies' => 'allowSmilies'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->usernoteid(),
			$this->userId(),
			$this->posterid(),
			$this->userName(),
			$this->dateLine(),
			$this->message(),
			$this->title(),
			$this->allowSmilies()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserNoteRecord
    {
        return new UserNoteRecord();
    }
}