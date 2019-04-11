<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use DB;
use Illuminate\Http\Request;

class addRole extends Controller
{
    public function index()
    {
        $role = DB::table('role')
        ->get();
        //$role = DB::table('role')
        //->where('Role','Super Admin')
        //->first();

        return view ('addMember') -> with ('roles', $role);
        //return $role->Id;
    }
}
