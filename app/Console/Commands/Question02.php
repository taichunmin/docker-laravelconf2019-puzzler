<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question02 extends Command
{
    protected $signature = 'q2';

    public function handle()
    {
        echo '123' == ' 123' ? 1 : 0;
        echo '123' <> ' 123' ? 1 : 0;

        echo PHP_EOL;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
