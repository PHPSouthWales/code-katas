<?php

namespace App\Scrabble;

use Illuminate\Support\Collection;

class Letter
{
    private static $scoresForLetters = [
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
        return Collection::make(items: self::$scoresForLetters)
            ->filter(fn (array $values): bool => $this->isCorrectGroup(values: $values))
            ->pipe(callback: function(Collection $scores) {
                return $this->scoreForGroup($scores);
            });

    }

    private function isCorrectGroup(array $values): bool
    {
        return Collection::make(items: $values)->contains(key: $this->value);
    }

    private function scoreForGroup(Collection $scores): int
    {
        return $scores->isNotEmpty()
            ? $scores->keys()->first()
            : 1;
    }
}
