<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request){
       return inertia('Modules/Utility/Roles/Index');
    }

    public function store(Request $request){
        $role = $request->role;
        $menus = $request->menus;

        $arrayOfIds = array_map(function($item) {
            return $item['id'];
        }, $menus);

        if($role == 'Owner'){
            $role = Role::find(2);
            $role->menus()->sync($arrayOfIds);
        }else if($role == 'Cashier'){
            $role = Role::find(3);
            $role->menus()->sync($arrayOfIds);
        }else if($role == 'Assistant Clerk'){
            $role = Role::find(4);
            $role->menus()->sync($arrayOfIds);
        }else{
            $role = Role::find(5);
            $role->menus()->sync($arrayOfIds);
        }
    }
}
