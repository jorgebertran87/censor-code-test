<?php

namespace Censor;

class LoopLessCensor implements CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string
    {
    }
}
