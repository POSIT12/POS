<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    public function index(Request $request){
        $options = $request->options;
        switch($options){
            case 'lists':
                $files = Storage::files('Laravel');
                return $files;
            return '';
            break;
            default : 
            return inertia('Modules/Utility/Backups/Index');
        }
    }
    

    public function create()
    {
        $data = Artisan::call('backup:run');
        
        if($data == 0){
            return back()->with([
                'message' => 'Backup was successfully. Thanks',
                'data' => '',
                'type' => 'bxs-check-circle',
                'color' => 'success'
            ]); 
        }else{

        }
    }
}
