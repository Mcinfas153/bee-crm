<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use DataTables;

class LeadController extends Controller
{
    //
    public function getLeads(Request $request)
    {
        if ($request->ajax()) {
            $data = Lead::orderBy('id','DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm btn-block mb-2"><i class="fas fa-edit"></i> Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm btn-block" onClick="deleteLead()"><i class="fas fa-times"></i> Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
