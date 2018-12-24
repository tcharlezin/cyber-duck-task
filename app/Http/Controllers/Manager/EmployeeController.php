<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with("company")->paginate(10);
        return view("manager.employee.index", compact("employees"));
    }

    public function create()
    {
        $companies = Company::orderBy("name")->get()->pluck("name", "id");
        return view("manager.employee.create", compact("companies"));
    }

    public function store(EmployeeRequest $request)
    {
        try
        {
            DB::beginTransaction();

            $data = $request->all();
            $employee = Employee::create($data);

            DB::commit();
            return redirect()->to(route("manager.employee.index"))->withSuccess(__("Employee created with success!"));
        }
        catch (\Exception $ex)
        {
            DB::rollBack();
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $companies = Company::orderBy("name")->get()->pluck("name", "id");

        return view("manager.employee.edit", compact("employee", "companies"));
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        $companies = Company::orderBy("name")->get()->pluck("name", "id");

        return view("manager.employee.show", compact("employee", "companies"));
    }

    public function update(EmployeeRequest $request, $id)
    {
        try
        {
            DB::beginTransaction();

            $employee = Employee::findOrFail($id);
            $data = $request->all();

            $employee->update($data);

            DB::commit();
            return redirect()->to(route("manager.employee.index"))->withSuccess(__("Employee updated with success!"));
        }
        catch (\Exception $ex)
        {
            DB::rollBack();
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        try
        {
            DB::beginTransaction();

            $employee = Employee::findOrFail($id);
            $employee->delete();

            DB::commit();
            return redirect()->to(route("manager.employee.index"))->withSuccess(__("Employee removed with success!"));
        }
        catch (\Exception $ex)
        {
            DB::rollBack();
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }

}
