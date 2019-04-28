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

use POOQ\Collection\AbstractList;
use POOQ\Collection\VariableType;
use POOQ\Collection\VariableTypeInstance;
use businesslogic\post\PostRecord;

class GeneratedPostRecordList extends AbstractList
{
    function getListElementType(): VariableType
    {
        return new VariableTypeInstance(PostRecord::class);
    }
}