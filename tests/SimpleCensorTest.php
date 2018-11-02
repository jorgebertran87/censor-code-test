<?php

namespace Tests;

use Censor\SimpleCensor;

class SimpleCensorTest extends CensorTest
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
            SimpleCensor::class
        );
    }
}