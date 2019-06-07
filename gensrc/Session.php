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

class Session implements Table {

    const table = 'session';
   
    public static function as(string $aliasName): SessionAlias
    {
        return new SessionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::sessionHash(),
			self::userId(),
			self::host(),
			self::idHash(),
			self::lastActivity(),
			self::location(),
			self::userAgent(),
			self::styleId(),
			self::loggedIn(),
			self::inForum(),
			self::inThread(),
			self::inCalendar(),
			self::badLocation(),
			self::bypass(),
			self::languageId(),
			self::profileUpdate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SessionRecord
    {
        return new SessionRecord();
    }
    
    public static function sessionHash() : ColumnField
    {
        return new ColumnField('sessionHash', 'Session', 'session', 'sessionhash');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'Session', 'session', 'userid');
    }
    public static function host() : ColumnField
    {
        return new ColumnField('host', 'Session', 'session', 'host');
    }
    public static function idHash() : ColumnField
    {
        return new ColumnField('idHash', 'Session', 'session', 'idhash');
    }
    public static function lastActivity() : ColumnField
    {
        return new ColumnField('lastActivity', 'Session', 'session', 'lastactivity');
    }
    public static function location() : ColumnField
    {
        return new ColumnField('location', 'Session', 'session', 'location');
    }
    public static function userAgent() : ColumnField
    {
        return new ColumnField('userAgent', 'Session', 'session', 'useragent');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'Session', 'session', 'styleid');
    }
    public static function loggedIn() : ColumnField
    {
        return new ColumnField('loggedIn', 'Session', 'session', 'loggedin');
    }
    public static function inForum() : ColumnField
    {
        return new ColumnField('inForum', 'Session', 'session', 'inforum');
    }
    public static function inThread() : ColumnField
    {
        return new ColumnField('inThread', 'Session', 'session', 'inthread');
    }
    public static function inCalendar() : ColumnField
    {
        return new ColumnField('inCalendar', 'Session', 'session', 'incalendar');
    }
    public static function badLocation() : ColumnField
    {
        return new ColumnField('badLocation', 'Session', 'session', 'badlocation');
    }
    public static function bypass() : ColumnField
    {
        return new ColumnField('bypass', 'Session', 'session', 'bypass');
    }
    public static function languageId() : ColumnField
    {
        return new ColumnField('languageId', 'Session', 'session', 'languageid');
    }
    public static function profileUpdate() : ColumnField
    {
        return new ColumnField('profileUpdate', 'Session', 'session', 'profileupdate');
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
}