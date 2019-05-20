<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\forum;
 
use businesslogic\forum\detail\ForumPaginationRecord;
use businesslogic\forum\detail\ForumPaginationRecordList;
use generated\Forum;
use generated\ForumAlias;
use generated\ForumPermission;
use generated\ForumPermissionAlias;
use generated\GeneratedForumRepository;
use POOQ\Condition;
use function POOQ\select;
use function POOQ\value;
use util\exception\NotFoundException;

class ForumRepository extends GeneratedForumRepository {
    /**
     * @param int $forumId
     * @return ForumRecord
     * @throws NotFoundException
     */
    public function selectById(int $forumId) : ForumRecord
    {
        $f = Forum::as('f');
        $p = ForumPermission::as('p');
        $recordList = $this->selectAllViewable($f, $p, $f->forumId()->eq(value($forumId)));
        if(count($recordList)<1) {
            throw new NotFoundException();
        }
        return current($recordList);
    }

    private function selectAllViewable(ForumAlias $f, ForumPermissionAlias $p, Condition $furtherCondition): ForumRecordList
    {
        $canViewForum = $this->getCanViewForumCondition($f, $p);

        return select($f)
            ->from($f)
            ->leftJoin($p)->on($p->forumId()->eq($f->forumId()))
            ->where(
                $furtherCondition
                    ->and($canViewForum)
            )
            ->order($f->displayOrder()->asc())
            ->fetchAll()
            ->into($f);
    }

    private function getCanViewForumCondition(ForumAlias $f, ForumPermissionAlias $p): Condition
    {
        $isForumActive = $f->options()->bitAnd(value(ForumOptions::BITMASK_active));

        $hasNoPermissionInfo = $p->forumPermissions()->isNull();
        $hasPermissionToViewForum = $p->forumPermissions()->bitAnd(value(ForumPermissionRecord::BITMASK_canview));
        $permissiomGroupIs1 = $p->userGroupId()->eq(value(1));

        $canViewForum = $isForumActive->and(
            $hasNoPermissionInfo->or(
                $hasPermissionToViewForum->and($permissiomGroupIs1)
            )
        );
        return $canViewForum;
    }

    /**
     * @return ForumRecord[]
     */
    public function selectAllTopLevel() : ForumRecordList
    {
        $f = Forum::as('f');
        $p = ForumPermission::as('p');

        $isTopLevelForum = $f->parentId()->eq(value(-1));
        return $this->selectAllViewable($f, $p, $isTopLevelForum);
    }

    /**
     * @param int[] $forumIdList
     * @return ForumRecord[]
     */
    public function selectByParentIdList(array $forumIdList) : ForumRecordList
    {
        $f = Forum::as('f');
        $p = ForumPermission::as('p');

        $isSecondLevel = $f->parentId()->in($forumIdList);
        return $this->selectAllViewable($f, $p, $isSecondLevel);
    }

    /**
     * @todo: Return reduces set
     * @todo: Use interface as return type (to tell the user which fields are in the reduces set)
     * @return ForumRecord[]
     */
    public function selectAllByParentId(int $forumId): ForumRecordList
    {
        $f = Forum::as('f');
        $p = ForumPermission::as('p');
        return $this->selectAllViewable($f, $p, $f->parentId()->eq(value($forumId)));
    }

    /**
     * @return ForumPaginationRecord[]
     */
    public function selectAllPaginationList(int $forumId): ForumPaginationRecordList
    {
        $f = Forum::as('f');

        /** @var ForumRecord $forumRecord */
        $forumRecord = select($f->forumId(), $f->title(), $f->parentList(), $f->parentId())
            ->from($f)
            ->where($f->forumId()->eq(value($forumId)))
            ->fetch()
            ->into($f);

        $hasParents = strlen(trim($forumRecord->getParentList()))>0;
        if(!$hasParents) {
            return new ForumPaginationRecordList([$forumRecord]);
        }

        $parentIdList = explode(',', $forumRecord->getParentList());
        $forumRecordList = select($f->forumId(), $f->title(), $f->parentId())
            ->from($f)
            ->where($f->forumId()->in($parentIdList))
            ->order($f->parentList()->length()->asc())
            ->fetchAll()
            ->into($f);
        return new ForumPaginationRecordList($forumRecordList);
    }
}