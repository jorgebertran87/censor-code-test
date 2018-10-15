<?php

namespace Censor;

class SimpleCensor extends AbstractCensor
{
    public function __invoke(array $censoredWords, string $text) : string
    {
    }
}
