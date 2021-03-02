<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FixedController extends Controller
{
    function index(){
    return view('layouts.fixed');
}
function dashboard(){
    return view('Admin.AdminDashboard');
}



}
