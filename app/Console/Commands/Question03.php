<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question03 extends Command
{
    protected $signature = 'q3';

    public function handle()
    {
        $foo = [0];
        $bar = [1];

        echo count($foo + $bar) + count(array_merge($foo, $bar));

        echo PHP_EOL;

        // A) 2
        // B) 3
        // C) 4
        // D) None of the above
    }
}
