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

class SeoNameGenerator
{
    public function generateName(string $title, int $id): string
    {
        // Make lower case
        $title = mb_strtolower($title);

        // Convert umlauts
        $charMapping = [
            'ä' => 'ae',
            'ö' => 'oe',
            'ü' => 'ue',
            'ß' => 'ss',
            'í' => 'i',
            'ú' => 'u',
            'é' => 'e'
        ];
        $title = str_replace(array_keys($charMapping), array_values($charMapping), $title);

        // "it's" -> "its"
        $title = str_replace('it\'s', 'its', $title);

        // Remove stop-words
        $stopWords = 'a|an|and|are|as|at|be|by|for|from|in|is|it|of|on|'.
            'or|that|the|this|to|was|which|with|aber|als|am|an|auch|auf|aus|'.
            'bei|bin|bis|bist|da|dadurch|daher|darum|das|daß|dass|dein|deine|'.
            'dem|den|der|des|dessen|deshalb|die|dies|dieser|dieses|doch|dort|du|'.
            'durch|ein|eine|einem|einen|einer|eines|er|es|euer|eure|hatte|'. // |für
            'hatten|hattest|hattet|hier|hinter|ich|ihr|ihre|im|in|ist|ja|jede|'.
            'jedem|jeden|jeder|jedes|jener|jenes|jetzt|kann|kannst|können|'. // |könnt
            'machen|mein|meine|mit|muß|mußt|musst|müssen|müßt|nach|nachdem|nein|'.
            'nicht|nun|oder|seid|sein|seine|sich|sie|sind|soll|sollen|sollst|sollt|'.
            'sonst|soweit|sowie|und|unser|unsere|unter|vom|von|vor|wann|warum|was|'.
            'weiter|weitere|wenn|wer|werde|werden|werdet|weshalb|wie|wieder|wieso|wir|'.
            'wird|wirst|wo|woher|wohin|zu|zum|zur|über';
        $title = preg_replace('#\b('.$stopWords.')\b#is', ' ', $title);

        // Html-Entities -> UTF-8 char
        $title = html_entity_decode($title);

        // UTF-8 Html-Entities -> UTF-8 char
        $title = preg_replace('!&#\d+;!is', '-', $title);

        // Not allowed characters -> "-" char
        $title = preg_replace('#[^\s\\-a-zA-Z0-9_"\'\\^]#is', '-', $title);

        // Remove remaining not allowed characters
        $title = str_replace(['"', '^', '\'', ':'], '', $title);

        // Whitespace -> "-" char
        $title = preg_replace('#\s+#', '-', $title);

        // No more than one "-" char between other chars
        $title = preg_replace('#-+#', '-', $title);

        // Remove "-" char at beginning if exists
        if(mb_substr($title, 0, 1)=='-') {
            $title = mb_substr($title, 1);
        }

        // Remove "-" char at ending if exists
        if(mb_substr($title, -1)=='-') {
            $title = mb_substr($title, 0, -1);
        }

        // Add "a" if string is empty
        if($title == '') {
            $title = 'a';
        }

        // Add an "-a" to ending if ending char is a digit, with the exception of allowed endings
        $allowedEndings = 'halflife2|ofpc2|ofp2|hx3|v3|pitstop2004|vbs1|c930|bf1942|doom3|t800|y2k3|nr3|sims2'
            .'|i44|g36|e3|rlk_rem700|opf2|l1510|b2|mp3|teil2|system32|pixel32|o2|a6|aavp7a1|sat1|gtr2|x52|dxt5|sg1'
            .'|vistax64|fade2|fs10|d30|x8r8g8b8|arma1|race07|visitor3|gbu12|fallout3|m4|dbe1|xp32|v1|ps3|arma2|llbrig31'
            .'|a2|hd4870|v5|coop5|ww2|c130|mark2|part1|grad25|hd5870|q9300|ixxl3|ace2|v4|i7|ts2|i3|a1|hd4850'
            .'|isladuala_v131|cyborg11|g500|ts3|nhl09|dac_v3|fgr4|t99|oxygen2|hd5770|ag36|b52|trigger3|brigade2010|2a6'
            .'|mk2|win7|brig2010|t90|gtx580|arma3|hd7970|5vs5|colum_revive_20rc2|a3|uh80|f4|pzbtl306|u18|9k79|ex40'
            .'|grp3|fs2';
        $allowedEndingPattern = '#(^|-)('.$allowedEndings.')$#is';
        if(ctype_digit(mb_substr($title, -1))
            && !preg_match($allowedEndingPattern, $title)) {
            $title .= '-a';
        }

        // $title === "arma-3-a" -> "arma-3"
        if($title==='arma-3-a') {
            $title = 'arma-3';
        }

        // urlencode for safety
        $title = urlencode($title);

        // Concat title with id
        return $title . '-' . $id;
    }

    public function generateForumGroupHash(string $title): string
    {
        $title = strtolower($title);
        return '#' . $title;
    }
}