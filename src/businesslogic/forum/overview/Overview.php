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


class Overview
{
    /** @var OverviewGroupList */
    private $groupList;

    public function __construct()
    {
        $this->groupList = new OverviewGroupList();
    }

    /**
     * @return OverviewGroup[]
     */
    public function getGroupList(): OverviewGroupList
    {
        return $this->groupList;
    }

    public function setGroupList(OverviewGroupList $groupList): void
    {
        $this->groupList = $groupList;
    }

    public function addGroup(OverviewGroup $group) {
        $this->groupList[] = $group;
    }
}