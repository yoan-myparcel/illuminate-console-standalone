<?php

declare(strict_types=1);

namespace App;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    protected $signature = 'example';

    protected $description = 'Example command';

    public function handle(): int
    {
        $this->info('Hello, world!');
        return self::SUCCESS;
    }
}
