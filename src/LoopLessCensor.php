<?php

namespace Censor;

class LoopLessCensor implements CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string
    {
        $words = $this->splitWords($text);

        //we apply recursion to avoid loop
        if (count($censoredWords) > 0) {
            $words = $this->applyAsterisksToCensoredWord(
                array_shift($censoredWords),
                $words,
                count($words)
            );

            $text = $this->joinWords($words);
            return $this->__invoke($censoredWords, $text);
        }

        return $text;
    }

    private function splitWords(string $text): array
    {
        return explode(' ', $text);
    }

    private function applyAsterisksToCensoredWord(
        string $censoredWord,
        array $words,
        int $numOfWords
    ): array {
        //we apply recursion to avoid loop
        if ($numOfWords > 0) {
            $itemPosition = $numOfWords - 1;
            $item         = $words[$itemPosition];

            $words[$itemPosition] = $this->applyAsterisksToItem(
                $censoredWord,
                $item
            );

            return $this->applyAsterisksToCensoredWord(
                $censoredWord,
                $words,
                --$numOfWords
            );
        }

        return $words;
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
