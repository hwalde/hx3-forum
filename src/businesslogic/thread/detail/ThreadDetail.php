<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\thread\detail;

class ThreadDetail
{
    /** @var int */
    private $threadId;

    /** @var string */
    private $title;

    /** @var string */
    private $url;

    public function getThreadId(): int
    {
        return $this->threadId;
    }

    public function setThreadId(int $threadId): void
    {
        $this->threadId = $threadId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}