<?php

// use App\Http\Controllers\BranchController;

// use App\Http\Controllers\EmployeeController;
use App\Models\Branch;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers'],function(){
       Route::get('/','HomeController@index')->name('home.index');
       Route::get('/employee','EmployeeController@index')->name('employee.index');
       Route::get('/branch','BranchController@index')->name('branch.index');

Route::group(['middleware'=> ['guest']],function (){
        Route::get('/login','LoginController@show')->name('login.show');
        Route::post('/login','LoginController@login')->name('login.loginUser');
  });

  Route::group(['middleware'=> ['auth']],function (){
    Route::get('/logout','LogoutController@logout')->name('logout');

    Route::resource('/branch',BranchController::class);
    Route::resource('/employee',EmployeeController::class);

});

});

?>
