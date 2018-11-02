<?php

namespace Tests;

use Censor\ObjectCensor;

class ObjectCensorTest extends CensorTest
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
            ObjectCensor::class
        );
    }
}