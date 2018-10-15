<?php

namespace Censor;

class LoopLessCensor extends AbstractCensor
{
    public function __invoke(array $censoredWords, string $text) : string
    {
    }
}
