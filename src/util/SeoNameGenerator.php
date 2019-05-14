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
    public function generateName(string $title, int $id): string
    {
        $title = mb_strtolower($title);

        $stopWords = 'a|an|and|are|as|at|be|by|for|from|in|is|it|of|on|'.
            'or|that|the|this|to|was|which|with|aber|als|am|an|auch|auf|aus|'.
            'bei|bin|bis|bist|da|dadurch|daher|darum|das|daß|dass|dein|deine|'.
            'dem|den|der|des|dessen|deshalb|die|dies|dieser|dieses|doch|dort|du|'.
            'durch|ein|eine|einem|einen|einer|eines|er|es|euer|eure|für|hatte|'.
            'hatten|hattest|hattet|hier|hinter|ich|ihr|ihre|im|in|ist|ja|jede|'.
            'jedem|jeden|jeder|jedes|jener|jenes|jetzt|kann|kannst|können|könnt|'.
            'machen|mein|meine|mit|muß|mußt|musst|müssen|müßt|nach|nachdem|nein|'.
            'nicht|nun|oder|seid|sein|seine|sich|sie|sind|soll|sollen|sollst|sollt|'.
            'sonst|soweit|sowie|und|unser|unsere|unter|vom|von|vor|wann|warum|was|'.
            'weiter|weitere|wenn|wer|werde|werden|werdet|weshalb|wie|wieder|wieso|wir|'.
            'wird|wirst|wo|woher|wohin|zu|zum|zur|über';

        $title = preg_replace('#\b('.$stopWords.')\b#is', ' ', $title);

        $charMapping = [
            'ä' => 'ae',
            'ö' => 'oe',
            'ü' => 'ue',
            'ß' => 'ss',
        ];
        $title = str_replace(array_keys($charMapping), array_values($charMapping), $title);

        $title = str_replace(['&amp;', '.'], '-', $title);
        $title = str_replace(['?', '"', '!', '[', ']', '^', '\'', ':'], '', $title);

        $title = preg_replace('#\s+#', '-', $title);
        $title = preg_replace('#-+#', '-', $title);
        if($title[0]=='-') {
            $title = substr($title, 1);
        }
        if(substr($title, -1)=='-') {
            $title = substr($title, 0, -1);
        }
        return $title . '-' . $id;
    }

    public function generateForumGroupHash(string $title): string
    {
        $title = strtolower($title);
        return '#' . $title;
    }
}