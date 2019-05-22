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

use businesslogic\forum\overview\ForumOverviewGroup;
use businesslogic\forum\overview\ForumOverviewGroupList;

class ForumOverviewPage
{
    /** @var ForumOverviewGroupList */
    private $groupList;

    public function __construct()
    {
        $this->groupList = new ForumOverviewGroupList();
    }

    /**
     * @return ForumOverviewGroup[]
     */
    public function getGroupList(): ForumOverviewGroupList
    {
        return $this->groupList;
    }

    public function setGroupList(ForumOverviewGroupList $groupList): void
    {
        $this->groupList = $groupList;
    }
}