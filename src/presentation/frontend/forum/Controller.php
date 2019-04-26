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


use presentation\frontend\FrontendController;
use util\exception\NotFoundException;

class Controller extends FrontendController
{
    /**
     * @throws NotFoundException
     */
    public function index($index) {
        if(intval($index) != $index) {
            throw new NotFoundException();
        }
        $index = intval($index);

        $model = new Model();

        $forumFacade = DiContainer()->getForumFacade();
        $model->setDetail($forumFacade->getDetail($index));

        $this->setContent(__DIR__."/View.php", $model);
    }
}