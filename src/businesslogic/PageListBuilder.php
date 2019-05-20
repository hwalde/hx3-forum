<?php declare(strict_types=1);
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
        $this->addPagesExceptLastPage($list);
        $this->addLastPage($list);
        return $list;
    }

    private function addPagesExceptLastPage(PageList $list) : void
    {
        if(count($this->pageUrls)<7) {
            $this->addAllPagesExceptLastPage($list);
        } else {
            $this->addMostImportantPages($list);
        }
    }

    private function addAllPagesExceptLastPage(PageList $list) : void
    {
        for ($i = 0; $i < count($this->pageUrls) - 1; $i++) {
            $isCurrent = ($i + 1) == $this->currentPageNumber;
            $list[] = new Page((string)($i + 1), $this->pageUrls[$i], $isCurrent);
        }
    }

    private function addMostImportantPages(PageList $list) : void
    {
        $list[] = new Page("1", $this->pageUrls[0], $this->currentPageNumber == 1);
        $list[] = new Page("2", $this->pageUrls[1], $this->currentPageNumber == 2);
        $list[] = new Page("3", $this->pageUrls[2], $this->currentPageNumber == 3);
        if(count($this->pageUrls)>10) {
            $list[] = new Page("10", $this->pageUrls[9], $this->currentPageNumber == 10);
        }
        if(count($this->pageUrls)>50) {
            $list[] = new Page("50", $this->pageUrls[49], $this->currentPageNumber == 50);
        }
        if(count($this->pageUrls)>100) {
            $list[] = new Page("100", $this->pageUrls[99], $this->currentPageNumber == 100);
        }
    }

    private function addLastPage(PageList $list): void
    {
        $hasPages = count($this->pageUrls) > 0;
        if (count($this->pageUrls) > 3) {
            $list[] = new Page('...');
            $list[] = new Page('Letzte Seite', end($this->pageUrls));
        } else if ($hasPages) {
            $isCurrent = count($this->pageUrls) == $this->currentPageNumber;
            $list[] = new Page((string)count($this->pageUrls), end($this->pageUrls), $isCurrent);
        }
    }
}