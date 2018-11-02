<?php

namespace Tests\Domain;

use Censor\Domain\Text;
use Censor\Domain\Word;
use PHPUnit\Framework\TestCase;

class WordTest extends TestCase
{
    private const TEXT           = '"hola!!!!,+4';
    private const WORD_FROM_TEXT = 'hola';

    /** @test */
    public function itReturnsValidWord()
    {
        $text = new Text(self::TEXT);
        $word = new Word($text);

        $this->assertInstanceOf(Word::class, $word);
        $this->assertSame(self::WORD_FROM_TEXT, (string)$word);
    }
}
