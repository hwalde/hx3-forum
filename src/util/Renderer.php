<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;


class Renderer
{
    /** @var string */
    private $viewFolderPath;

    public function __construct(string $viewFolderPath)
    {
        $this->viewFolderPath = $viewFolderPath;
    }

    /**
     * @param string $filePath
     * @param object $model
     * @throws \ErrorException
     */
    public function renderView(string $filePath, object $model = null) : string
    {
        $realFilePath = realpath($filePath);

        if(!file_exists($realFilePath)) {
            throw new \ErrorException("Template file \"".$filePath."\" not found!");
        }

        $isTargetFileUnderneathCurrentFolder = substr($realFilePath, 0, strlen($this->viewFolderPath)) == $this->viewFolderPath;
        if(!$isTargetFileUnderneathCurrentFolder) {
            throw new \ErrorException("Illegal template file location \"".$filePath."\"!");
        }

        ob_start();
        include $realFilePath;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}