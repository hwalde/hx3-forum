<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum\detail;


use util\AbstractList;

class DetailSubForumList extends AbstractList
{
    function getListElementType()
    {
        return DetailSubForum::class;
    }
}