<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftRouter;

use BadMethodCallException;

/**
* @psalm-type T = array<empty, empty>
*
* @template-extends TypedArgs<T>
*/
final class EmptyArgs extends TypedArgs
{
    const COUNT_EMPTY = 0;

    public function __construct()
    {
        parent::__construct([]);
    }

    public function __get(string $k)
    {
        /**
        * @var string
        */
        $k = $k;

        throw new BadMethodCallException(
            __METHOD__ .
            '() cannot be called on ' .
            static::class .
            ' with ' .
            $k .
            ', ' .
            static::class .
            ' has no arguments!'
        );
    }

    public function count() : int
    {
        return self::COUNT_EMPTY;
    }

    public function toArray() : array
    {
        return [];
    }
}
