<?php

namespace App\Http\Controllers;

use App\Models\AMModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AMController extends BaseController
{
    public function showAll()
    {
        $accountManager = AMModel::paginate(10);
        
        return view('accountmanager', ['am' => $accountManager]);
    }

    public function showById($id)
    {
        $am = AMModel::where('id', '=', $id)
        ->first();

        return view('form_am', ['records' => $am]);
    }

    public function putData(Request $request, $id)
    {
        $amData = AMModel::find($id);

        $amData->first_name = $request->input('first_name');
        $amData->last_name = $request->input('last_name');
        $amData->phone_number = $request->input('phone_number');
        $amData->email = $request->input('email');
        $amData->save();
        
        if ($id === null) {
            $string = "input";
        }
        else{
            $string = "edit";
        }
        return redirect('/amData')
        ->with('status', $string);
    }
}
