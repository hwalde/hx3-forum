<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend;

/**  @var $model Model */

$assetPath = createPath("assets");
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>HX3 Forum</title>

    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">





    <!-- REPLACE THIS BEFORE GOING LIVE: -->
    <META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW">





    <link rel="shortcut icon" href="<?=$assetPath?>/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
    <link rel="stylesheet" href="<?=$assetPath?>/css/main.min.css">
</head>
<body>
    <div id="header">
        <logo>HX3 Forum</logo>
    </div>
    <div id="content">
        <?=$model->getContent()?>
    </div>
    <div id="footer">
        &copy; HX3.de 2019
    </div>
</body>
</html>