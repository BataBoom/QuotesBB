<?php

namespace BataBoom\QuotesBB\Commands;

use Illuminate\Console\Command;

class QuotesBBCommand extends Command
{
    public $signature = 'quotesbb';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
