<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;

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

Route::get("tes-rajaongkir",function(){
    $hasil = rajaongkir_point("city");
    return response()->json($hasil);
});

Route::get("/findjob",function(){
    $hasil = rajaongkir_point("province");
    return response()->json($hasil);
});

Route::get('/', function () {
    return view('main.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/myprofile', function () {
//     return view('user.myProfile');
// })->name('myProfile');

// Halaman Main
// Route::get('/', [MainController::class, 'index']);
Route::get('/aboutus', [MainController::class, 'about']);
Route::get('/findjobs', [MainController::class, 'findjobs']);
// Route::get('/login', [MainController::class, 'login']);
// Route::get('/signup', [MainController::class, 'signup']);
Route::get('/succes', [MainController::class, 'succes']);


// Routes Halaman User
Route::get('/homeUser', [UserController::class, 'home']);
Route::get('/findjobsUser', [UserController::class, 'findjobs']);
Route::get('/aboutUser', [UserController::class, 'about']);
Route::get('/profileUser', [UserController::class, 'profile']);
Route::get('/jobsUser', [UserController::class, 'jobs']);
Route::get('/myprofile', [UserController::class, 'myprofile'])->name('myprofile');
Route::get('/editProfile', [UserController::class, 'editProfile']);
Route::get('/education', [UserController::class, 'education']);
Route::get('/editEdu', [UserController::class, 'editEdu']);
Route::get('/skill', [UserController::class, 'skill']);
Route::get('/editSkill', [UserController::class, 'editSkill']);
Route::get('/password', [UserController::class, 'password']);
Route::get('/editPassword', [UserController::class, 'editPassword']);

// Route Halaman Vacancy
Route::get('/landingPage', [VacancyController::class, 'landingPage']);
Route::get('/faq', [VacancyController::class, 'faq']);
Route::get('/about', [VacancyController::class, 'about']);
Route::get('/loginCorp', [VacancyController::class, 'login']);
Route::get('/signupCorp', [VacancyController::class, 'signup']);
Route::get('/succesCorp', [VacancyController::class, 'succes']);
Route::get('/service', [VacancyController::class, 'service']);
Route::get('/formUnggahan', [VacancyController::class, 'formUnggahan']);

// ajax
Route::get('/get-provinsi', [MainController::class, 'provinsi']);
Route::get('/get-kota', [MainController::class, 'kota']);


Route::get("registrasi",[MainController::class,'registrasi']);
Route::post("registrasi",[MainController::class,'registrasi_post']);