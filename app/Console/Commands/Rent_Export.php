<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Filesystem\Filesystem;
use SebastianBergmann\Environment\Console;
use App\Http\Controllers\UserController;

class Rent_Export extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rent:data';

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
        return $controller->rentFileExport();
    }
}
