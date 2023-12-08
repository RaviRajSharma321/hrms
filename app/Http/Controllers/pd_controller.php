<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\per_dtls;
use App\Models\bank_dtls;
use App\Models\emp_dtls;
use App\Models\document;
use App\Models\documents;

class pd_controller extends Controller
{
    function eper_dtls()
    {
        return view('/emp_per_dtls');
    }


    function eper_dtlsp_2(Request $request)
    {
        $formId = $request->input('form_id');

        // Handle form submission logic based on the form identifier

        if($formId == 'pdtl1233')
        {
            $user = new per_dtls;
            $user->ename = $request['ename'];
            $user->gender = $request['gender'];
            $user->experience = $request['months']." MONTHS ".$request['years']." YEARS ";
            $user->p_email = $request['pemail'];
            $user->comp_email = $request['cemail'];
            $user->phone = $request['phno'];
            $user->dob = $request['dob'];
            $user->staddress = $request['address'];
            $user->country = $request['country'];
            $user->state = $request['state'];
            $user->city = $request['city'];
            $user->save();
        }
        elseif($formId == 'bank123')
        {
            $user = new bank_dtls;
            $user->bankname = $request['bankname'];
            $user->ifsccode = $request['ifsccode'];
            $user->acnumber = $request['acnumber'];
            $user->acholdername = $request['acname'];
            $user->save();
        }
        elseif($formId == 'edtl123')
        {
            $user = new emp_dtls;
            $user->employment_type = $request['emptype'];
            $user->department = $request['dep'];
            $user->degtn = $request['degtn'];
            $user->doj = $request['doj'];
            $user->saj = $request['salaryatj'];
            $user->appraiseldue = $request['appd'];
            $user->dateofnextappr = $request['dona'];
            $user->agre_drtn = $request['agdtn'];
            $user->comments = $request['comments'];
            $user->referencedby = $request['refby'];
            $user->status = $request['status'];
            $user->issecded = $request['issecd'];
            $user->sec_amnt = $request['sec_amt'];
            $user->save();

        }
        elseif($formId == 'docs123')
        {
            $user = new documents;
            $user->pd_name = $request['pdname'];
            $user->per_docs = $request['pd'];
            $user->od_name = $request['odname'];
            $user->office_docs = $request['od'];
        }
        // Example response
        return response()->json(['message' => 'Form submitted successfully']);
    }




    function eper_dtlsp_1(Request $request)
    {
        // error_reporting();

        //  print_r($request['ename']);
        $user = new per_dtls;
        $user->ename = $request['ename'];
        $user->gender = $request['gender'];
        $user->experience = $request['months']." MONTHS ".$request['years']." YEARS ";
        $user->p_email = $request['pemail'];
        $user->comp_email = $request['cemail'];
        $user->phone = $request['phno'];
        $user->dob = $request['dob'];
        $user->staddress = $request['address'];
        $user->country = $request['country'];
        $user->state = $request['state'];
        $user->city = $request['city'];
        $user->save();




        return view('/emp_per_dtls');

    }

    function tt()
    {
        return view('/tabstut');
    }
}




