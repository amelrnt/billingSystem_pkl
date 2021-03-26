<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\CustomerCPModel as CPModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class CustomerController extends BaseController
{
    public function showAll()
    {
        $customer = CustomerModel::paginate(10);

        return view('customer', ['customer' => $customer]);
    }

    public function showById($id)
    {
        
        $customer = CustomerModel::where('id', '=', $id)
        ->first();

        $customerCP = CPModel::where('Customer_id', '=', $id)
        ->get();

        //dd($customer);
        return view('form_cust', ['records' =>$customer])
        ->with(['cp' => $customerCP]);
    }

    public function putData(Request $request, $id)
    {
        $custData = CustomerModel::find($id);

        $custData->company = $request->input('company');
        $custData->phone_number = $request->input('phone_number');
        $custData->address = $request->input('address');
        $custData->city = $request->input('city');
        $custData->district = $request->input('district');
        $custData->email = $request->input('email');
        $custData->type = $request->input('type');
        $custData->save();

        if ($id === null) {
            $string = "input";
        }
        else{
            $string = "edit";
        }
        return redirect('/customerData')
        ->with('status', $string);
    }

    public function insert(Request $request)
    {
        $custData = new CustomerModel;
        $custData->company = $request->input('company');
        $custData->phone_number = $request->input('phone_number');
        $custData->address = $request->input('address');
        $custData->city = $request->input('city');
        $custData->district = $request->input('district');
        $custData->email = $request->input('email');
        $custData->type = $request->input('type');
        $custData->save();

        $cpData = new CPModel;
        $cpData->first_name = $request->input('first_name');
        $cpData->last_name = $request->input('last_name');
        $cpData->no_ktp = $request->input('no_ktp');
        $cpData->no_telp = $request->input('no_telp');
        $cpData->email = $request->input('emailCP');
        $cpData->address = $request->input('addressCP');
        $cpData->Customer_id = $custData->id;
        $cpData->save();

        return redirect('/customerData')
        ->with('status', 'input');
    }
        
}
