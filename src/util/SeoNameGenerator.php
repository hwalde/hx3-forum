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


class SeoNameGenerator
{
    public function generateName(string $title, int $id) : string
    {
        $title = strtolower($title);
        $title = str_replace('&amp;', ' ', $title);
        $title = preg_replace('#\s+#', '-', $title);
        return $title.'-'.$id;
    }

    public function generateForumGroupHash(string $title) : string
    {
        $title = strtolower($title);
        return '#'.$title;
    }
}