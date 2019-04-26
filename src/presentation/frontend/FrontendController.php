<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend;


use presentation\Controller;
use util\Renderer;

class FrontendController implements Controller
{
    /** @var Model */
    private $model;

    /** @var Renderer */
    private $renderer;

    public function __construct()
    {
        $this->model = new Model();
        $this->renderer = new Renderer(__DIR__);
    }

    public function setContent(string $viewPath, $viewModel = null) {
        $this->model->setContent($this->renderer->renderView($viewPath, $viewModel));
    }

    public function render() : string
    {
        return $this->renderer->renderView(__DIR__.'/View.php', $this->model);
    }
}