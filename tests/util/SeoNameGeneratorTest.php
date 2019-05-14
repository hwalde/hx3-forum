<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class SeoNameGeneratorTest extends \PHPUnit\Framework\TestCase
{
    public function testGenerateName()
    {
        $generator = new \util\SeoNameGenerator();

        $inputExpectedOutputMap = [
            'EUROPA wie ist die Kiste zu retten?' => 'europa-kiste-retten'
        ];
        foreach ($inputExpectedOutputMap as $input => $expectedOutput) {
            $result = $generator->generateName($input, 123);
            $this->assertEquals($expectedOutput.'-123', $result);
        }

    }
}