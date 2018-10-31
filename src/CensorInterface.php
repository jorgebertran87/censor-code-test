<?php

namespace Censor;

interface CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string;
}