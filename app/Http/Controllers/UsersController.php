<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function index(){
        return view('users.index');
    }
    public function create(Request $request){
        return view('users.create');
}



public function dashboard(Request $request){
    return view('dashboard.dashboard');
}
}
