<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question04 extends Command
{
    protected $signature = 'q4';

    public function handle()
    {
        $foo = 1;

        echo $foo+++$foo;

        echo PHP_EOL;

        // A) 2
        // B) 3
        // C) 4
        // D) None of the above
    }
}
