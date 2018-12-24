<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Service\Company\CreateCompany;
use App\Service\Company\DestroyCompany;
use App\Service\Company\UpdateCompany;
use DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        return view("manager.company.index", compact("companies"));
    }

    public function create()
    {
        return view("manager.company.create");
    }

    public function store(CompanyRequest $request)
    {
        try
        {
            DB::beginTransaction();

            $data = $request->all();

            (new CreateCompany($data))->execute();

            DB::commit();
            return redirect()->to(route("manager.company.index"))->withSuccess(__("Company created with success!"));
        }
        catch (\Exception $ex)
        {
            DB::rollBack();
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view("manager.company.edit", compact("company"));
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view("manager.company.show", compact("company"));
    }

    public function update(CompanyRequest $request, $id)
    {
        try
        {
            DB::beginTransaction();

            $data = $request->all();
            $company = Company::findOrFail($id);

            (new UpdateCompany($company, $data))->execute();

            DB::commit();

            return redirect()->to(route("manager.company.index"))->withSuccess(__("Company updated with success!"));
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

            $company = Company::findOrFail($id);

            (new DestroyCompany($company))->execute();

            DB::commit();

            return redirect()->to(route("manager.company.index"))->withSuccess(__("Company removed with success!"));
        }
        catch (\Exception $ex)
        {
            DB::rollBack();
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }

}
