<?php

namespace Censor;

use Censor\Domain\CensoredWord;
use Censor\Domain\CensoredWords;
use Censor\Domain\Text;
use Censor\Domain\Word;

class ObjectCensor implements CensorInterface
{
    public function __invoke(array $censoredWords, string $text) : string
    {
        $text          = $this->fromStringToText($text);
        $censoredWords = $this->fromArrayToCollection($censoredWords);

        $text->applyCensoredWords($censoredWords);
        return $text->censored();
    }

    private function fromArrayToCollection(array $censoredWords): CensoredWords
    {
        $censoredWords = array_map(
            function(string $item)
            {
                return new CensoredWord(new Word($item));
            },
            $censoredWords
        );
        return CensoredWords::create($censoredWords);
    }

    private function fromStringToText(string $text): Text
    {
        return new Text($text);
    }
}
