<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\Dashboardcontroller;

class Dashboardcontroller extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }
}
