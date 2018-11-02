<?php

namespace Censor\Domain;

class Word implements Entity
{
    protected $word;

    public function __construct(string $text)
    {
        $this->word = preg_replace('/[^a-zA-Z]/', '',$text);
    }

    public function equals(Word $word): bool
    {
        return (string)$this === (string)$word;
    }

    public function __toString(): string
    {
        return strtolower($this->word);
    }
}