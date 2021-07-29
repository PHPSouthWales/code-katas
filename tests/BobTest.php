<?php

namespace App\Tests;

use App\Bob;
use PHPUnit\Framework\TestCase;

class BobTest extends TestCase
{
    /** @test */
    public function shouldSayWhateverToAnythingElse(): void
    {
        $this->assertSame('Whatever!', Bob::response('anything'));
    }

    /** @test */
    public function shouldSayFineIfYouDoNotSayAnything(): void
    {
        $this->assertSame('Fine. Be that way!', Bob::response(''));
    }

    /** @test */
    public function shouldRespondToAQuestion(): void
    {
        $speech = 'A question?';

        $this->assertSame('Sure.', Bob::response($speech));
    }

    /** @test */
    public function shouldRespondToYelling(): void
    {
        $speech = 'A question!';

        $this->assertSame('Whoa, chill out!', Bob::response($speech));
    }

    /** @test */
    public function shouldRespondToYellingAQuestion(): void
    {
        $speech = 'A question!?';

        $this->assertSame('Calm down, I know what I\'m doing!', Bob::response($speech));
    }
}
