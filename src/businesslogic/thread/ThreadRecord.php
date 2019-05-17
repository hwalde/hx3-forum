<?php

/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\thread;
 
use generated\GeneratedThreadRecord;
use util\SeoNameGenerator;

class ThreadRecord extends GeneratedThreadRecord implements ReducedThreadRecord {

    public function getUrlPathPart() : string
    {
        $nameGenerator = new SeoNameGenerator();
        return $nameGenerator->generateNameWithId($this->getTitle(), $this->getThreadId());
    }

}