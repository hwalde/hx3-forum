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

    <!-- Pagination navigation -->
    <div class="pagination">
        <ul>
            <?php
            $pageCount = count($thread->getPaginationPageList());
            foreach ($thread->getPaginationPageList() as $index => $page) : ?>
                <?php $isLastPage = $index == $pageCount - 1;
                if (!$isLastPage) : ?>
                    <li><a href="<?= $page->getUrl() ?>"><?= $page->getTitle() ?></a></li>
                <?php else: ?>
                    <!--li><?= $page->getTitle() ?></li-->
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>

    <!-- Thread title -->
    <h2><?=$thread->getThreadDetail()->getTitle()?></h2>

    <!-- Posts -->
    <div class="posts">
        <?php foreach ($thread->getThreadPostList() as $index => $post) : ?>
            <div class="post">
                <?php if($index>0 && $post->getTitle()!='') : ?>
                    <h3 class="post-title"><?=$post->getTitle()?></h3>
                <?php endif; ?>
                <div class="post-content-wrap">
                <div class="post-content">
                    <?=$post->getContent()?>
                </div>
                </div>
                <div class="post-footer">
                    <div class="post-author">
                        <?=$post->getCreationUserName()?>
                    </div>
                    <div class="post-date">
                        <?=$post->getCreationDateTime()->format('d.m.Y - G:i')?> Uhr
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Page list -->
    <div class="page-list">
        <?php if(count($thread->getPageList())>1): ?>
            <div class="label">Seiten:</div>
        <?php else: ?>
            <div class="label">Seite:</div>
        <?php endif; ?>
        <ul>
            <?php foreach ($thread->getPageList() as $page) : ?>
                <li>
                    <?php if($page->isActive()): ?>
                        <strong>
                            <?=$page->getTitle()?>
                        </strong>
                    <?php else: ?>
                        <?php if($page->hasUrl()) : ?>
                            <a href="<?=$page->getUrl()?>"><?=$page->getTitle()?></a>
                        <?php else: ?>
                            <?=$page->getTitle()?>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>

