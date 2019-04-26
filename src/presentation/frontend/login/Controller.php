<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\login;


use businesslogic\user\authentication\AuthenticationFailed;
use businesslogic\user\authentication\standard\StandardAuthentication;
use businesslogic\user\authentication\standard\StandardAuthenticationRequest;
use presentation\frontend\FrontendController;

class Controller extends FrontendController {

    public function index() {
        $request = new StandardAuthenticationRequest();
        $request->setUsername($_REQUEST['username']);
        $request->setPassword($_REQUEST['password']);
        $authentication = new StandardAuthentication();

        $model = new Model();
        try {
            $response = $authentication->authenticate($request);
            $model->setUsername($response->getUser()->getUsername());
            $model->setIsLoggedIn($response->getUser()->isActive());
        } catch (AuthenticationFailed $e) {
            $model->setError("Login fehlgeschlagen: ".$e->getMessage());
        }

        $this->setContent(__DIR__ . "/View.php", $model);
    }

}
