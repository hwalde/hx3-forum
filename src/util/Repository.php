<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;


use POOQ\Record;
use util\exception\NotFoundException;

abstract class Repository
{
    /**
     * @throws NotFoundException
     */
    protected function selectFromModel(Record $table, ?string $where = null, array $bindValues = [])
    {
        $list = $this->selectAllFromModel($table, $where, $bindValues);
        if(count($list)===0) {
            throw new NotFoundException();
        }
        return current($list);
    }

    protected function selectAllFromModel(Record $table, ?string $where = null, array $bindValues = [], ?Order $order = null, ?Limit $limit = null) : array
    {
        $sql = $this->generateSQL($table, $where, $order, $limit);
        $rows = Database()->selectAll($sql, $bindValues);
        if($rows===FALSE) {
            throw new \Error("Failed to read from database!");
        }
        return $this->convertRowsToModelArray($table, $rows);
    }

    private function generateSQL(Record $table, ?string $where, ?Order $order, ?Limit $limit)
    {
        $tableName = $this->getContant($table, 'table');
        if(isset($where)) {
            $where = ' '.$where;
        } else {
            $where = '';
        }
        if(isset($order)) {
            $order = ' '.$order->getSQLOrderClause();
        } else {
            $order = '';
        }
        if(isset($limit)) {
            $limit = ' '.$limit->getSQLLimitClause();
        } else {
            $limit = '';
        }
        return 'SELECT '.$tableName.'.* FROM '.$tableName.$where.$order.$limit;
    }

    private function getContant(Record $table, $constantName) {
        $name = get_class($table).'::'.$constantName;
        if (defined($name)) {
            return constant($name);
        } else {
            throw new \Error("Can't access ::$constantName of table \"".get_class($table)."\"!");
        }
    }

    protected function convertRowsToModelArray(Record $table, array $rows): array
    {
        $list = [];
        $className = get_class($table);
        foreach ($rows as $row) {
            $newTable = new $className();
            $this->hydrateModel($newTable, $row);
            $list[] = $newTable;
        }
        return $list;
    }

    protected function hydrateModel(Record $table, array $row): void
    {
        $column2NameMap = $table->__getColumn2NameMap();
        foreach ($table->__listColumns() as $columnName) {
            if (isset($row[$columnName])) {
                $this->hydrateModelField($table, $column2NameMap, $columnName, $row);
            }
        }
    }

    protected function hydrateModelField(Record $table, array $column2NameMap, string $columnName, array $row): void
    {
        $camelCaseName = $column2NameMap[$columnName];
        $setterMethodName = 'set' . strtoupper($camelCaseName[0]) . substr($camelCaseName, 1);
        $table->$setterMethodName($row[$columnName]);
    }
}