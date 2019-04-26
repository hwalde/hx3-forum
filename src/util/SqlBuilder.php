<?php
declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;


class SqlBuilder
{
    /** @var string[] */
    private $columnList;

    /** @var string */
    private $from;

    /** @var array */
    private $joinList = [];

    /** @var string */
    private $where;

    /** @var Order */
    private $order;

    /** @var Limit */
    private $limit;

    public function select(string ...$columns) : SqlBuilder
    {
        $this->columnList = $columns;
        return $this;
    }

    public function from(string $tableName) : SqlBuilder
    {
        $this->from = $tableName;
        return $this;
    }

    public function join(string $tableName) : SqlBuilder
    {
        $this->joinList[] = ['JOIN', $tableName];
        return $this;
    }

    public function leftJoin(string $tableName) : SqlBuilder
    {
        $this->joinList[] = ['LEFT JOIN', $tableName];
        return $this;
    }

    public function innerJoin(string $tableName) : SqlBuilder
    {
        $this->joinList[] = ['INNER JOIN', $tableName];
        return $this;
    }

    public function rightJoin(string $tableName) : SqlBuilder
    {
        $this->joinList[] = ['RIGHT JOIN', $tableName];
        return $this;
    }

    public function on(string $equation) : SqlBuilder
    {
        $lastIndex = count($this->joinList)-1;
        $this->joinList[$lastIndex][2] = $equation;
        return $this;
    }

    public function where(string $where) : SqlBuilder
    {
        $this->where = $where;
        return $this;
    }

    public function order(Order $order) : SqlBuilder
    {
        $this->order = $order;
        return $this;
    }

    public function limit(Limit $limit) : SqlBuilder
    {
        $this->limit = $limit;
        return $this;
    }

    public function generateSql() : string
    {
        $sql = $this->generateSelectSql();
        $sql .= ' FROM '.$this->from;
        $sql .= $this->generateJoinSql();
        $sql .= $this->generateWhereSql();
        $sql .= $this->generateOrderSql();
        $sql .= $this->generateLimitSql();
        return $sql;
    }

    private function generateSelectSql(): string
    {
        $quotedColumnList = [];
        foreach ($this->columnList as $columnName) {
            $quotedColumnList[] = Database()->quoteIdentifier($columnName);
        }
        $columnString = implode(', ', $quotedColumnList);
        return 'SELECT '.$columnString;
    }

    private function generateJoinSql(): string
    {
        $joinSql = '';
        foreach ($this->joinList as $join) {
            $joinSql .= ' ' . $join[0] . ' ' . $join[1];
            if(isset($join[2])) {
                $joinSql .= ' ON ' . $join[2];
            }
        }
        return $joinSql;
    }

    private function generateWhereSql(): string
    {
        $where = '';
        if (isset($this->where)) {
            $where .= ' WHERE ' . $this->where;
        }
        return $where;
    }

    private function generateOrderSql()
    {
        if (isset($this->order)) {
            return ' '.$this->order->getSQLOrderClause();
        }
        return '';
    }

    private function generateLimitSql()
    {
        if (isset($this->limit)) {
            return ' '.$this->limit->getSQLLimitClause();
        }
        return '';
    }


}