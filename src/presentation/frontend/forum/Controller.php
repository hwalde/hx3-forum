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

use presentation\frontend\FrontendController;
use util\exception\NotFoundException;

class Controller extends FrontendController
{
    /**
     * @throws NotFoundException
     */
    public function index($forumId, $pageNumber = 1) {
        if(intval($forumId) != $forumId) {
            throw new NotFoundException();
        }
        if(intval($pageNumber) != $pageNumber) {
            throw new NotFoundException();
        }
        $forumId = intval($forumId);
        $pageNumber = intval($pageNumber);

        $model = new Model();

        $forumFacade = DiContainer()->getForumFacade();
        $forumDetail = $forumFacade->getDetail($forumId, $pageNumber);
        $model->setDetail($forumDetail);

        $this->setContent(__DIR__."/View.php", $model);
        $this->setTitle($forumDetail->getForumTitle());
    }
}