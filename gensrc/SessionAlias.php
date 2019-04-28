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

class SessionAlias extends TableAlias {
   
    public function sessionHash() : ColumnField
    {
        return new ColumnField('session', 'sessionhash', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('session', 'userid', $this->getAliasName());
    }
    public function host() : ColumnField
    {
        return new ColumnField('session', 'host', $this->getAliasName());
    }
    public function idHash() : ColumnField
    {
        return new ColumnField('session', 'idhash', $this->getAliasName());
    }
    public function lastActivity() : ColumnField
    {
        return new ColumnField('session', 'lastactivity', $this->getAliasName());
    }
    public function location() : ColumnField
    {
        return new ColumnField('session', 'location', $this->getAliasName());
    }
    public function userAgent() : ColumnField
    {
        return new ColumnField('session', 'useragent', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('session', 'styleid', $this->getAliasName());
    }
    public function loggedIn() : ColumnField
    {
        return new ColumnField('session', 'loggedin', $this->getAliasName());
    }
    public function inForum() : ColumnField
    {
        return new ColumnField('session', 'inforum', $this->getAliasName());
    }
    public function inThread() : ColumnField
    {
        return new ColumnField('session', 'inthread', $this->getAliasName());
    }
    public function inCalendar() : ColumnField
    {
        return new ColumnField('session', 'incalendar', $this->getAliasName());
    }
    public function badLocation() : ColumnField
    {
        return new ColumnField('session', 'badlocation', $this->getAliasName());
    }
    public function bypass() : ColumnField
    {
        return new ColumnField('session', 'bypass', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('session', 'languageid', $this->getAliasName());
    }
    public function profileUpdate() : ColumnField
    {
        return new ColumnField('session', 'profileupdate', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'session';
    }
    
    public function __listColumns() : array
    {
        return ['sessionhash', 'userid', 'host', 'idhash', 'lastactivity', 'location', 'useragent', 'styleid', 'loggedin', 'inforum', 'inthread', 'incalendar', 'badlocation', 'bypass', 'languageid', 'profileupdate'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'sessionhash' => 'string', 
			'userid' => 'integer', 
			'host' => 'string', 
			'idhash' => 'string', 
			'lastactivity' => 'integer', 
			'location' => 'string', 
			'useragent' => 'string', 
			'styleid' => 'integer', 
			'loggedin' => 'integer', 
			'inforum' => 'integer', 
			'inthread' => 'integer', 
			'incalendar' => 'integer', 
			'badlocation' => 'integer', 
			'bypass' => 'integer', 
			'languageid' => 'integer', 
			'profileupdate' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'sessionhash' => 'sessionHash', 
			'userid' => 'userId', 
			'host' => 'host', 
			'idhash' => 'idHash', 
			'lastactivity' => 'lastActivity', 
			'location' => 'location', 
			'useragent' => 'userAgent', 
			'styleid' => 'styleId', 
			'loggedin' => 'loggedIn', 
			'inforum' => 'inForum', 
			'inthread' => 'inThread', 
			'incalendar' => 'inCalendar', 
			'badlocation' => 'badLocation', 
			'bypass' => 'bypass', 
			'languageid' => 'languageId', 
			'profileupdate' => 'profileUpdate'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->sessionHash(),
			$this->userId(),
			$this->host(),
			$this->idHash(),
			$this->lastActivity(),
			$this->location(),
			$this->userAgent(),
			$this->styleId(),
			$this->loggedIn(),
			$this->inForum(),
			$this->inThread(),
			$this->inCalendar(),
			$this->badLocation(),
			$this->bypass(),
			$this->languageId(),
			$this->profileUpdate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SessionRecord
    {
        return new SessionRecord();
    }
}