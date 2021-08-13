<?php

declare(strict_types=1);

namespace App;

class Bob
{
    public static function response($speech): string
    {
        return match (true) {
            $speech === '' => 'Fine. Be that way!',
            str_ends_with($speech, '!?') => 'Calm down, I know what I\'m doing!',
            str_ends_with($speech, '?') => 'Sure.',
            str_ends_with($speech, '!') => 'Whoa, chill out!',
            default => 'Whatever!',
        };
    }
}
