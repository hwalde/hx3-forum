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
    /** @var \JBBCode\Parser */
    private $parser;

    public function __construct()
    {
        $this->parser = new \JBBCode\Parser();
        $this->parser->addCodeDefinitionSet(new \JBBCode\DefaultCodeDefinitionSet());
        $this->parser->addBBCode('quote', '<div class="quote">{param}</div>', true);
        $this->parser->addBBCode('quote', '<div class="quote">{param}</div>');
        $this->parser->addBBCode('code', '<code>{param}</code>');
        $this->parser->addBBCode('size', '<span style="font-size:{option}pt">{param}</span>', true);

        $youtubeReplacement = <<<END
<table class="tborder" cellpadding="6" cellspacing="1" border="0" style="width:auto;margin:10px 0;"> <thead>  
	<tr>
		<td class="tcat" colspan="2" style="text-align:center">
		<a href="http://www.youtube.com/watch?v={param}" title="View this video at YouTube in a new window or tab" target="_blank">YouTube Video</a>  
		</td>  
	</tr> 
</thead> 
<tbody>  
	<tr>  
		<td class="panelsurround" align="center">  

			<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/{param}"></param><embed src="http://www.youtube.com/v/{param}" type="application/x-shockwave-flash" width="425" height="350"></embed></object>
  
		</td>  
	</tr> 
</tbody> 
</table>
END;
        $this->parser->addBBCode('youtube', $youtubeReplacement);
    }

    public function convert(string $ubb): string
    {
        // http://localhost/hx3/dayz-183/[ger]-nmk-overpoch-root-server-mit-vielen-features-25052

        $this->parser->parse($ubb);
        $html = $this->parser->getAsHtml();
        // todo: remove more than one consecutive br-tag?
        return nl2br($html);
    }
}