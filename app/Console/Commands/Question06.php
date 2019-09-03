<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question06 extends Command
{
    protected $signature = 'q6';

    public function handle()
    {
        echo in_array('foo', [0, 1]) ? 1 : 0;
        echo in_array(0, ['foo', 'bar']) ? 1 : 0;

        echo PHP_EOL;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
