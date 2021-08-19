<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompanyPage extends Component
{

    public $name;
    public $email;
    public $phone;
    public $fax;
    public $street;
    public $city;
    public $country;
    public $employee_count;
    public $category;
    public $website;

    public function render()
    {
        $countries = Country::all();
        $categories = CompanyCategory::all();
        return view('livewire.company-page',[
            'countries' => $countries,
            'categories' => $categories
        ])->layout('layouts.app',[
            'title' => 'Company Profile'
        ]);
    }

    public function mount()
    {
        $company = Company::where('created_by', Auth::user()->id)->first();
        if(collect($company)->isNotEmpty()){
            $this->name = $company->name;
            $this->email = $company->email;
            $this->phone = $company->phone;
            $this->fax = $company->fax;
            $this->street = $company->street;
            $this->city = $company->city;
            $this->country = $company->country_id;
            $this->employee_count = $company->employee_count;
            $this->website = $company->website;
            $this->category = $company->company_category_id;
        }
    }
}
