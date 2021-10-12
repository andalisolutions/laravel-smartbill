<?php

namespace Andali\Smartbill\Commands;

use Illuminate\Console\Command;

class SmartbillCommand extends Command
{
    public $signature = 'laravel-smartbill';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
