<?php declare(strict_types=1);

namespace PML;

// use \Greeter as Greeter;
require_once("Greeter.php");
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter;

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Alice!', $greeting);
    }
}

?>
