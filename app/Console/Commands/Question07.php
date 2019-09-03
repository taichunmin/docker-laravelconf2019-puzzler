<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question07 extends Command
{
    protected $signature = 'q7';

    public function handle()
    {
        echo [] ? 1 : 0;
        echo '0' ? 1 : 0;
        echo ' ' ? 1 : 0;

        echo PHP_EOL;

        // A) 111
        // B) 000
        // C) 011
        // D) 001
    }
}
