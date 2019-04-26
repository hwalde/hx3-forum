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


use businesslogic\forum\detail\DetailThreadRepository;
use businesslogic\forum\ForumFacade;
use businesslogic\forum\ForumPermissionRepository;
use businesslogic\forum\ForumPermissionService;
use businesslogic\forum\ForumRepository;
use businesslogic\forum\overview\OverviewService as ForumOverviewService;
use businesslogic\forum\detail\DetailService as ForumDetailService;

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
            $instance = new ForumDetailService($this->getForumRepository(), $this->getForumDetailThreadRepository());
        }
        return $instance;
    }

    public function &getForumDetailThreadRepository() : DetailThreadRepository
    {
        static $instance = null;
        if($instance === null) {
            $instance = new DetailThreadRepository();
        }
        return $instance;
    }
}