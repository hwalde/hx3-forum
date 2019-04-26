<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\forum;


use businesslogic\forum\detail\Detail;

class Model
{
    /** @var Detail */
    private $detail;

    /**
     * @return Detail
     */
    public function getDetail(): Detail
    {
        return $this->detail;
    }

    /**
     * @param Detail $detail
     */
    public function setDetail(Detail $detail): void
    {
        $this->detail = $detail;
    }
}