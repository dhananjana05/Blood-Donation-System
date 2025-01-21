<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileregistrationController;
use App\Http\Controllers\RegisterdonorController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DonorindexController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;








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
Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/homeuser',[UserController::class,'index'])->name('home.home2');
Route::get('/homeuser/details',[UserController::class,'details'])->name('home.homedonordetails');
Route::post('/homeuser/details/registration',[UserController::class,'registrationuser'])->name('homedonordetails.registration');

Route::get('/homeuser/details/login',[UserController::class,'login'])->name('homedonordetails.login');
Route::post('/homeuser/details/login',[UserController::class,'loginuser'])->name('homedonordetails.login.user');







Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.dashboard');

//Route::get('/dashboard/setting',[SettingController::class,'index'])->name('setting');
//Route::get('/dashboard/reg',[RegistrationController::class,'index'])->name('register');
Route::get('/send',[HomeController::class,"sendnotification"]);
// Route::get('/login', function () {
//    return view('authentication.login1');
// });



// Route for AuthController 

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login.post');
Route::get('/registration',[AuthController::class,'registration'])->name('registrations');
Route::post('/registration',[AuthController::class,'registrationpost'])->name('registrations.post');
//Route::post('/registration',[AuthController::class,'registrationpostaccount'])->name('account.registrationss.post');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');








 






//Route::get('/login',[LoginController::class,'index'])->name('login');


Route::get('/dashboard/profile',[ProfileregistrationController::class,'index'])->name('profile');
//Route::get('/dashboard/doctor',[DonorindexController::class,'index'])->name('doctor');
Route::get('/dashboard/doctor', [DonorindexController::class, 'index'])->name('doctor');


Route::get('/dashboard/doctor', [DonorindexController::class, 'contact'])->name('doctor.contact');

//Route::post('/dashboard/doctor', [DonorindexController::class, 'store'])->name('doctor.store');

Route::post('/register', [RegistrationController::class, 'register'])->name('register');


















Route::prefix('/dashboard/profile/reg')->group(function(){
 Route::get('/',[RegistrationController::class,'index'])->name('reg');
 Route::post('/store',[RegistrationController::class,"store"])->name('reg.store');

});

//create path for see to register donor profile

Route::prefix('/dashboard/profile/donorprofile')->group(function(){
 

    Route::get('/',[RegisterdonorController::class,'index'])->name('donorprofile');
  
});



// Route::prefix('/dashboard/profile/update')->group(function(){
 

//     Route::get('/',[ProfileController::class,'index'])->name('modify');
//     // Route::get('/search',[ProfileController::class,'search'])->name('update.search');
    
  
// });
//Route::get('/dashboard/profile/update',[UpdateController::class,'index'])->name('update');
//Route::get('/dashboard/profile/update/search',[UpdateController::class,'search'])->name('update.search');

//Route::get('/dashboard/profile/update/search','ProductController@search');

// Route::prefix('/dashboard/profile/update')->group(function(){
 

//     Route::get('/',[UpdateController::class,'index'])->name('update');
//     Route::get('/',[UpdateController::class,'search'])->name('update.search');


  

// });



Route::prefix('/dashboard/profile/update')->group(function() {
    Route::get('/', [UpdateController::class, 'index'])->name('update');
    Route::get('/search', [UpdateController::class, 'search'])->name('update.search');
    Route::get('/{id}/delete', [UpdateController::class, 'delete'])->name('update.delete');
    //Route::get('/{id}/update', [UpdateController::class, 'update'])->name('update.update');
    Route::get('/process/{id?}', [UpdateController::class, 'edit'])->name('update.edit');

    Route::put('/process/{id?}', [UpdateController::class, 'processUpdate'])->name('update.process');

    //Route::get('/{id}/delete', [UpdateController::class, 'delete'])->name('update.delete');

});



Route::prefix('/dashboard/setting')->group(function() {
    Route::get('/', [SettingController::class, 'index'])->name('setting');
    Route::post('/store', [SettingController::class, 'store'])->name('setting.store');
    //Route::post('/store', [SettingController::class, 'store'])->name('setting.store');

  //  Route::post('/{id}/{status}',[SettingController::class, 'updateStatus'])->name('update.status');
   // Route::post('/update-status/{id}/{status}', [SettingController::class, 'updateStatus'])->name('update.status');

   Route::post('/update-status/{id}/{status}', [SettingController::class, 'updateStatus'])->name('update.status');

  
  
  
   Route::post('/blood-capacity', [SettingController::class, 'blood'])->name('blood-capacity.add');
   // Route::get('/blood-capacity', [SettingController::class, 'index'])->name('blood-capacity.index');






   
   

});

