<?php

namespace Censor;

class SimpleCensor implements CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string
    {
        $words = $this->splitWords($text);

        foreach($censoredWords as $censoredWord) {
            $words = $this->applyAsterisksToCensoredWord($censoredWord, $words);
        }

        return $this->joinWords($words);
    }

    private function splitWords(string $text): array
    {
        return explode(' ', $text);
    }

    private function applyAsterisksToCensoredWord(
        string $censoredWord,
        array $words
    ): array {
        return array_map(
            function(string $item) use ($censoredWord)
            {
                return $this->applyAsterisksToItem($censoredWord, $item);
            },
            $words
        );
    }

    private function applyAsterisksToItem(
        string $censoredWord,
        string $item
    ): string {
        if ($this->isCensoredWordContainedInItem($censoredWord, $item)) {
            return $this->replaceCensoredWordWithAsterisksInItem(
                $censoredWord,
                $item
            );
        }

        return $item;
    }

    private function isCensoredWordContainedInItem(
        string $censoredWord,
        string $item
    ): bool {
        $word = preg_replace('/[^a-zA-Z]/', '',$item);
        return $censoredWord === strtolower($word);
    }

    private function replaceCensoredWordWithAsterisksInItem(
        string $censoredWord,
        string $item
    ): string {
        $asterisks = $this->getAsterisks(strlen($censoredWord));
        return str_ireplace($censoredWord, $asterisks, $item);
    }

    private function getAsterisks(int $length): string
    {
        return str_repeat("*", $length);
    }

    private function joinWords(array $words): string
    {
        return implode(' ', $words);
    }
}
