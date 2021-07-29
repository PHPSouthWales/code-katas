<?php

declare(strict_types=1);

namespace App;

class Bob
{
    public static function response($speech): string
    {
        // TODO: Use a match()?!

        if ($speech === '') {
            return 'Fine. Be that way!';
        }

        if (str_ends_with($speech, '!?')) {
            return 'Calm down, I know what I\'m doing!';
        }

        if (str_ends_with($speech, '?')) {
            return 'Sure.';
        }

        if (str_ends_with($speech, '!')) {
            return 'Whoa, chill out!';
        }

        return 'Whatever!';
    }
}
