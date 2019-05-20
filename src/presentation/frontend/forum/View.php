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
<div id="forum-detail">

    <!-- Pagination navigation -->
    <div class="pagination">
        <ul>
            <?php
            $pageCount = count($model->getDetail()->getPaginationPageList());
            foreach ($model->getDetail()->getPaginationPageList() as $index => $page) : ?>
                <?php $isLastPage = $index == $pageCount - 1;
                if (!$isLastPage) : ?>
                    <li><a href="<?= $page->getUrl() ?>"><?= $page->getTitle() ?></a></li>
                <?php else: ?>
                    <!--li><?= $page->getTitle() ?></li-->
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>

    <!-- Page title -->
    <h2><?= $model->getDetail()->getForumTitle() ?></h2>

    <!-- SubForums -->
    <?php
    $forumList = $model->getDetail()->getSubForumList();
    $hasForums = count($forumList) > 0;
    if ($hasForums) {
        ?>
        <div id="sub-forum-list">
            <ul>
                <?php foreach ($forumList as $forum) { ?>
                    <li>
                        <a href="<?= $forum->getUrl() ?>">
                            <div class="content">
                                <?= $forum->getTitle() ?>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <!-- Threads -->
        <?php
    }
    $threadList = $model->getDetail()->getThreadList();
    $hasThreads = count($threadList) > 0;
    if ($hasThreads) {
        ?>
        <div id="sub-thread-list">
            <ul>
                <?php foreach ($threadList as $thread) { ?>
                    <li>
                        <a href="<?= $thread->getUrl() ?>">
                            <div class="content">
                                <?= $thread->getTitle() ?>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php
    }
    ?>

    <!-- Page list -->
    <?php if(count($model->getDetail()->getPageList())>0) : ?>
        <div class="page-list">
            <?php if(count($model->getDetail()->getPageList())>1): ?>
                <div class="label">Seiten:</div>
            <?php else: ?>
                <div class="label">Seite:</div>
            <?php endif; ?>
            <ul>
                <?php foreach ($model->getDetail()->getPageList() as $page) : ?>
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
    <?php endif; ?>

</div>
