<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question10 extends Command
{
    protected $signature = 'q10';

    public function handle()
    {
        $foo = 0 or 1;
        $bar = 0 xor 1;

        echo $foo;
        echo $bar;

        echo PHP_EOL;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
