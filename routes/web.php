<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfillUserController;

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

Route::post("tes-rajaongkir",function(){
    $hasil = rajaongkir_point("province");
    return response()->json($hasil);
});

Route::get('/', function () {
    return view('main.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {
//     return view('admin.index');
// })->name('admin.index');

Route::group(['middleware' => ['auth:sanctum', 'verified', 'authadmin']], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/company', [AdminController::class, 'company']);
    Route::get('/jobs', [AdminController::class, 'jobs']);
    Route::get('/kandidat', [AdminController::class, 'kandidat']);

    //create
    Route::get('/create/company', [CrudController::class, 'createcompany']);
    Route::post('/create/company', [CrudController::class, 'addcompany'])->name('create/company');
    Route::get('/create/jobs', [CrudController::class, 'createjobs']);
    Route::post('/create/jobs', [CrudController::class, 'addjobs'])->name('create/jobs');

    //edit
    Route::get('/company/{id}/edit', [CrudController::class, 'editcompany']);
    Route::post('/company/{id}', [CrudController::class, 'updatecompany'])->name('company');
    Route::get('/jobs/{id}/edit', [CrudController::class, 'editjobs']);
    Route::post('/jobs/{id}', [CrudController::class, 'updatejobs'])->name('jobs');

    //delete
    Route::delete('/company/{id}', [CrudController::class, 'deletecompany']);
    Route::delete('/jobs/{id}', [CrudController::class, 'deletejobs']);
});

Route::middleware(['auth:sanctum', 'verified', 'authcompany'])->get('/company/dashboard', function () {
    return view('company.index');
})->name('company.index');


// Halaman Main
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/simpanjobs', [MainController::class, 'simpanjobs']);

// });


Route::get('/', [MainController::class, 'home']);
Route::get('/aboutus', [MainController::class, 'about']);
Route::get('/findjobs', [MainController::class, 'findjobs']);
// Route::get('/login', [MainController::class, 'login']);
// Route::get('/signup', [MainController::class, 'signup']);
Route::get('/succes', [MainController::class, 'succes']);
Route::get('/detailmain{id}', [MainController::class, 'detailmain']);


// Routes Halaman User
Route::get('/homeUser', [UserController::class, 'home']);
Route::get('/findjobsUser', [UserController::class, 'lihatjobs']);
Route::get('/aboutUser', [UserController::class, 'about']);
Route::get('/jobsUser', [UserController::class, 'jobs']);
// Route::get('/myprofile', [UserController::class, 'myprofile'])->name('myprofile');
Route::get('/password', [UserController::class, 'password']);
Route::get('/editPassword/{$id}', [UserController::class, 'edit']);
Route::get('/lamar{id}', [UserController::class, 'lamar_view']);
Route::get('/detail{id}', [UserController::class, 'detail_view']);
Route::post('/kirimcv', [UserController::class, 'insertcv']);
Route::post('/simpanjob', [UserController::class, 'simpanjob']);
Route::post('/deletejob', [UserController::class, 'deletejob']);

// Routes Halaman Profil User
Route::get('/user/{id}/editPassword', [ProfillUserController::class, 'editPassword']);
Route::post('/user/{id}/updatePassword', [ProfillUserController::class, 'updatePassword']);
Route::resource('user', ProfillUserController::class);
// Route::get('/user/{$id}/editPassword', [ProfillUserController::class, 'editPassword']);

// Route Halaman Vacancy
Route::get('/vacancy', [VacancyController::class, 'vacancy']);
Route::get('/landingPageCorp', [VacancyController::class, 'vacancy']);
Route::get('/landingPage', [VacancyController::class, 'landingPage']);
Route::get('/faq', [VacancyController::class, 'faq']);
Route::get('/about', [VacancyController::class, 'about']);
Route::get('/loginCorp', [VacancyController::class, 'login']);
Route::get('/signupCorp', [VacancyController::class, 'signup']);
Route::get('/succesCorp', [VacancyController::class, 'succes']);
Route::get('/service', [VacancyController::class, 'service']);
Route::get('/formUnggahan', [VacancyController::class, 'formUnggahan']);
Route::get('/candidate', [VacancyController::class, 'searchCandidate']);
Route::get('/profilCorp', [VacancyController::class, 'profilCorp']);
Route::get('/job', [VacancyController::class, 'jobCorp']);
Route::get('/editCorp', [VacancyController::class, 'editCorp']);
Route::get('/search', [VacancyController::class, 'search']);


// ajax
Route::get('/get-provinsi', [MainController::class, 'provinsi']);
Route::get('/get-kota', [MainController::class, 'kota']);

// ajax
Route::get('/get-provinsi2', [ProfillUserController::class, 'province']);
Route::get('/get-kota3', [ProfillUserController::class, 'city']);

//ajax
Route::get('/get-provinsi3', [CrudController::class, 'province']);
Route::get('/get-kota4', [CrudController::class, 'city']);

Route::get('/token', function () {
    return csrf_token();
});
Route::get("/registrasi",[UserController::class,"registrasi_view"]);
Route::post('/user/create', [UserController::class, 'registrasi']);

// relasi
Route::get('/corp', [MainController::class, 'home']);

// crud edukasi
Route::resource('education', EducationController::class);

Route::resource('skill', SkillController::class);

// company
Route::get('/corp', [CompanyController::class, 'home']);