<?php

namespace App\Http\Controllers;

use App\Models\dummy1;
use App\Models\dummy2;
use App\Models\per_dtls;
use App\Models\bank_dtls;
use App\Models\emp_dtls;
use App\Models\documents;
use App\Models\departments;


use Illuminate\Http\Request;

class FormController extends Controller
{

    public function submitpd(Request $request)
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

    public function submited(Request $request)
    {

        $user = new emp_dtls;
        $user->employment_type = $request['emptype'];
        $user->designation = $request['degtn'];
        $user->department = $request['dep'];
        $user->doj = $request['doj'];
        $user->salaryatj = $request['saj'];
        $user->appraiseldue = $request['appd'];
        $user->dateonextappr = $request['dona'];
        $user->agre_drtn = $request['agdtn'];
        $user->comments = $request['comments'];
        $user->referencedby = $request['refby'];
        $user->status = $request['status'];
        $user->issecded = $request['issecd'];
        $user->sec_amnt = $request['secamt'];
        $user->save();
    }

    public function submitpd2(Request $request)
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
        return redirect()->route('employees');
    }

    public function submited2(Request $request)
    {

        $user = new emp_dtls;
        $user->eid = $request['other_field'];
        $user->employment_type = $request['emptype'];
        $user->designation = $request['degtn'];
        $user->department = $request['dep'];
        $user->doj = $request['doj'];
        $user->salaryatj = $request['saj'];
        $user->appraiseldue = $request['appd'];
        $user->dateonextappr = $request['dona'];
        $user->agre_drtn = $request['agdtn'];
        $user->comments = $request['comments'];
        $user->referencedby = $request['refby'];
        $user->status = $request['status'];
        $user->issecded = $request['issecd'];
        $user->sec_amnt = $request['secamt'];
        $user->save();
        return redirect()->route('employees');
    }

    public  function submitbank2(Request $request)
    {
        $user = new bank_dtls;
        $user->eid = $request['other_field2'];
        $user->bankname = $request['bankname'];
        $user->ifsccode = $request['ifsccode'];
        $user->acnumber = $request['acnumber'];
        $user->save();
        return redirect()->route('employees');
    }

    public function submitdocs2(Request $request)
    {
        $user = new documents;
        $user->eid = $request['aocs'];
        $user->pd_name = $request['pdname'];
        $user->od_name = $request['odname'];
        $user->save();
        return redirect()->route('employees');
    }

    public function submitbank(Request $request)
    {
        $user = new bank_dtls;
        $user->bankname = $request['bankname'];
        $user->ifsccode = $request['ifsccode'];
        $user->acnumber = $request['acnumber'];
        $user->save();
    }

    public function submitdocs(Request $request)
    {
      //  die('----------');
        $user = new documents;
        $user->eid = $request['aocs'];
        $user->pd_name = $request['pdname'];
        $user->od_name = $request['odname'];
        $user->save();
    }

    public function submitForm1(Request $request)
    {
        $emp = new dummy1;
        $emp->name = $request['name1'];
        $emp->email1 = $request['email1'];
        $emp->save();
        return view('dummy');
    }

    public function submitForm2(Request $request)
    {
        $emp = new dummy2;
        $emp->d2name = $request['name2'];
        $emp->d2email1 = $request['email2'];
        $emp->save();
        return view('dummy');
    }

    public function postdep(Request $request)
    {
        $dep = new departments;
        $dep->dep_name = $request['dep'];

        $dep->save();


        return redirect()->route('departments');
    }
}
