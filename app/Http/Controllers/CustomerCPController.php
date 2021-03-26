<?php

namespace App\Http\Controllers;

use App\Models\CustomerCPModel as CP;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class CustomerCPController extends BaseController
{
    private $idnew;

    public function showById($id)
    {
        $cp = CP::where('id', '=', $id)
        ->first();

        return view('form_cp', ['records' => $cp]);
    }

    public function inputData($id)
    {
        $cp = CP::where('Customer_id', '=', $id)
        ->first();

        $this->idnew = $id;

        return view('form_cp');
    }

    public function putData($id, Request $request)
    {
        $cpData = CP::find($id); //id tabel cp
        $idCust = $cpData->Customer_id; //find foreign key

        $cpData->first_name = $request->input('first_name');
        $cpData->last_name = $request->input('last_name');
        $cpData->no_ktp = $request->input('no_ktp');
        $cpData->no_telp = $request->input('no_telp');
        $cpData->email = $request->input('email');
        $cpData->address = $request->input('address');
        if ($id == null) {
            $cpData->Customer_id = $idCust;
            $string = "input";
        }
        else{
            $cpData->Customer_id = $this->idnew;
            $string = "edit";
        }

        $cpData->save();

        return redirect('/formCust/'.$cpData->Customer_id)
        ->with('status', $string);
    }
}
