<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\forum;

/**  @var $model Model */
?>
<h2><?=$model->getDetail()->getForumTitle()?> (<?=$model->getDetail()->getForumId()?>)</h2>
<div id="forum-detail">
<?php
$forumList = $model->getDetail()->getSubForumList();
$hasForums = count($forumList)>0;
if($hasForums) {
?>
    <div id="sub-forum-list">
        <ul>
        <?php foreach ($forumList as $forum) { ?>
            <li>
                <a href="<?=$forum->getUrl()?>">
                    <div class="content">
                        <?=$forum->getTitle()?>
                    </div>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
<?php
}
$threadList = $model->getDetail()->getThreadList();
$hasThreads = count($threadList)>0;
if($hasThreads) {
?>
    <table class="sub-thread-list">
        <?php foreach ($threadList as $thread) { ?>
            <tr>
                <td><?=$thread->getTitle()?></td>
            </tr>
        <?php } ?>
    </table>
<?php
}
?>
</div>
<br>
<a href="<?=createURL("")?>">Go to Overview</a>

