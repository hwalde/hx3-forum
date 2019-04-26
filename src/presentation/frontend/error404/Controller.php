<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\error404;


use PhpMyAdmin\Di\NotFoundException;
use presentation\Render;
use presentation\frontend\FrontendController;

class Controller extends FrontendController
{
    public function index() {
        $this->setContent(__DIR__."/View.php");
    }
}