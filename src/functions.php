<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use POOQ\FieldOrTable;
use POOQ\SelectFromPart;
use POOQ\SelectQueryBuilder;
use util\DependencyInjectionContainer;

function createPath($path) : string
{
    return APPLICATION_PATH.'/'.$path;
}
function createURL($path) : string
{
    return APPLICATION_PATH.'/'.$path;
}

/*function &System() {
    static $instance = null;
    if($instance != null) {
        return $instance;
    }
    $instance = new class {

    };
    return $instance;
}*/

function &DiContainer() : DependencyInjectionContainer
{
    static $instance = null;
    if($instance === null) {
        $instance = new DependencyInjectionContainer();
    }
    return $instance;
}

