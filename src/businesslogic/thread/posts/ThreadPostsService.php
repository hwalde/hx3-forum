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

use businesslogic\PageList;
use businesslogic\PageListBuilder;
use businesslogic\post\PostRecord;
use businesslogic\post\PostRecordList;
use businesslogic\post\PostRepository;
use util\Ubb2HtmlConverter;

class ThreadPostsService
{
    const MAXIMUM_POSTS_PER_PAGE = 10;

    /** @var PostRepository */
    private $postRepository;

    /** @var Ubb2HtmlConverter */
    private $ubb2HtmlConverter;

    public function __construct(PostRepository $postRepository, Ubb2HtmlConverter $ubb2HtmlConverter)
    {
        $this->postRepository = $postRepository;
        $this->ubb2HtmlConverter = $ubb2HtmlConverter;
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

        $htmlContent = $this->ubb2HtmlConverter->convert(
            $record->getPageText()
        );

        $threadPost->setContent($htmlContent);
    }

    public function getPageList(int $threadId, string $threadUrl, int $pageNumber): PageList
    {
        $postCount = $this->postRepository->countPostsOfThread($threadId);
        $pageCount = intdiv($postCount, self::MAXIMUM_POSTS_PER_PAGE);
        if($postCount%self::MAXIMUM_POSTS_PER_PAGE > 0) {
            $pageCount++;
        }
        $builder = new PageListBuilder($pageNumber);
        if($pageCount>0) {
            $builder->addPage($threadUrl);
        }
        for($i = 1; $i<$pageCount; $i++) {
            $builder->addPage($threadUrl.'/'.($i+1));
        }
        return $builder->build();
    }
}