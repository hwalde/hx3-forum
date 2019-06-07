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

class StatisticSettingsAlias extends TableAlias {
   
    public function reset() : ColumnField
    {
        return new ColumnField('reset', 'StatisticSettings', 'statistik_einstellungen', 'RESET', $this->getAliasName());
    }
    public function logTime() : ColumnField
    {
        return new ColumnField('logTime', 'StatisticSettings', 'statistik_einstellungen', 'LOGTIME', $this->getAliasName());
    }
    public function DOMAIN() : ColumnField
    {
        return new ColumnField('DOMAIN', 'StatisticSettings', 'statistik_einstellungen', 'DOMAIN', $this->getAliasName());
    }
    public function topThread() : ColumnField
    {
        return new ColumnField('topThread', 'StatisticSettings', 'statistik_einstellungen', 'TOPTHREAD', $this->getAliasName());
    }
    public function popThread() : ColumnField
    {
        return new ColumnField('popThread', 'StatisticSettings', 'statistik_einstellungen', 'POPTHREAD', $this->getAliasName());
    }
    public function popForum() : ColumnField
    {
        return new ColumnField('popForum', 'StatisticSettings', 'statistik_einstellungen', 'POPFORUM', $this->getAliasName());
    }
    public function newRegister() : ColumnField
    {
        return new ColumnField('newRegister', 'StatisticSettings', 'statistik_einstellungen', 'NEWREGISTER', $this->getAliasName());
    }
    public function visit() : ColumnField
    {
        return new ColumnField('visit', 'StatisticSettings', 'statistik_einstellungen', 'VISIT', $this->getAliasName());
    }
    public function writtenThreads() : ColumnField
    {
        return new ColumnField('writtenThreads', 'StatisticSettings', 'statistik_einstellungen', 'WRITTENTHREADS', $this->getAliasName());
    }
    public function writtenPost() : ColumnField
    {
        return new ColumnField('writtenPost', 'StatisticSettings', 'statistik_einstellungen', 'WRITTENPOST', $this->getAliasName());
    }
    public function topPoster() : ColumnField
    {
        return new ColumnField('topPoster', 'StatisticSettings', 'statistik_einstellungen', 'TOPPOSTER', $this->getAliasName());
    }
    public function xDays() : ColumnField
    {
        return new ColumnField('xDays', 'StatisticSettings', 'statistik_einstellungen', 'XDAYS', $this->getAliasName());
    }
    public function xThreads() : ColumnField
    {
        return new ColumnField('xThreads', 'StatisticSettings', 'statistik_einstellungen', 'XTHREADS', $this->getAliasName());
    }
    public function polls() : ColumnField
    {
        return new ColumnField('polls', 'StatisticSettings', 'statistik_einstellungen', 'POLLS', $this->getAliasName());
    }
    public function sticky() : ColumnField
    {
        return new ColumnField('sticky', 'StatisticSettings', 'statistik_einstellungen', 'STICKY', $this->getAliasName());
    }
    public function search() : ColumnField
    {
        return new ColumnField('search', 'StatisticSettings', 'statistik_einstellungen', 'SEARCH', $this->getAliasName());
    }
    public function topref() : ColumnField
    {
        return new ColumnField('topref', 'StatisticSettings', 'statistik_einstellungen', 'TOPREF', $this->getAliasName());
    }
    public function topld() : ColumnField
    {
        return new ColumnField('topld', 'StatisticSettings', 'statistik_einstellungen', 'TOPLD', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_einstellungen';
    }
    
    public function __listColumns() : array
    {
        return ['RESET', 'LOGTIME', 'DOMAIN', 'TOPTHREAD', 'POPTHREAD', 'POPFORUM', 'NEWREGISTER', 'VISIT', 'WRITTENTHREADS', 'WRITTENPOST', 'TOPPOSTER', 'XDAYS', 'XTHREADS', 'POLLS', 'STICKY', 'SEARCH', 'TOPREF', 'TOPLD'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->reset(),
			$this->logTime(),
			$this->DOMAIN(),
			$this->topThread(),
			$this->popThread(),
			$this->popForum(),
			$this->newRegister(),
			$this->visit(),
			$this->writtenThreads(),
			$this->writtenPost(),
			$this->topPoster(),
			$this->xDays(),
			$this->xThreads(),
			$this->polls(),
			$this->sticky(),
			$this->search(),
			$this->topref(),
			$this->topld()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticSettingsRecord
    {
        return new StatisticSettingsRecord();
    }
}