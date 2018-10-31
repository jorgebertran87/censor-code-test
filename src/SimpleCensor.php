<?php

namespace Censor;

class SimpleCensor implements CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string
    {
    }
}
