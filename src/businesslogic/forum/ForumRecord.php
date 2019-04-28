<?php

/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\forum;
 
use generated\GeneratedForumRecord;
use util\SeoNameGenerator;

class ForumRecord extends GeneratedForumRecord {

    public function getUrlPath() : string
    {
        // Examples:
        // http://hx3.de/diskussionsplattform-29/
        // http://hx3.de/software-hardware-80/
        // http://hx3.de/offtopic-7/
        $nameGenerator = new SeoNameGenerator();
        $name = $nameGenerator->generateName($this->getTitle(), $this->getForumId());
        return APPLICATION_PATH.'/'.$name.'/';
    }

    public function getParentIdList(): array
    {
        return explode(',', parent::getParentList());
    }

    public function getOptionsObject(): ForumOptions
    {
        return new ForumOptions(parent::getOptions());
    }

}