<?php
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

class OverviewService
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
     * @return Overview
     */
    public function getOverview() : Overview
    {
        $overview = new Overview();

        $topLevelForumList = $this->repository->selectAllTopLevel();

        $secondLevelForumList = $this->repository->selectByParentIdList(
            $topLevelForumList->extractForumIds()
        );

        //$secondLevelForumList = $this->permissionService->removeNotPermittedForumsFromList($secondLevelForumList);

        $this->hydrateOverview($overview, $topLevelForumList, $secondLevelForumList);

        return $overview;
    }

    /**
     * @param Overview $overview
     * @param ForumRecord[] $topLevelList
     * @param ForumRecord[] $subForumList
     */
    private function hydrateOverview(Overview $overview, ForumRecordList $topLevelList, ForumRecordList $subForumList): void
    {
        foreach ($topLevelList as $forum) {
            $group = new OverviewGroup();
            $this->hydrateGroup($group, $forum, $subForumList);
            $overview->addGroup($group);
        }
    }

    /**
     * @param OverviewGroup $overviewGroup
     * @param ForumRecord $topLevelForum
     * @param ForumRecord[] $andLevelForumList
     */
    private function hydrateGroup(OverviewGroup $overviewGroup, ForumRecord $topLevelForum, ForumRecordList $andLevelForumList): void
    {
        $overviewGroup->setForumId($topLevelForum->getForumId());
        $overviewGroup->setTitle($topLevelForum->getTitle());
        $overviewGroup->setUrl($this->generateGroupUrl($topLevelForum));

        $this->hydrateGroupForumList($overviewGroup, $andLevelForumList);
    }

    private function generateGroupUrl(ForumRecord $topLevelForum): string
    {
        $nameGenerator = new SeoNameGenerator();
        $hash = $nameGenerator->generateForumGroupHash(
            $topLevelForum->getTitle()
        );
        return APPLICATION_PATH . '/' . $hash;
    }

    /**
     * @param OverviewGroup $overviewGroup
     * @param ForumRecord[] $andLevelForumList
     */
    private function hydrateGroupForumList(OverviewGroup $overviewGroup, ForumRecordList $andLevelForumList): void
    {
        foreach ($andLevelForumList as $forum) {
            if ($forum->getParentid() == $overviewGroup->getForumId()) {
                $overviewForum = new OverviewForum();
                $this->hydrateForum($overviewForum, $forum);
                $overviewGroup->addForum($overviewForum);
            }
        }
    }

    /**
     * @param OverviewForum $overviewForum
     * @param ForumRecord $forum
     */
    private function hydrateForum(OverviewForum $overviewForum, ForumRecord $forum): void
    {
        $overviewForum->setId($forum->getForumId());
        $overviewForum->setTitle($forum->getTitle());
        $overviewForum->setUrl($forum->getUrlPath());
    }
}