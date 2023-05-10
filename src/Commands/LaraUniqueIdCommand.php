<?php

namespace Yearul\LaraUniqueId\Commands;

use Illuminate\Console\Command;

class LaraUniqueIdCommand extends Command
{
    public $signature = 'lara-unique-id';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
