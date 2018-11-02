<?php

namespace Censor\Domain;

final class Text implements Entity
{
    private $text;
    /** @var string $censoredText */
    private $censoredText;

    public function __construct(string $text)
    {
        $this->text         = $text;
        $this->censoredText = $text;
    }

    public function applyCensoredWords(CensoredWords $censoredWords): void
    {
        $this->censoredText = $this->text;

        /** @var CensoredWord $censoredWord */
        foreach($censoredWords as $censoredWord) {
            $this->applyCensoredWord($censoredWord);
        }
    }

    private function applyCensoredWord(CensoredWord $censoredWord): void
    {
        $items              = $this->split();
        $censoredItems      = $censoredWord->replaceIn(...$items);
        $this->censoredText = $this->join($censoredItems);
    }

    private function split(): array
    {
        return explode(' ', $this->censoredText);
    }

    private function join(array $items): string
    {
        return implode(' ', $items);;
    }

    public function censored(): string
    {
        return $this->censoredText;
    }

    public function __toString(): string
    {
        return $this->text;
    }
}