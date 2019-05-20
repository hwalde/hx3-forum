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

class OverviewGroup
{
    /** @var int */
    private $forumId;

    /** @var string */
    private $title;

    /** @var string */
    private $hashName;

    /** @var string */
    private $url;

    /** @var OverviewForumList */
    private $forumList;

    public function __construct()
    {
        $this->forumList = new OverviewForumList();
    }

    public function getForumId(): int
    {
        return $this->forumId;
    }

    public function setForumId(int $forumId): void
    {
        $this->forumId = $forumId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getHashName(): string
    {
        return $this->hashName;
    }

    public function setHashName(string $hashName): void
    {
        $this->hashName = $hashName;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return OverviewForum[]
     */
    public function getForumList(): OverviewForumList
    {
        return $this->forumList;
    }

    public function setForumList(OverviewForumList $forumList): void
    {
        $this->forumList = $forumList;
    }

    public function addForum(OverviewForum $forum): void
    {
        $this->forumList[] = $forum;
    }
}