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

use businesslogic\post\PostRecord;
use businesslogic\post\PostRecordList;
use businesslogic\post\PostRepository;

class ThreadPostsService
{
    const MAXIMUM_POSTS_PER_PAGE = 10;


    /** @var PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @return ThreadPost[]
     */
    public function getThreadPostList(int $threadId, int $pageNumber) : ThreadPostList
    {
        $pageNumber--;
        if($pageNumber < 0) {
            throw new \InvalidArgumentException('Minimum allowed pageNumber is 1');
        }
        $offset = self::MAXIMUM_POSTS_PER_PAGE*$pageNumber;
        $limit = self::MAXIMUM_POSTS_PER_PAGE;
        $postRecordList = $this->postRepository->selectAllFromThread($threadId, $limit, $offset);
        $list = new ThreadPostList();
        $this->hydrateThreadPostList($postRecordList, $list);
        return $list;
    }

    private function hydrateThreadPostList(PostRecordList $postRecordList, ThreadPostList $list): void
    {
        foreach ($postRecordList as $record) {
            $threadPost = new ThreadPost();
            $this->hydrateThreadPost($threadPost, $record);
            $list[] = $threadPost;
        }
    }

    private function hydrateThreadPost(ThreadPost $threadPost, PostRecord $record): void
    {
        $threadPost->setPostId($record->getPostId());
        $threadPost->setCreationDateTime(new \DateTime("@{$record->getDateLine()}"));
        $threadPost->setCreationUserName($record->getUserName());
        $threadPost->setTitle($record->getTitle());
        $threadPost->setContent($record->getPageText());
    }
}