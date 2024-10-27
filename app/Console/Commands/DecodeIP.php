<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpParser\Node\Stmt\Return_;

class DecodeIP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'decodeip:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
