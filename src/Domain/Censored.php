<?php

namespace Censor\Domain;

interface Censored
{
    public function replaceIn(string ...$texts): array;
}