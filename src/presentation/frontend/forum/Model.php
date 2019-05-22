<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\forum;

use businesslogic\forum\ForumDetailPage;

class Model
{
    /** @var ForumDetailPage */
    private $detailPage;

    /**
     * @return ForumDetailPage
     */
    public function getDetailPage(): ForumDetailPage
    {
        return $this->detailPage;
    }

    /**
     * @param ForumDetailPage $detailPage
     */
    public function setDetailPage(ForumDetailPage $detailPage): void
    {
        $this->detailPage = $detailPage;
    }
}