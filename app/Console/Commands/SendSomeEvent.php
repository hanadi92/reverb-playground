<?php

namespace App\Console\Commands;

use App\Events\SomeEvent;
use Illuminate\Console\Command;

class SendSomeEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-some-event';

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
        //
        SomeEvent::dispatch();
    }
}
