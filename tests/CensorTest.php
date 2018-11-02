<?php

namespace Tests;

use DI\Container;
use PHPUnit\Framework\TestCase;

abstract class CensorTest extends TestCase
{
    private $container;

    public function setUp()
    {
        $this->container = new Container();
    }

    protected function doTest(
        array $censoredWords,
        string $text,
        string $validCensoredText,
        string $censorClass
    ) {
        $censor = $this->container->get($censorClass);
        $censoredText = $censor->__invoke($censoredWords, $text);
        $this->assertEquals($censoredText, $validCensoredText);
    }

    /**
     * @test
     * @dataProvider \Tests\TextProvider::get
     */
    abstract public function itReturnsValidCensoredText(
        array $censoredWords,
        string $text,
        string $validCensoredText
    ): void;

}