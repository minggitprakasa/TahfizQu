<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function tambahguru(){
        return view('admin.tambahguru');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
