<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic;


class Page
{
    /** @var string */
    private $title;

    /** @var string|null */
    private $url;

    /** @var bool */
    private $isActive;

    public function __construct(string $title, ?string $url = null, bool $isActive = false)
    {
        $this->title = $title;
        $this->url = $url;
        $this->isActive = $isActive;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function hasUrl() {
        return isset($this->url);
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }
}