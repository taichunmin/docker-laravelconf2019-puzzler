<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question11 extends Command
{
    protected $signature = 'q11';

    public function handle()
    {
        $list = [1, 2, 3];

        foreach ($list as &$item) {
            echo $item;
        }

        foreach ($list as $item) {
            echo $item;
        }

        echo PHP_EOL;

        // A) 123123
        // B) 111123
        // C) 123333
        // D) 123122
    }
}
