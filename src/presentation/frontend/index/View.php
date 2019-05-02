<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\index;

/**  @var $model Model */
?>
<h2>Foren</h2>
<ul>
    <?php foreach ($model->getOverview()->getGroupList() as $group) : ?>
    <li>
        <a href="<?=$group->getUrl()?>"><?=$group->getTitle()?></a> (<?=$group->getForumId()?>)
        <ul>
            <?php foreach ($group->getForumList() as $forum) : ?>
                <li><a href="<?=$forum->getUrl()?>"><?=$forum->getTitle()?></a> (<?=$forum->getId()?>)</li>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php endforeach; ?>
</ul>
