<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request){
        return inertia('Modules/Utility/Roles/Index');
    }
}
