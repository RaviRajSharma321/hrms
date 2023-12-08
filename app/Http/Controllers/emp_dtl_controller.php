<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emp_dtls;

class emp_dtl_controller extends Controller
{
    function emp_dtl()
    {
        return view('emp_detls');
    }

    function emp_dtlp(Request $request)
    {

        //die('---');
        $emp = new emp_dtls;
        $emp->employment_type = $request['emptype'];
        $emp->designation = $request['degtn'];
        $emp->department = $request['dep'];
        $emp->doj = $request['doj'];
        $emp->salaryatj = $request['saj'];
        $emp->appraiseldue = $request['appd'];
        $emp->dateonextappr = $request['dona'];
        $emp->agre_drtn = $request['agdtn'];
        $emp->comments = $request['comments'];
        if($request['refby']!="")
        {$emp->referencedby = $request['refby'];}
        else
        {$emp->referencedby = NULL;}
        $emp->status = $request['status'];
        $emp->issecded = $request['issecd'];
        $emp->sec_amnt = $request['secamt'];
        $emp->save();

        echo $emp;


    }
}
