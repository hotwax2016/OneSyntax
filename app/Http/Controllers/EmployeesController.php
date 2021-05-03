<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getPage()
    {
        return view('dashboard.employee.index');
    }
    public function index()
    {
        $employees = Employee::with('department', 'city', 'state', 'country')->get();

        return response($employees, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function create()
    {
        return view('dashboard.employee.create');
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $data = request()->validate([
            'lastname' => 'required|string|max:60',
            'firstname' => 'required|string|max:6',
            'middlename' => 'string|max:60',
            'address' => 'required|string|max:120',
            'department_id' => 'required|exists:departments,id',
            'city_id' => 'required|exists,cities,id',
            'state_id' => 'required|exists,states,id',
            'country_id' => 'required|exists,countries,id',
            'zip' => 'required|int|max:10',
            'birthdate' => 'date',
            'date_hired' => 'date'
        ]); */

        $employee = Employee::create($data);

        return response()->json($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    /* public function edit(Employee $employee)
    {
        return view('dashboard.employee.edit', compact('employee'));
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        /* $data = request()->validate([
            'lastname' => 'required|string|max:60',
            'firstname' => 'required|string|max:6',
            'middlename' => 'string|max:60',
            'address' => 'required|string|max:120',
            'department_id' => 'required|exists:departments,id',
            'city_id' => 'required|exists,cities,id',
            'state_id' => 'required|exists,states,id',
            'country_id' => 'required|exists,countries,id',
            'zip' => 'required|int|max:10',
            'birthdate' => 'date',
            'date_hired' => 'date'
        ]); */

        $employee->update($data);

        return response('update complete', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delate();
    }
}
