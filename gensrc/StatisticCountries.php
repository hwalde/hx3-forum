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

class StatisticCountries implements Table {

    const table = 'statistik_laender';
   
    public static function as(string $aliasName): StatisticCountriesAlias
    {
        return new StatisticCountriesAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::id(),
			self::countryCode(),
			self::countryName(),
			self::flagLink(),
			self::balkenLink(),
			self::hostCounter(),
			self::browserLanguageCounter()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticCountriesRecord
    {
        return new StatisticCountriesRecord();
    }
    
    public static function id() : ColumnField
    {
        return new ColumnField('statistik_laender', 'ID');
    }
    public static function countryCode() : ColumnField
    {
        return new ColumnField('statistik_laender', 'Kuerzel_Land');
    }
    public static function countryName() : ColumnField
    {
        return new ColumnField('statistik_laender', 'Name_Land');
    }
    public static function flagLink() : ColumnField
    {
        return new ColumnField('statistik_laender', 'flagge_link');
    }
    public static function balkenLink() : ColumnField
    {
        return new ColumnField('statistik_laender', 'balken_link');
    }
    public static function hostCounter() : ColumnField
    {
        return new ColumnField('statistik_laender', 'Zaehler_Hoster');
    }
    public static function browserLanguageCounter() : ColumnField
    {
        return new ColumnField('statistik_laender', 'Zaehler_Browsersprache');
    }

    public function getTableName(): string
    {
        return 'statistik_laender';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'Kuerzel_Land', 'Name_Land', 'flagge_link', 'balken_link', 'Zaehler_Hoster', 'Zaehler_Browsersprache'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'ID' => 'integer', 
			'Kuerzel_Land' => 'string', 
			'Name_Land' => 'string', 
			'flagge_link' => 'string', 
			'balken_link' => 'string', 
			'Zaehler_Hoster' => 'integer', 
			'Zaehler_Browsersprache' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'ID' => 'id', 
			'Kuerzel_Land' => 'countryCode', 
			'Name_Land' => 'countryName', 
			'flagge_link' => 'flagLink', 
			'balken_link' => 'balkenLink', 
			'Zaehler_Hoster' => 'hostCounter', 
			'Zaehler_Browsersprache' => 'browserLanguageCounter'
		];
    }

}