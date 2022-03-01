<?php

namespace App\Scrabble;

use Illuminate\Support\Collection;

class Letter
{
    private static $SCORE_TABLE = [
        2 => ['d', 'g'],
        3 => ['b', 'c', 'm', 'p'],
        4 => ['f', 'h', 'v', 'w', 'y'],
        5 => ['k'],
        8 => ['j', 'x'],
        10 => ['q', 'z'],
    ];

    public function __construct(
        private string $value,
    ) {}

    public function score(): int
    {
        return Collection::make(items: self::$SCORE_TABLE)
            ->filter(fn (array $values): bool => Collection::make(items: $values)->contains(key: $this->value))
            ->pipe(function(Collection $scores) {
                return $scores->isNotEmpty()
                    ? $scores->keys()->first()
                    : 1;
            });

    }
}
