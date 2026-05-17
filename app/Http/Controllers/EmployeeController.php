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
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'employee_name' => 'required|string|max:255',
            'leave_type' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string|max:1000',
        ]);

        // Here you would typically save the leave request to the database
        // For example:
        // LeaveRequest::create($request->all());

        // Redirect back with a success message
        return redirect()->route('employee.request')->with('success', 'Leave request submitted successfully.');
    }
}
