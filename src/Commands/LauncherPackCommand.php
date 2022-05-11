<?php

namespace Westreels\LauncherPack\Commands;

use Illuminate\Console\Command;

class LauncherPackCommand extends Command
{
    public $signature = 'launcher-pack';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
