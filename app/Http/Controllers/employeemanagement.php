<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeemanagement extends Controller
{
    public function index()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Pass the employees to the view
        return view('employee.index', compact('employees'));
    }

    public function store(Request $request)
    {
        // Validate the request input
        $this->validateInput($request);

        // Specify the keys to be used for input
        $keys = ['first_name', 'last_name', 'DOB', 'phone'];

        // Create an input array using the specified keys
        $input = $this->createQueryInput($keys, $request);

        // Create a new employee record in the database
        Employee::create($input);

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function edit($id)
    {
        // Find the employee by ID
        $employee = Employee::findOrFail($id);

        // Pass the employee to the view
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request input
        $this->validateInput($request);

        // Find the employee by ID
        $employee = Employee::findOrFail($id);

        // Specify the keys to be used for input
        $keys = ['first_name', 'last_name', 'DOB', 'phone'];

        // Create an input array using the specified keys
        $input = $this->createQueryInput($keys, $request);

        // Update the employee record in the database
        $employee->update($input);

        // Redirect to the home route with a success message
        return redirect()->route('home')->with('success', 'Employee updated successfully!');
    }

    public function destroy($id)
    {
        // Find the employee by ID
        $employee = Employee::findOrFail($id);

        // Delete the employee record from the database
        $employee->delete();

        // Redirect to the employee index route with a success message
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }

    protected function validateInput(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'DOB' => 'required|date',
            'phone' => 'required|string|max:15',
        ]);
    }

    protected function createQueryInput(array $keys, Request $request)
    {
        return $request->only($keys);
    }
}