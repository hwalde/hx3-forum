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

class ForumDetail
{
    /** @var int */
    private $forumId;

    /** @var string */
    private $forumTitle;

    /** @var string */
    private $forumUrl;

    /**
     * @return int
     */
    public function getForumId(): int
    {
        return $this->forumId;
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId): void
    {
        $this->forumId = $forumId;
    }

    /**
     * @return string
     */
    public function getForumTitle(): string
    {
        return $this->forumTitle;
    }

    /**
     * @param string $forumTitle
     */
    public function setForumTitle(string $forumTitle): void
    {
        $this->forumTitle = $forumTitle;
    }

    /**
     * @return string
     */
    public function getForumUrl(): string
    {
        return $this->forumUrl;
    }

    /**
     * @param string $forumUrl
     */
    public function setForumUrl(string $forumUrl): void
    {
        $this->forumUrl = $forumUrl;
    }
}