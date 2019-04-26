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
class Limit
{
    /** @var $from int */
    private $amount;

    /** @var $from int|null */
    private $from;

    /**
     * Limit constructor.
     * @param int|null $from
     * @param int $amount
     */
    public function __construct(int $amount, ?int $from)
    {
        $this->amount = $amount;
        $this->from = $from;
    }

    public function getSQLLimitClause() : string {
        if($this->from===null) {
            return 'LIMIT '.$this->amount;
        }
        return 'LIMIT '.$this->from.', '.$this->amount;
    }
}