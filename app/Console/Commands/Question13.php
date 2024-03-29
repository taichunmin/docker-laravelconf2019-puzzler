<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question13 extends Command
{
    protected $signature = 'q13';

    public function handle()
    {
        app()->bindMethod(['foo', 'bar'], function () {
            return 'bar';
        });

        echo app()->call('foo@bar', [], 'baz');

        echo PHP_EOL;

        // A) foo
        // B) bar
        // C) baz
        // D) None of the above
    }
}
