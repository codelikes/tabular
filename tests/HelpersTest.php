<?php

declare(strict_types=1);

namespace Codelikes\Tabular\Test;

class HelpersTest extends TestCase
{
    public function testSayOutput()
    {
        say("Hello world");
        $this->expectOutputString("Hello world");
    }
}
