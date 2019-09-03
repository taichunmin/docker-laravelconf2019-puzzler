<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question14 extends Command
{
    protected $signature = 'q14';

    public function handle()
    {
        app()->instance('foo', 'foo');

        app()->rebinding('foo', function () {
            echo 'bar';
        });

        app()->bind('foo', function () {
            return 'baz';
        });

        echo app()->make('foo');

        echo PHP_EOL;

        // A) foo
        // B) bar
        // C) baz
        // D) barbaz
    }
}
