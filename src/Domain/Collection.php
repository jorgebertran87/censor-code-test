<?php

namespace Censor\Domain;

use ArrayIterator;
use Countable;
use IteratorAggregate;


abstract class Collection implements Countable, IteratorAggregate
{
    protected $items;

    protected function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    public function count()
    {
        return count($this->items);
    }

    abstract public static function create(array $items);
}