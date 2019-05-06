<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;


class Ubb2HtmlConverter
{
    public function convert(string $ubb): string
    {

        // http://localhost/hx3/dayz-183/[ger]-nmk-overpoch-root-server-mit-vielen-features-25052
        $search = [
            // Bold
            '#\[b\](.*)\[\/b\]#is',

            // Url
            '#\[url\](.+?)\[\/url\]#is',
            '#\[url="(.+?)"\](.+?)\[\/url\]#is',
            '#\[url=(.+?)\](.+?)\[\/url\]#is',

            // Youtube
            '#\[youtube\](.*)\[\/youtube\]#is',

            // Images
            '#\[img\](.+?)\[\/img\]#is',

            // Quote
            '#\[quote\](.+?)\[\/quote\]#is',

            // Code
            '#\[php\](.+?)\[\/php\]#is',
        ];
        $replace = [
            // Bold
            '<strong>\\1</strong>',

            // Url
            '<a href="\\1" target="_blank">\\1</a>',
            '<a href="\\1" target="_blank">\\2</a>',
            '<a href="\\1" target="_blank">\\2</a>',

            <<<END
<table class="tborder" cellpadding="6" cellspacing="1" border="0" style="width:auto;margin:10px 0;"> <thead>  
	<tr>
		<td class="tcat" colspan="2" style="text-align:center">
		<a href="http://www.youtube.com/watch?v=\\1" title="View this video at YouTube in a new window or tab" target="_blank">YouTube Video</a>  
		</td>  
	</tr> 
</thead> 
<tbody>  
	<tr>  
		<td class="panelsurround" align="center">  

			<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/\\1"></param><embed src="http://www.youtube.com/v/\\1" type="application/x-shockwave-flash" width="425" height="350"></embed></object>
  
		</td>  
	</tr> 
</tbody> 
</table>
END,
            '<img src="\\1"/>',

            '<div class="quote">\\1</div>',

            "<code>\n\r\\1</code>"
        ];
        $html = preg_replace($search, $replace, $ubb);
        return nl2br($html);
    }
}