<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function dashboard()
    {
        return view('employee.dashboard');
    }

    public function request()
    {
        return view('employee.request');
    }
}
