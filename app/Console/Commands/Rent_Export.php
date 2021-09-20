<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Filesystem\Filesystem;
use SebastianBergmann\Environment\Console;
use App\Http\Controllers\UserController;
use Symfony\Component\Console\Output\ConsoleOutput;

class Rent_Export extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csv:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rent';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $controller = new UserController();
        $output = new ConsoleOutput();
        $env = env('RENT');
        $output->writeln("<info>env</info>".$env);
        while(true) {
            if($env) {
                $controller->rentFileExport();
                $output->writeln("<info>Output Rent data in CSV format</info>");
                sleep(60*5);
            } else {
                $controller->salesFileExport();
                $output->writeln("<info>Output Sales data in CSV format</info>");
                sleep(60*5);
            }
        }
        return 0;
    }
}