//Route::post('/store', [DonorController::class, 'store'])->name('details.store');


//donor controller



Route::prefix('/dashboard/donordetails')->group(function() {
    Route::get('/', [DonorController::class, 'index'])->name('details');
    Route::get('/page', [DonorController::class, 'page'])->name('details.page');
    Route::post('/store', [DonorController::class, 'store'])->name('details.store');
    Route::get('/page/check', [DonorController::class, 'check'])->name('details.check');
    Route::get('/page/search', [DonorController::class, 'search'])->name('details.search');

    //Route::post('/details/contact', [DonorController::class, 'contact'])->name('details.contact');



    
   //Route::get('/store', [DonorController::class, 'store'])->name('details.store');
    //Route::post('/store/info', [DonorController::class, 'contact'])->name('details.contatct');


   // Route::get('/search', [UpdateController::class, 'search'])->name('update.search');
    //Route::get('/{id}/delete', [UpdateController::class, 'delete'])->name('update.delete');
    //Route::get('/{id}/delete', [UpdateController::class, 'delete'])->name('update.delete');

});




//Route::get('/dashboard/doctor', [DonorindexController::class, 'index'])->name('donorindex');




Route::prefix('/dashboard/hospitaldetails')->group(function() {
    Route::get('/', [HospitalController::class, 'index'])->name('hospital');
    Route::get('/donor', [HospitalController::class, 'donor'])->name('hospital.finddonor');
    Route::post('/donor/store', [HospitalController::class, 'store'])->name('hospital.reg');
    Route::get('/donor/store', [HospitalController::class, 'store'])->name('hospital.reg');



    Route::get('/hospital', [HospitalController::class, 'registration'])->name('hospital.registration');
    Route::post('/hospital', [HospitalController::class, 'registrationstore'])->name('hospital.registration.detals');

   // Route::post('/report', [HospitalController::class, 'report'])->name('hospital.registration.detals');



   // Route::get('/showdetails', [HospitalController::class, 'page'])->name('hospital.details');
  

});




//account cotroller

Route::prefix('/dashboard/account')->group(function() {


    Route::get('/', [AccountController::class, 'lording'])->name('account.lording');


    Route::get('/lording', [AccountController::class, 'check'])->name('account.login');



    //Route::post('/account',[AccountController::class,'loginPost'])->name('account.mainindex');
   // Route::get('/account/mainindex', 'AccountController@index')->name('account.mainindex');



   Route::post('/login/credentiasl', [AccountController::class, 'loginPost'])->name('account.main');

   Route::get('/lording/login/main', [AccountController::class, 'afteraddrole'])->name('account.afteraddrole');

  // Route::post('/lording/login/main', [AccountController::class, 'index'])->name('account.mainindex');


   

   Route::post('/registration',[AccountController::class,'registrationpost'])->name('account.registration');

   Route::get('/{id}/delete', [AccountController::class, 'delete'])->name('account.delete');







  // Route::get('/edit', [AccountController::class, 'edit'])->name('account.edit');
 //  Route::get('/{id}/update', [AccountController::class, 'update'])->name('account.update');

  // Route::post('/{id}/update', [AccountController::class, 'update'])->name('account.update');





    

  
  

});



Route::post('/dashboard/account/{id}/update', [AccountController::class, 'update'])->name('account.update');
Route::get('/dashboard/account/update/{id}', [AccountController::class, 'see'])->name('account.see');

//Route::post('/dashboard/account/{id}/update', [AccountController::class, 'update'])->name('account.update');









Route::prefix('/dashboard/hospitaldetails')->group(function() {
    Route::get('/', [HospitalController::class, 'index'])->name('hospital');
    Route::get('/donor', [HospitalController::class, 'donor'])->name('hospital.finddonor');
    Route::post('/donor/store', [HospitalController::class, 'store'])->name('hospital.reg');
    Route::get('/donor/store', [HospitalController::class, 'store'])->name('hospital.reg');



    //Route::get('/hospital', [HospitalController::class, 'registration'])->name('hospital.registration');
    Route::post('/hospital', [HospitalController::class, 'registrationstore'])->name('hospital.registration.detals');

   // Route::post('/report', [HospitalController::class, 'report'])->name('hospital.registration.detals');



   // Route::get('/showdetails', [HospitalController::class, 'page'])->name('hospital.details');
  

});


?>
