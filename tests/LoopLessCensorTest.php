<?php

namespace Tests;

use Censor\LoopLessCensor;

class LoopLessCensorTest extends CensorTest
{
    /**
     * @test
     * @dataProvider \Tests\TextProvider::get
     */
    public function itReturnsValidCensoredText(
        array $censoredWords,
        string $text,
        string $validCensoredText
    ): void {
        parent::doTest(
            $censoredWords,
            $text,
            $validCensoredText,
            LoopLessCensor::class
        );
    }
}
