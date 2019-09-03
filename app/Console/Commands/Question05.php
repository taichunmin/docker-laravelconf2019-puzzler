<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question05 extends Command
{
    protected $signature = 'q5';

    public function handle()
    {
        collect()->macro('foo', function () {
            return 'bar';
        });

        echo [collect(), 'foo']('baz');

        echo PHP_EOL;

        // A) foo
        // B) bar
        // C) baz
        // D) None of the above
    }
}
