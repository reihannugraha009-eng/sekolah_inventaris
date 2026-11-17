<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class DasbordController extends Controller
{
    public function index(){
        return view('admin.dashbord');
    }
}
