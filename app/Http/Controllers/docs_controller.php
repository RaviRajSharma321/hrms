<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emp_dtls;


class docs_controller extends Controller
{
    function docs_g()
    {
        return view('emp_docs');
    }
}
