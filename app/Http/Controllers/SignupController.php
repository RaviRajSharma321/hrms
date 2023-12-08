<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;

class SignupController extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
            $signup = new signup;
            $signup->name = $request['name'];
            $signup->phone = $request['phno'];
            $signup->email = $request['email'];
            $signup->username = $request['username'];
            $signup->password = $request['password'];
            $signup->save();
            return redirect('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        $session_data = session()->all();

        if( isset($session_data) && isset($session_data['role_id']) && $session_data['role_id'] == 1 )
        {
            return view('dashboard');
        }
        else
        {
            return redirect('/login')->with('error', 'You do not have admin access.');
        }
    }
    public function hrview()
    {
        $session_data = session()->all();

        if( isset($session_data) && isset($session_data['role_id']) && $session_data['role_id'] == 2)
        {
            return view('dashboard');
        }
        else
        {
            return redirect('/login');
        }
    }
    public function mgview()
    {
        $session_data = session()->all();

        if( isset($session_data) && isset($session_data['role_id']) && $session_data['role_id'] == 3)
        {
            return view('dashboard');
        }
        else
        {
            return redirect('/login');
        }
    }
    public function empview()
    {
        $session_data = session()->all();

        if($session_data['role_id'] == 4)
        {
            return view('dashboard');
        }
        else
        {
            return redirect('/login');
        }
    }





    //authentication

    public function auth(Request $request)
    {
        $signup = signup::where('username', $request->username)
                  ->where('password', $request->password)
                  ->first();

                //   echo "<pre>";
                //   print_r($signup);
                //   echo "</pre>";

                //   die("=------------");

        if($signup)
        {
           // session(['username' => $signup->username, 'role_id' => $signup->role_id]);

            $data = session(['username' => $signup->username]);

            // if($signup->role_id==1)
            // {
            //     return redirect('/home');
            // }
            // elseif($signup->role_id==2)
            // {
            //     return redirect('/hrview');
            // }
            // elseif($signup->role_id==3)
            // {
            //     return redirect('/managerview');
            // }
            // else
            // {
            //     return redirect('/dashboard')->with('data',$signup);
            // }

            //   echo "<pre>";
            //       print_r($signup);
            //       echo "</pre>";

            //       die("=------------");

           // return redirect('/dashboard')->with('data',$signup);

           return redirect('/users')->with($data,$signup);
        }
        // else
        // {
        //     $data = 1;
        //     return redirect('/login')->with('data', $data);
        // }
    }
    public function logout()
    {
        session()->flush();
        return redirect('/login');

    }
}
