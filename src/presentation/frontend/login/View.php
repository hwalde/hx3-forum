<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\login;

/**  @var $model Model */
?>

<h1>Login</h1>

<? if ($model->isLoggedIn()) { ?>
Hallo <?=$model->getUsername()?>,
<? } else { ?>
Hallo Gast,
<? } ?>

<? if($model->hasError()) { ?>
    <div class="error">
        Es trat ein Fehler auf: <?=$model->getError()?>
    </div>
<? } ?>

<a href="<?=createURL("")?>">Go to Index</a>