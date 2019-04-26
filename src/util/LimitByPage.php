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
class LimitByPage extends Limit
{
    /**
     * SQL Limit defined by pagination
     * @param int $page Page-Number starting from 1
     * @param int $limitPerPage Maximum number of entries per page
     */
    public function __construct(int $page, int $limitPerPage)
    {
        parent::__construct($limitPerPage, $page*$limitPerPage);
    }
}