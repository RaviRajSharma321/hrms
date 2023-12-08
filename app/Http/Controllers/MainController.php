<?php

namespace App\Http\Controllers;
use App\Models\departments;
use App\Models\per_dtls;
use App\Models\emp_dtls;
use Illuminate\Http\Request;


class MainController extends Controller
{

    function dashboard()
    {
        $session_data = session()->all();

        //$data = $session_data['username'];
        //die('----');

        $data = ['username' => $session_data['username']];

        if(isset($session_data) && isset($session_data['username']))
        {
            return view('users')->with($data);
        }
        else
        {
            return redirect('/login');
        }

        // if( isset($session_data) && isset($session_data['role_id']))
        // {
        //     return view('dashboard');
        // }
        // else
        // {
        //     return redirect('/login');
        // }

        return view('users');
    }



    function department()
    {
        $session_data = session()->all();

        if( isset($session_data) && isset($session_data['role_id']) && ($session_data['role_id'] == 1 || $session_data['role_id'] == 2) )
        {
            $departments = departments::all();
            return view('departments', compact('departments'));
        }
        else
        {
            return redirect('/login')->with('error', 'You do not have admin access.');
        }
    }



    function perdtl()
    {
        $session_data = session()->all();

        if(isset($session_data) && isset($session_data['role_id']) && ( $session_data['role_id'] == 1 || $session_data['role_id'] == 2 ) )
        {
            return view('emp_per_dtls');
        }
        else
        {
            return redirect('/login')->with('error', 'You do not have admin access.');
        }
    }



    function emps()
    {
        $session_data = session()->all();

        if(isset($session_data) && isset($session_data['role_id']) && ( $session_data['role_id'] == 1 || $session_data['role_id'] == 2 ) )
        {
            $per_dtls = per_dtls::all();
            return view('employees',compact('per_dtls'));
        }
        else
        {
            return redirect('/login')->with('error', 'You do not have admin access.');
        }
    }


    function employdtl(Request $request){
        $session_data = session()->all();

        if(isset($session_data) && isset($session_data['role_id']) && ( $session_data['role_id'] == 1 || $session_data['role_id'] == 2 ) )
        {
            $departments = departments::all();
            $allParams = $request->query();
            $empid = $allParams['id'];
            $empdtl = emp_dtls::find($empid);
            // echo "<pre>";
            // print_r($departments);
            // echo "</pre>";
            // die('--------');
            return view('employeedetail', compact('allParams','departments'));
        }
        else
        {
            return view('/login');
        }
    }


    function addbkdtls(Request $request)
    {
        $session_data = session()->all();

        if(isset($session_data) && !isset($session_data['signup']))
        {
            return view('/login');
        }
        $a = $request->query();
        return view('bankdetail', compact('a'));
    }


    function addocs(Request $request)
    {
        $session_data = session()->all();

        if(isset($session_data) && !isset($session_data['signup']))
        {
            return view('/login');
        }
        $adocs = $request->query();
        return view('addocs', compact('adocs'));
    }


    function deps()
    {
       $session_data = session()->all();

        if(isset($session_data) && isset($session_data['role_id']) && $session_data['role_id'] == 1 )
        {
            return view('adddep');
        }
        else
        {
            return redirect('/login')->with('error', 'You do not have admin access.');
        }
    }




}
