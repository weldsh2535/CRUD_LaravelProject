<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(){
        return View("home");
    }
    function viewData(){
        $stud = student::all(); 
        return View("viewdata",compact($stud));
    }
}
