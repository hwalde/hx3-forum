<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\thread;

use businesslogic\thread\ThreadPage;

class Model
{
    /** @var ThreadPage */
    private $threadPage;

    /**
     * @return ThreadPage
     */
    public function getThreadPage(): ThreadPage
    {
        return $this->threadPage;
    }

    /**
     * @param ThreadPage $threadPage
     */
    public function setThreadPage(ThreadPage $threadPage): void
    {
        $this->threadPage = $threadPage;
    }
}