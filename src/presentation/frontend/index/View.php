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
<div id="forum-overview">

    <?php foreach ($model->getOverview()->getGroupList() as $group) : ?>
        <h2>
            <!--a href="<?=$group->getUrl()?>"-->
                <?=$group->getTitle()?>
            <!--/a-->
        </h2>
        <div id="sub-forum-list">
            <ul>
                <?php foreach ($group->getForumList() as $forum) : ?>
                <li>
                    <a href="<?= $forum->getUrl() ?>">
                        <div class="content">
                            <?= $forum->getTitle() ?>
                        </div>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>

</div>
