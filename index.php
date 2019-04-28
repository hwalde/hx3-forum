<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use util\exception\NotFoundException;

include "config.php";
include "vendor/autoload.php";
include "src/functions.php";
include "src/util/Psr4AutoloaderClass.php";

$autoloader = new \util\Psr4AutoloaderClass();
$autoloader->addNamespace("businesslogic", __DIR__.'/src/businesslogic');
$autoloader->addNamespace("generated", __DIR__.'/gensrc');
$autoloader->addNamespace("presentation", __DIR__.'/src/presentation');
$autoloader->addNamespace("restapi", __DIR__.'/src/restapi');
$autoloader->addNamespace("util", __DIR__.'/src/util');
$autoloader->register();

\POOQ\POOQ::initilize(DB_NAME, DB_USERNAME,
    DB_PASSWORD, DB_HOSTNAME);

if(!isset($_REQUEST["path"])) {
    $_REQUEST["path"] = "";
}
$pathParts = explode("/", $_REQUEST["path"]);
if(!isset($pathParts[0])) {
    $pathParts[0] = null;
}

if($pathParts[0] === 'assets') {
    http_response_code(404);
    exit;
}

try {
    switch ($pathParts[0]) {
        case 'login':
            $controller = new \presentation\frontend\login\Controller();
            $controller->index();
            break;
        case '':
        case '/':
            $controller = new \presentation\frontend\index\Controller();
            $controller->index();
            break;
        default:
            $parts = explode('-', $pathParts[0]);
            $forumId = end($parts);
            $controller = new \presentation\frontend\forum\Controller();
            $controller->index($forumId);
            break;
    }
    echo $controller->render();
} catch (NotFoundException $e) {
    $controller = new \presentation\frontend\error404\Controller();
    $controller->index();
    echo $controller->render();
} catch (\Throwable $e) {
    /**
     * @ToDo: Render nice error page and log error instead
     */
    throw $e;
}


