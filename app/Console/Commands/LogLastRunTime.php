<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class LogLastRunTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:last-run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Logs the last time the command was run';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $logFile = storage_path('logs/last_run.log');
        $timestamp = now()->toDateTimeString();
        
        // Append the current timestamp to the log file
        file_put_contents($logFile, $timestamp . PHP_EOL, FILE_APPEND);

        $this->info("Logged the last run time: $timestamp");

        return Command::SUCCESS;
    }
}