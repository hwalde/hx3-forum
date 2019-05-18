<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
include_once "config.php";
include_once "vendor/autoload.php";
include_once "src/functions.php";
include_once "src/util/Psr4AutoloaderClass.php";
include_once "vendor/jbbcode/jbbcode/JBBCode/Parser.php";

$autoloader = new \util\Psr4AutoloaderClass();
$autoloader->addNamespace("businesslogic", __DIR__.'/src/businesslogic');
$autoloader->addNamespace("generated", __DIR__.'/gensrc');
$autoloader->addNamespace("presentation", __DIR__.'/src/presentation');
$autoloader->addNamespace("restapi", __DIR__.'/src/restapi');
$autoloader->addNamespace("util", __DIR__.'/src/util');
$autoloader->register();

\POOQ\POOQ::initilize(DB_NAME, DB_USERNAME,
    DB_PASSWORD, DB_HOSTNAME, DB_PORT);