<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class BackupController extends Controller
{
    public function index(Request $request){
        $options = $request->options;
        switch($options){
            case 'lists':
            //    return $this->lists($request);
            return '';
            break;
            default : 
            return inertia('Modules/Utility/Backups/Index');
        }
    }
    

    public function create()
    {
        $data = Artisan::call('backup:run');
        return $data;
    }
}
