<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question08 extends Command
{
    protected $signature = 'q8';

    public function handle()
    {
        echo 0 ?: 1;
        echo 0 ?? 1;

        echo PHP_EOL;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
