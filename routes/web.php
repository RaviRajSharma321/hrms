<?php

use App\Http\Controllers\bank_dtl_controller;
use App\Http\Controllers\docs_controller;
use App\Models\per_dtls;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\pd_controller;
use App\Http\Controllers\emp_dtl_controller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/epd',[pd_controller::class,'eper_dtls']);
//Route::post('/epd1',[pd_controller::class,'eper_dtlsp_1']);
//Route::post('/submit-form',[pd_controller::class,'eper_dtlsp_2']);



Route::get('/empd',[emp_dtl_controller::class,'emp_dtl']);

//Route::post('/empd1',[emp_dtl_controller::class,'emp_dtlp']);


Route::get('/bdtl',[bank_dtl_controller::class,'bank_dtl']);
//Route::post('/bdtlp',[bank_dtl_controller::class,'bank_dtlp']);

Route::get('/docs',[docs_controller::class,'docs_g']);


Route::get('/tt',[pd_controller::class,'tt'])->name('tt');




//dummy

Route::post('/form1-submit', [FormController::class,'submitForm1'])->name('form.submit1');
Route::post('/form2-submit', [FormController::class,'submitForm2'])->name('form.submit2');


Route::get('/dummy',[FormController::class,'view']);


//asli

Route::post('/submitpd',[FormController::class,'submitpd'])->name('submit_pd');
Route::post('/submited',[FormController::class,'submited'])->name('submit_ed');
Route::post('/submitbank',[FormController::class,'submitbank'])->name('submit_bank');
Route::post('/submitdocs',[FormController::class,'submitdocs'])->name('submit_docs');
Route::post('/postdep',[FormController::class,'postdep'])->name('postdeps');

//dashboard

Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');


//add deps
Route::get('/adddep',[MainController::class,'deps'])->name('add_deps');
Route::get('/departments',[MainController::class,'department'])->name('departments');



//employees
Route::get('/employees',[MainController::class,'emps'])->name('employees');
//Route::get('/employees',[MainController::class,'emps'])->name('emps');

Route::get('/addperdtl',[MainController::class,'perdtl'])->name('perdtl');
Route::get('/addempdtls',[MainController::class,'employdtl'])->name('employdtl');//done
Route::get('/addocs',[MainController::class,'addocs'])->name('addocs');
Route::get('/addbkdtls',[MainController::class,'addbkdtls'])->name('addbkdtls');




//Route::get('/emp_detls',[MainController::class,'ed'])->name('emp_dtls');
Route::post('/per_dtls',[FormController::class,'submitpd2'])->name('per_dtls');
Route::post('/emp_dtls',[FormController::class,'submited2'])->name('emp_dtls');
Route::post('/bank_dtls',[FormController::class,'submitbank2'])->name('bank_dtls');
Route::post('/adddocs',[FormController::class,'submitdocs2'])->name('adddocs');

//Authentication
Route::get('/signup',[SignupController::class,'signup'])->name('signup');
Route::post('submitform',[SignupController::class,'register'])->name('register');

Route::get('/login',[SignupController::class,'login'])->name('login');
Route::post('/auth',[SignupController::class,'auth'])->name('auth');
Route::get('/logout',[SignupController::class,'logout'])->name('logout');

//routee
Route::get('/home',[SignupController::class,'home'])->name('home');
Route::get('/hrview',[SignupController::class,'hrview'])->name('hrview');
Route::get('/managerview',[SignupController::class,'mgview'])->name('mgview');
Route::get('/empview',[SignupController::class,'empview'])->name('empview');



//users

Route::get('/users',[MainController::class,'dashboard'])->name('dashboard');


