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

class UserTextFieldAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserTextField', 'usertextfield', 'userid', $this->getAliasName());
    }
    public function subFolders() : ColumnField
    {
        return new ColumnField('subFolders', 'UserTextField', 'usertextfield', 'subfolders', $this->getAliasName());
    }
    public function pmFolders() : ColumnField
    {
        return new ColumnField('pmFolders', 'UserTextField', 'usertextfield', 'pmfolders', $this->getAliasName());
    }
    public function buddyList() : ColumnField
    {
        return new ColumnField('buddyList', 'UserTextField', 'usertextfield', 'buddylist', $this->getAliasName());
    }
    public function ignoreList() : ColumnField
    {
        return new ColumnField('ignoreList', 'UserTextField', 'usertextfield', 'ignorelist', $this->getAliasName());
    }
    public function signature() : ColumnField
    {
        return new ColumnField('signature', 'UserTextField', 'usertextfield', 'signature', $this->getAliasName());
    }
    public function searchPrefs() : ColumnField
    {
        return new ColumnField('searchPrefs', 'UserTextField', 'usertextfield', 'searchprefs', $this->getAliasName());
    }
    public function rank() : ColumnField
    {
        return new ColumnField('rank', 'UserTextField', 'usertextfield', 'rank', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'usertextfield';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'subfolders', 'pmfolders', 'buddylist', 'ignorelist', 'signature', 'searchprefs', 'rank'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'subfolders' => 'string', 
			'pmfolders' => 'string', 
			'buddylist' => 'string', 
			'ignorelist' => 'string', 
			'signature' => 'string', 
			'searchprefs' => 'string', 
			'rank' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'subfolders' => 'subFolders', 
			'pmfolders' => 'pmFolders', 
			'buddylist' => 'buddyList', 
			'ignorelist' => 'ignoreList', 
			'signature' => 'signature', 
			'searchprefs' => 'searchPrefs', 
			'rank' => 'rank'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->subFolders(),
			$this->pmFolders(),
			$this->buddyList(),
			$this->ignoreList(),
			$this->signature(),
			$this->searchPrefs(),
			$this->rank()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserTextFieldRecord
    {
        return new UserTextFieldRecord();
    }
}