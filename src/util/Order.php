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


/**
 * @deprecated
 */
class Order
{
    const ASC = 'ASC';
    const DESC = 'DESC';

    /** @var $orderList array */
    private $orderList = [];

    /**
     * @param string $columnName
     * @param string $direction Order::ASC or Order::DESC
     */
    public function addOrder(string $columnName, string $direction) : Order
    {
        $this->validateDirection($direction);
        $this->orderList[] = Database()->quoteIdentifier($columnName).' '.$direction;
        return $this;
    }

    /**
     * @throws \ErrorException
     */
    private function validateDirection(string $direction)
    {
        switch ($direction) {
            case self::ASC:
            case self::DESC:
                return;
        }
        throw new \ErrorException('Unknown direction "'.$direction.'"!');
    }

    public function getSQLOrderClause(): string
    {
        if(count($this->orderList)<1) {
            return '';
        }
        return 'ORDER BY '.implode(',', $this->orderList);
    }

}