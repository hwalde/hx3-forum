<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum\detail;

use businesslogic\Page;
use businesslogic\PageList;

class ForumDetailThread
{
    /** @var string */
    private $title;

    /** @var string */
    private $creatorUserName;

    /** @var string */
    private $lastPostUserName;

    /** @var string */
    private $url;

    /** @var PageList */
    private $pageList;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getCreatorUserName(): string
    {
        return $this->creatorUserName;
    }

    public function setCreatorUserName(string $creatorUserName): void
    {
        $this->creatorUserName = $creatorUserName;
    }

    public function getLastPostUserName(): string
    {
        return $this->lastPostUserName;
    }

    public function setLastPostUserName(string $lastPostUserName): void
    {
        $this->lastPostUserName = $lastPostUserName;
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
     * @return Page[]
     */
    public function getPageList(): PageList
    {
        return $this->pageList;
    }

    public function setPageList(PageList $pageList): void
    {
        $this->pageList = $pageList;
    }
}