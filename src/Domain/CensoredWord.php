<?php

namespace Censor\Domain;

final class CensoredWord extends Word implements Censored
{
    public function replaceIn(string ...$texts): array
    {
        foreach($texts as $key => $text) {
            if ($this->existsIn($text)) {
                $texts[$key] = str_ireplace($this->word, $this->hide(), $text);
            }
        }

        return $texts;
    }

    private function existsIn(string $text): bool
    {
        $word = $this->getWordFromText($text);
        return $this->equals($word);
    }

    private function getWordFromText(string $text): Word
    {
        return new Word($text);
    }

    private function hide(): string
    {
        return str_repeat("*", strlen($this->word));
    }
}