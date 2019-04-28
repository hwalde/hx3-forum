<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\index;


use businesslogic\user\authentication\AuthenticationFailed;
use businesslogic\user\authentication\standard\StandardAuthentication;
use businesslogic\user\authentication\standard\StandardAuthenticationRequest;
use presentation\frontend\FrontendController;

class Controller extends FrontendController {

    public function index() {

        $model = new Model();

        $forumFacade = DiContainer()->getForumFacade();
        $model->setOverview($forumFacade->getOverview());

        $this->setContent(__DIR__ . "/View.php", $model);
    }

}