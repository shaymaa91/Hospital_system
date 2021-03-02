<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(){
    return view('hospital.index');
}
function adminclick(){
    return view('Admin.AdminLogin');
}




}
