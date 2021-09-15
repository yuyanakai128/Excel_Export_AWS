<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Filesystem\Filesystem;
use SebastianBergmann\Environment\Console;
use App\Http\Controllers\UserController;
use Symfony\Component\Console\Output\ConsoleOutput;

class Sales_Export extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sales:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sales';

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
        while(true) {
            $controller->salesFileExport();
            $output->writeln("<info>Output Sales data in CSV format</info>");
            sleep(60*5);
        }
        return 0;
    }
}
