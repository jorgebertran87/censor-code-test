<?php

namespace Tests\Domain;

use Censor\Domain\CensoredWord;
use Censor\Domain\CensoredWords;
use Censor\Domain\Collection;
use PHPUnit\Framework\TestCase;


class CensoredWordsTest extends TestCase
{
    /** @test */
    public function itReturnsValidCollection(): void
    {
        $censoredWord  = new CensoredWord('que');
        $censoredWords = CensoredWords::create([$censoredWord]);
        $this->assertInstanceOf(Collection::class, $censoredWords);
    }

    /**
     * @test
     * @expectedException \Censor\Domain\Exceptions\CensoredWordNotValid
     */
    public function itThrowsCensoredWordNotValid(): void
    {
        $notValidCensoredWord = 'que';
        CensoredWords::create([$notValidCensoredWord]);
    }
}
