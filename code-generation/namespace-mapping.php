<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use POOQ\CodeGeneration\NamespaceObject;

$businesslogicFolderPath = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'/src/businesslogic';

return [
    'Post' => new NamespaceObject(
        'businesslogic\\post',
        $businesslogicFolderPath.'/post'
    ),
    'Forum' => new NamespaceObject(
        'businesslogic\\forum',
        $businesslogicFolderPath.'/forum'
    ),
    'ForumPermission' => new NamespaceObject(
        'businesslogic\\forum',
        $businesslogicFolderPath.'/forum'
    ),
    'Thread' => new NamespaceObject(
        'businesslogic\\thread',
        $businesslogicFolderPath.'/thread'
    ),
];