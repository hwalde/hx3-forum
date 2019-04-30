<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\thread;


interface ReducedThreadRecord
{
    public function getTitle() : string;

    public function getLastPoster() : string;

    public function getPostUserName() : string;

    public function getReplyCount() : int;

    public function getThreadId() : int;
}