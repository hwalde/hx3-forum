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
        return new ColumnField('sessionHash', 'Session', 'session', 'sessionhash', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Session', 'session', 'userid', $this->getAliasName());
    }
    public function host() : ColumnField
    {
        return new ColumnField('host', 'Session', 'session', 'host', $this->getAliasName());
    }
    public function idHash() : ColumnField
    {
        return new ColumnField('idHash', 'Session', 'session', 'idhash', $this->getAliasName());
    }
    public function lastActivity() : ColumnField
    {
        return new ColumnField('lastActivity', 'Session', 'session', 'lastactivity', $this->getAliasName());
    }
    public function location() : ColumnField
    {
        return new ColumnField('location', 'Session', 'session', 'location', $this->getAliasName());
    }
    public function userAgent() : ColumnField
    {
        return new ColumnField('userAgent', 'Session', 'session', 'useragent', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'Session', 'session', 'styleid', $this->getAliasName());
    }
    public function loggedIn() : ColumnField
    {
        return new ColumnField('loggedIn', 'Session', 'session', 'loggedin', $this->getAliasName());
    }
    public function inForum() : ColumnField
    {
        return new ColumnField('inForum', 'Session', 'session', 'inforum', $this->getAliasName());
    }
    public function inThread() : ColumnField
    {
        return new ColumnField('inThread', 'Session', 'session', 'inthread', $this->getAliasName());
    }
    public function inCalendar() : ColumnField
    {
        return new ColumnField('inCalendar', 'Session', 'session', 'incalendar', $this->getAliasName());
    }
    public function badLocation() : ColumnField
    {
        return new ColumnField('badLocation', 'Session', 'session', 'badlocation', $this->getAliasName());
    }
    public function bypass() : ColumnField
    {
        return new ColumnField('bypass', 'Session', 'session', 'bypass', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('languageId', 'Session', 'session', 'languageid', $this->getAliasName());
    }
    public function profileUpdate() : ColumnField
    {
        return new ColumnField('profileUpdate', 'Session', 'session', 'profileupdate', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'session';
    }
    
    public function __listColumns() : array
    {
        return ['sessionhash', 'userid', 'host', 'idhash', 'lastactivity', 'location', 'useragent', 'styleid', 'loggedin', 'inforum', 'inthread', 'incalendar', 'badlocation', 'bypass', 'languageid', 'profileupdate'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['sessionhash'];
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