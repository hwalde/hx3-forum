<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum\overview;

use businesslogic\forum\ForumPermissionService;
use businesslogic\forum\ForumRecord;
use businesslogic\forum\ForumRecordList;
use businesslogic\forum\ForumRepository;
use util\SeoNameGenerator;

class ForumOverviewService
{
    /** @var ForumRepository */
    private $repository;

    /** @var ForumPermissionService  */
    private $permissionService;

    public function __construct(ForumRepository $repository, ForumPermissionService $permissionService)
    {
        $this->repository = $repository;
        $this->permissionService = $permissionService;
    }

    /**
     * @return ForumOverviewGroupList
     */
    public function getForumGroupList() : ForumOverviewGroupList
    {
        $list = new ForumOverviewGroupList();

        $topLevelForumList = $this->repository->selectAllTopLevel();

        $secondLevelForumList = $this->repository->selectByParentIdList(
            $topLevelForumList->extractForumIds()
        );

        $this->hydrateGroupList($list, $topLevelForumList, $secondLevelForumList);

        return $list;
    }

    /**
     * @param ForumOverviewGroup[] $groupList
     * @param ForumRecord[] $topLevelList
     * @param ForumRecord[] $subForumList
     */
    private function hydrateGroupList(ForumOverviewGroupList $groupList, ForumRecordList $topLevelList, ForumRecordList $subForumList): void
    {
        foreach ($topLevelList as $forum) {
            $group = new ForumOverviewGroup();
            $this->hydrateGroup($group, $forum, $subForumList);
            $groupList[] = $group;
        }
    }

    /**
     * @param ForumOverviewGroup $overviewGroup
     * @param ForumRecord $topLevelForum
     * @param ForumRecord[] $andLevelForumList
     */
    private function hydrateGroup(ForumOverviewGroup $overviewGroup, ForumRecord $topLevelForum, ForumRecordList $andLevelForumList): void
    {
        $overviewGroup->setForumId($topLevelForum->getForumId());
        $overviewGroup->setTitle($topLevelForum->getTitle());

        $nameGenerator = new SeoNameGenerator();
        $overviewGroup->setHashName($nameGenerator->generateName($topLevelForum->getTitle()));
        $overviewGroup->setUrl(
            $this->generateGroupUrl($nameGenerator, $topLevelForum)
        );

        $this->hydrateGroupForumList($overviewGroup, $andLevelForumList);
    }

    private function generateGroupUrl(SeoNameGenerator $nameGenerator, ForumRecord $topLevelForum): string
    {
        $hash = $nameGenerator->generateForumGroupHash(
            $topLevelForum->getTitle()
        );
        return APPLICATION_PATH . '/' . $hash;
    }

    /**
     * @param ForumOverviewGroup $overviewGroup
     * @param ForumRecord[] $andLevelForumList
     */
    private function hydrateGroupForumList(ForumOverviewGroup $overviewGroup, ForumRecordList $andLevelForumList): void
    {
        foreach ($andLevelForumList as $forum) {
            if ($forum->getParentid() == $overviewGroup->getForumId()) {
                $overviewForum = new ForumOverviewForum();
                $this->hydrateForum($overviewForum, $forum);
                $overviewGroup->addForum($overviewForum);
            }
        }
    }

    /**
     * @param ForumOverviewForum $overviewForum
     * @param ForumRecord $forum
     */
    private function hydrateForum(ForumOverviewForum $overviewForum, ForumRecord $forum): void
    {
        $overviewForum->setId($forum->getForumId());
        $overviewForum->setTitle($forum->getTitle());
        $overviewForum->setUrl($forum->getUrlPath());
    }
}