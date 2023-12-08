<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bank_dtls;

class bank_dtl_controller extends Controller
{
    function bank_dtl()
    {
        return view('bank_dtls');
    }

    function bank_dtlp(Request $request)
    {
        //print_r($request['bankname']);
        $user = new bank_dtls;
        $user->bankname = $request['bankname'];
        $user->ifsccode = $request['ifsccode'];
        $user->acnumber = $request['acnumber'];
        $user->acholdername = $request['acname'];
        $user->save();
    }
}
