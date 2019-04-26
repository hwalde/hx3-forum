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

<?php
$forumList = $model->getDetail()->getSubForumList();
$hasForums = count($forumList)>0;
if($hasForums) {
?>
    <table>
        <?php foreach ($forumList as $forum) { ?>
            <tr>
                <td><?=$forum->getTitle()?></td>
            </tr>
        <?php } ?>
    </table>
<?php
}
$threadList = $model->getDetail()->getThreadList();
$hasThreads = count($threadList)>0;
if($hasThreads) {
?>
    <table>
        <?php foreach ($threadList as $thread) { ?>
            <tr>
                <td><?=$thread->getTitle()?></td>
            </tr>
        <?php } ?>
    </table>
<?php
}
?>
<a href="<?=createURL("")?>">Go to Overview</a>

