<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question09 extends Command
{
    protected $signature = 'q9';

    public function handle()
    {
        $foo = 'bar';
        $bar = 'baz';
        $baz = 2;

        echo $$foo[$$$foo] ?? 'x';

        echo PHP_EOL;

        // A) r
        // B) z
        // C) x
        // D) None of the above
    }
}
