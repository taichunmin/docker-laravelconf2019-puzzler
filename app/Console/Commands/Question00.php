<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question00 extends Command
{
    protected $signature = 'q0';

    public function handle()
    {
        $foo = 1;

        echo $foo++;

        echo PHP_EOL;

        // A) 1
        // B) 2
        // C) 3
        // D) None of the above
    }
}
