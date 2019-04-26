<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use POOQ\CodeGeneration\CodeGenerator;
use POOQ\CodeGeneration\CodeGeneratorConfig;
use POOQ\CodeGeneration\ModelName2NamespaceMap;

include __DIR__.'/../config.php';
include_once __DIR__.'/../vendor/autoload.php';

$genSrcFolderPath = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'gensrc';
$config = new CodeGeneratorConfig($genSrcFolderPath);
$config->setCopyrightInformation(
    <<<END
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
END
);

$config->setNameMap(
    include __DIR__.'/name-mapping.php'
);


$config->setModelName2NamespaceMap(new ModelName2NamespaceMap(
    include __DIR__.'/namespace-mapping.php'
));

$generator = new CodeGenerator($config);
$generator->convertDatabase('hx3', DB_USERNAME, DB_PASSWORD,
    DB_HOSTNAME, DB_PORT);


