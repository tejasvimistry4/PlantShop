<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function ManagerLogin(){
        return view('manager_login');
    }
}
