<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //
    public function addCompany(Request $request)
    {
        if (Auth::user()->can('create', User::class)) {
            abort(403);
        }

        $existCompany = Company::where('created_by', Auth::user()->id)->first();

        if(collect($existCompany)->isEmpty()){
            $company = new Company();
            $company->created_by = Auth::user()->id;
        } else {
            $company = $existCompany;
        }
        $validated = $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'street' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'category' => 'required',
            'city' => 'required',
            'website' => 'url'
        ]);
        
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->phone = $request->input('phone');
        $company->fax = $request->input('fax');
        $company->street = $request->input('street');
        $company->city = $request->input('city');
        $company->country_id = $request->input('country');
        $company->employee_count = $request->input('employee_count');
        $company->website = $request->input('website');
        $company->company_category_id = $request->input('category');
        $company->save();
        toast(''.config('msg.8').'','success');
        return redirect()->route('company-profile');
    }
}
