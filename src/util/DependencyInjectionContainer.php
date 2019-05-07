<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;


use businesslogic\forum\detail\ForumPaginationService;
use businesslogic\forum\ForumFacade;
use businesslogic\forum\ForumPermissionRepository;
use businesslogic\forum\ForumPermissionService;
use businesslogic\forum\ForumRepository;
use businesslogic\forum\overview\OverviewService as ForumOverviewService;
use businesslogic\forum\detail\DetailService as ForumDetailService;
use businesslogic\post\PostRepository;
use businesslogic\thread\detail\ThreadDetailService;
use businesslogic\thread\posts\ThreadPostsService;
use businesslogic\thread\ThreadFacade;
use businesslogic\thread\ThreadRepository;

class DependencyInjectionContainer
{
    public function &getForumFacade() : ForumFacade
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumFacade($this->getForumOverviewService(), $this->getForumDetailService());
        }
        return $instance;
    }

    public function &getForumRepository() : ForumRepository
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumRepository();
        }
        return $instance;
    }

    public function &getForumPermissionRepository() : ForumPermissionRepository
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumPermissionRepository();
        }
        return $instance;
    }

    public function &getForumPermissionService() : ForumPermissionService
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumPermissionService($this->getForumPermissionRepository());
        }
        return $instance;
    }

    public function &getForumOverviewService() : ForumOverviewService
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumOverviewService($this->getForumRepository(), $this->getForumPermissionService());
        }
        return $instance;
    }

    public function &getForumDetailService() : ForumDetailService
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumDetailService(
                $this->getForumRepository(),
                $this->getThreadRepository(),
                $this->getForumPaginationService()
            );
        }
        return $instance;
    }

    public function &getThreadRepository() : ThreadRepository
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ThreadRepository();
        }
        return $instance;
    }

    public function &getForumPaginationService() : ForumPaginationService
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ForumPaginationService($this->getForumRepository());
        }
        return $instance;
    }

    public function &getThreadFacade() : ThreadFacade
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ThreadFacade($this->getThreadDetailService(), $this->getThreadPostsService());
        }
        return $instance;
    }

    public function &getThreadDetailService() : ThreadDetailService
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ThreadDetailService($this->getThreadRepository());
        }
        return $instance;
    }

    public function &getThreadPostsService() : ThreadPostsService
    {
        static $instance = null;
        if($instance === null) {
            $instance = new ThreadPostsService($this->getPostsRepository(), $this->getUbb2HtmlConverter());
        }
        return $instance;
    }

    public function &getPostsRepository() : PostRepository
    {
        static $instance = null;
        if($instance === null) {
            $instance = new PostRepository();
        }
        return $instance;
    }

    public function &getUbb2HtmlConverter() : Ubb2HtmlConverter
    {
        static $instance = null;
        if($instance === null) {
            $instance = new Ubb2HtmlConverter();
        }
        return $instance;
    }
}