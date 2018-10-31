<?php
namespace Censor\Domain\Exceptions;

use Exception;
use Throwable;

class CensoredWordNotValid extends Exception
{
    private const MESSAGE = 'Censored word not valid';

    public function __construct(int $code = 0, Throwable $previous = null)
    {
        parent::__construct(self::MESSAGE, $code, $previous);
    }
}