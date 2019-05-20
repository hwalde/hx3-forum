<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\forum;
 
use generated\GeneratedForumPermissionRecord;
 
class ForumPermissionRecord extends GeneratedForumPermissionRecord {

    const BITMASK_canview = 1;
    const BITMASK_canviewthreads = 524288;
    const BITMASK_canviewothers = 2;
    const BITMASK_cansearch = 4;
    const BITMASK_canemail = 8;
    const BITMASK_canpostnew = 16;
    const BITMASK_canreplyown = 32;
    const BITMASK_canreplyothers = 64;
    const BITMASK_caneditpost = 128;
    const BITMASK_candeletepost = 256;
    const BITMASK_candeletethread = 512;
    const BITMASK_canopenclose = 1024;
    const BITMASK_canmove = 2048;
    const BITMASK_cangetattachment = 4096;
    const BITMASK_canpostattachment = 8192;
    const BITMASK_canpostpoll = 16384;
    const BITMASK_canvote = 32768;
    const BITMASK_canthreadrate = 65536;
    const BITMASK_followforummoderation = 131072;
    const BITMASK_canseedelnotice = 262144;
    const BITMASK_cantagown = 1048576;
    const BITMASK_cantagothers = 2097152;
    const BITMASK_candeletetagown = 4194304;

    public function canView() : bool
    {
        return self::getForumPermissions() & self::BITMASK_canview;
    }

}