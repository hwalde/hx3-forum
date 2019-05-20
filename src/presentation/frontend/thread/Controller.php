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

use presentation\frontend\FrontendController;
use util\exception\NotFoundException;

class Controller extends FrontendController
{
    /**
     * @throws NotFoundException
     */
    public function index($forumId, $threadId, $pageNumber = 1) {
        if(intval($forumId) != $forumId) {
            throw new NotFoundException();
        }
        if(intval($threadId) != $threadId) {
            throw new NotFoundException();
        }
        if(intval($pageNumber) != $pageNumber) {
            throw new NotFoundException();
        }
        $forumId = intval($forumId);
        $threadId = intval($threadId);
        $pageNumber = intval($pageNumber);

        $model = new Model();

        $forumFacade = DiContainer()->getThreadFacade();
        $threadPage = $forumFacade->getThreadPage($threadId, $pageNumber);
        $model->setThreadPage($threadPage);

        $this->setContent(__DIR__."/View.php", $model);
        $this->setTitle($threadPage->getThreadDetail()->getTitle());
    }
}