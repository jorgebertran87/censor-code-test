<?php

namespace Censor\Domain;

use Censor\Domain\Exceptions\CensoredWordNotValid;

final class CensoredWords extends Collection
{
    public static function create(array $items): self
    {
        return new self(
            array_map(
                function($item) {
                    if (!$item instanceof CensoredWord) {
                        throw new CensoredWordNotValid();
                    }

                    return $item;
                },
                $items
            )
        );
    }
}