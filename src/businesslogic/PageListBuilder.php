<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic;


class PageListBuilder
{
    /** @var int */
    private $currentPageNumber;

    /** @var array */
    private $pageUrls = [];

    public function __construct(int $currentPageNumber)
    {
        $this->currentPageNumber = $currentPageNumber;
    }

    public function addPage(string $url) {
        $this->pageUrls[] = $url;
    }

    /**
     * @return Page[]
     */
    public function build() : PageList
    {
        $list = new PageList();
        $this->addAllPagesExceptLastPage($list);
        $this->addLastPage($list);
        return $list;
    }

    private function addAllPagesExceptLastPage(PageList $list) : void
    {
        for ($i = 0; $i < count($this->pageUrls) - 1; $i++) {
            $isCurrent = ($i + 1) == $this->currentPageNumber;
            $list[] = new Page($i + 1, $this->pageUrls[$i], $isCurrent);
        }
    }

    private function addLastPage(PageList $list): void
    {
        $hasPages = count($this->pageUrls) > 1;
        if (count($this->pageUrls) > 3) {
            $list[] = new Page('...');
            $list[] = new Page('Letzte Seite', end($this->pageUrls));
        } else if ($hasPages) {
            $isCurrent = count($this->pageUrls) == $this->currentPageNumber;
            $list[] = new Page(count($this->pageUrls), end($this->pageUrls), $isCurrent);
        }
    }
}