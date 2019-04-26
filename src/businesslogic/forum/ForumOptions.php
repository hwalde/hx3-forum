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


use util\BitFields;

/**
 * @see BitFields
 */
class ForumOptions
{
    const BITMASK_active = 1;
    const BITMASK_allowposting = 2;
    const BITMASK_cancontainthreads = 4;
    const BITMASK_moderatenewpost = 8;
    const BITMASK_moderatenewthread = 16;
    const BITMASK_moderateattach = 32;
    const BITMASK_allowbbcode = 64;
    const BITMASK_allowimages = 128;
    const BITMASK_allowhtml = 256;
    const BITMASK_allowsmilies = 512;
    const BITMASK_allowicons = 1024;
    const BITMASK_allowratings = 2048;
    const BITMASK_countposts = 4096;
    const BITMASK_canhavepassword = 8192;
    const BITMASK_indexposts = 16384;
    const BITMASK_styleoverride = 32768;
    const BITMASK_showonforumjump = 65536;
    const BITMASK_prefixrequired = 131072;

    /** @var int */
    private $optionValue;

    public function __construct(int $optionValue)
    {
        $this->optionValue = $optionValue;
    }

    public function isActive() : bool
    {
        return $this->optionValue & self::BITMASK_active == 1;
    }
}