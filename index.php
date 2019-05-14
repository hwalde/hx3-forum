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

include_once 'bootstrap.php';

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
    $lastIndex = count($pathParts)-1;
    if($pathParts[$lastIndex] === '') {
        unset($pathParts[$lastIndex]);
    }

    if(!isset($pathParts[0]) || $pathParts[0] === '/') {
        $controller = new \presentation\frontend\index\Controller();
        $controller->index();
    } else if($pathParts[0] === 'login') {
        $controller = new \presentation\frontend\login\Controller();
        $controller->index();
    } else if(count($pathParts) === 1) {
        $parts = explode('-', $pathParts[0]);
        $forumId = end($parts);
        $controller = new \presentation\frontend\forum\Controller();
        $controller->index($forumId);
    } else if(count($pathParts) === 2) {
        $parts = explode('-', $pathParts[0]);
        $forumId = end($parts);
        $parts = explode('-', $pathParts[1]);
        $threadId = end($parts);
        $controller = new \presentation\frontend\thread\Controller();
        $controller->index($forumId, $threadId);
    } else if(count($pathParts) === 3) {
        $parts = explode('-', $pathParts[0]);
        $forumId = end($parts);
        $parts = explode('-', $pathParts[1]);
        $threadId = end($parts);
        $pageNumber = $pathParts[2];
        $controller = new \presentation\frontend\thread\Controller();
        $controller->index($forumId, $threadId, $pageNumber);
    } else {
        throw new NotFoundException();
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


