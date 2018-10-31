<?php

namespace Censor;

class ObjectCensor implements CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string
    {
    }
}
