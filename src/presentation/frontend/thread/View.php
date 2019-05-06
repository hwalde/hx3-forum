<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\thread;

/**  @var $model Model */
$thread = $model->getThreadPage();
?>
<div id="thread-detail">
    <h2><?=$thread->getThreadDetail()->getTitle()?></h2>
    <div class="posts">
        <?php foreach ($thread->getThreadPostList() as $post) : ?>
            <div class="post">
                <?php if($post->getTitle()!='') : ?>
                <h3 class="post-title"><?=$post->getTitle()?></h3>
                <?php endif; ?>
                <div class="post-content-wrap">
                <div class="post-content">
                    <?=$post->getContent()?>
                </div>
                </div>
                <div class="post-footer">
                    <div class="post-date">
                        <?=$post->getCreationDateTime()->format('d.m.Y - G:i')?> Uhr
                    </div>
                    <div class="post-author">
                        <?=$post->getCreationUserName()?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<br>
<a href="<?=createURL("")?>">Go to Overview</a>

