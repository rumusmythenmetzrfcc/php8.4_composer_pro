<?php declare(strict_types=1);

namespace PML;

final class Greeter
{
    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}
?>

