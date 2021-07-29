<?php

namespace App\Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function it_says_hello(): void
    {
        $this->assertSame('Hello, World!', HelloWorld::saySomething());
    }
}
