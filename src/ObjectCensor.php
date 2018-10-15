<?php

namespace Censor;

class ObjectCensor extends AbstractCensor
{
    public function __invoke(array $censoredWords, string $text) : string
    {
    }
}
