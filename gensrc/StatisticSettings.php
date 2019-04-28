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

class StatisticSettings implements Table {

    const table = 'statistik_einstellungen';
   
    public static function as(string $aliasName): StatisticSettingsAlias
    {
        return new StatisticSettingsAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::reset(),
			self::logTime(),
			self::DOMAIN(),
			self::topThread(),
			self::popThread(),
			self::popForum(),
			self::newRegister(),
			self::visit(),
			self::writtenThreads(),
			self::writtenPost(),
			self::topPoster(),
			self::xDays(),
			self::xThreads(),
			self::polls(),
			self::sticky(),
			self::search(),
			self::topref(),
			self::topld()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticSettingsRecord
    {
        return new StatisticSettingsRecord();
    }
    
    public static function reset() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'RESET');
    }
    public static function logTime() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'LOGTIME');
    }
    public static function DOMAIN() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'DOMAIN');
    }
    public static function topThread() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'TOPTHREAD');
    }
    public static function popThread() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'POPTHREAD');
    }
    public static function popForum() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'POPFORUM');
    }
    public static function newRegister() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'NEWREGISTER');
    }
    public static function visit() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'VISIT');
    }
    public static function writtenThreads() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'WRITTENTHREADS');
    }
    public static function writtenPost() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'WRITTENPOST');
    }
    public static function topPoster() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'TOPPOSTER');
    }
    public static function xDays() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'XDAYS');
    }
    public static function xThreads() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'XTHREADS');
    }
    public static function polls() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'POLLS');
    }
    public static function sticky() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'STICKY');
    }
    public static function search() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'SEARCH');
    }
    public static function topref() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'TOPREF');
    }
    public static function topld() : ColumnField
    {
        return new ColumnField('statistik_einstellungen', 'TOPLD');
    }

    public function getTableName(): string
    {
        return 'statistik_einstellungen';
    }
    
    public function __listColumns() : array
    {
        return ['RESET', 'LOGTIME', 'DOMAIN', 'TOPTHREAD', 'POPTHREAD', 'POPFORUM', 'NEWREGISTER', 'VISIT', 'WRITTENTHREADS', 'WRITTENPOST', 'TOPPOSTER', 'XDAYS', 'XTHREADS', 'POLLS', 'STICKY', 'SEARCH', 'TOPREF', 'TOPLD'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'RESET' => 'integer', 
			'LOGTIME' => 'integer', 
			'DOMAIN' => 'string', 
			'TOPTHREAD' => 'integer', 
			'POPTHREAD' => 'integer', 
			'POPFORUM' => 'integer', 
			'NEWREGISTER' => 'integer', 
			'VISIT' => 'integer', 
			'WRITTENTHREADS' => 'integer', 
			'WRITTENPOST' => 'integer', 
			'TOPPOSTER' => 'integer', 
			'XDAYS' => 'integer', 
			'XTHREADS' => 'integer', 
			'POLLS' => 'integer', 
			'STICKY' => 'integer', 
			'SEARCH' => 'integer', 
			'TOPREF' => 'integer', 
			'TOPLD' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'RESET' => 'reset', 
			'LOGTIME' => 'logTime', 
			'DOMAIN' => 'DOMAIN', 
			'TOPTHREAD' => 'topThread', 
			'POPTHREAD' => 'popThread', 
			'POPFORUM' => 'popForum', 
			'NEWREGISTER' => 'newRegister', 
			'VISIT' => 'visit', 
			'WRITTENTHREADS' => 'writtenThreads', 
			'WRITTENPOST' => 'writtenPost', 
			'TOPPOSTER' => 'topPoster', 
			'XDAYS' => 'xDays', 
			'XTHREADS' => 'xThreads', 
			'POLLS' => 'polls', 
			'STICKY' => 'sticky', 
			'SEARCH' => 'search', 
			'TOPREF' => 'topref', 
			'TOPLD' => 'topld'
		];
    }

}