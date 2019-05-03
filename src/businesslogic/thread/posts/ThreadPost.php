<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace businesslogic\thread\posts;

class ThreadPost
{
    /** @var int */
    private $postId;

    /** @var string */
    private $creationUserName;

    /** @var \DateTime */
    private $creationDateTime;

    /** @var string */
    private $title;

    /** @var string */
    private $content;

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId): void
    {
        $this->postId = $postId;
    }

    /**
     * @return string
     */
    public function getCreationUserName(): string
    {
        return $this->creationUserName;
    }

    /**
     * @param string $creationUserName
     */
    public function setCreationUserName(string $creationUserName): void
    {
        $this->creationUserName = $creationUserName;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateTime(): \DateTime
    {
        return $this->creationDateTime;
    }

    /**
     * @param \DateTime $creationDateTime
     */
    public function setCreationDateTime(\DateTime $creationDateTime): void
    {
        $this->creationDateTime = $creationDateTime;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}