<?php

namespace Tests\Domain;

use Censor\Domain\CensoredWord;
use Censor\Domain\Entity;
use PHPUnit\Framework\TestCase;

class CensoredWordTest extends TestCase
{
    /** @test */
    public function itReturnsValidEntity(): void
    {
        $censoredWord  = new CensoredWord('que');
        $this->assertInstanceOf(Entity::class, $censoredWord);
    }
}
