<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RentsExport;
use App\Exports\SalesExport;
use Illuminate\Filesystem\Filesystem;
use SebastianBergmann\Environment\Console;
use Session;
class UserController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        $limit_date =  date("Y-m-d H:i:s", strtotime("+1 day"));
        Session::put("regist_date", $limit_date);
       return view('file-export');
    }

    public function deleteFolder()
    {
        Session::forget('regist_date');
        $limit_date =  date("Y-m-d H:i:s", strtotime("+1 day"));
        Session::put("regist_date", $limit_date);
        return \File::deleteDirectory(public_path('backup/'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function rentFileExport() 
    {
        try {
            $regist_status = Session::get('regist_date');
            if(!$regist_status) {
                $limit_date =  date("Y-m-d H:i:s", strtotime("+1 day"));
                Session::put("regist_date", $limit_date);
            }
            $regist_date = Session::get('regist_date');
            $current_date = date("Y-m-d H:i:s");
            if($regist_date < $current_date) {
                return $this->deleteFolder();
            }
            $today = date("YmdHis");
            return Excel::store(new RentsExport(), 'backup/'.$today.'/TR13_CSV.xlsx', 'rent_public');
        } catch (\Throwable $err) {
            throw $err;
        }
    }

    public function salesFileExport() 
    {
        try {
            $regist_status = Session::get('regist_date');
            if(!$regist_status) {
                $limit_date =  date("Y-m-d H:i:s", strtotime("+1 day"));
                Session::put("regist_date", $limit_date);
            }
            $regist_date = Session::get('regist_date');
            $current_date = date("Y-m-d H:i:s");
            if($regist_date < $current_date) {
                return $this->deleteFolder();
            }
            $today = date("YmdHis");
            return Excel::store(new SalesExport(), 'backup/'.$today.'/TR10_CSV.xlsx', 'sales_public');

        } catch (\Throwable $err) {
            throw $err;
        }
    }    
}