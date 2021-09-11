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
    Route::get('/candidate', [AdminController::class, 'candidate']);

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
Route::get('/', [MainController::class, 'home']);
Route::get('/aboutus', [MainController::class, 'about']);
Route::get('/findjobs', [MainController::class, 'findjobs']);
// Route::get('/login', [MainController::class, 'login']);
// Route::get('/signup', [MainController::class, 'signup']);
Route::get('/succes', [MainController::class, 'succes']);


// Routes Halaman User
Route::get('/corp', [CompanyController::class, 'home']);
Route::get('/homeUser', [UserController::class, 'home']);
Route::get('/findjobsUser', [UserController::class, 'findjobs']);
Route::get('/aboutUser', [UserController::class, 'about']);
Route::get('/profileUser', [UserController::class, 'profile']);
Route::get('/jobsUser', [UserController::class, 'jobs']);
Route::get('/myprofile', [UserController::class, 'myprofile'])->name('myprofile');
Route::get('/editProfile', [UserController::class, 'editProfile']);
// Route::get('/education', [UserController::class, 'education']);
// Route::get('/editEdu', [UserController::class, 'editEdu']);
// Route::get('/skill', [UserController::class, 'skill']);
// Route::get('/editSkill', [UserController::class, 'editSkill']);
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
Route::get('/candidate', [VacancyController::class, 'searchCandidate']);
Route::get('/profilCorp', [VacancyController::class, 'profilCorp']);
Route::get('/job', [VacancyController::class, 'jobCorp']);
Route::get('/editCorp', [VacancyController::class, 'editCorp']);


// ajax
Route::get('/get-provinsi', [MainController::class, 'provinsi']);
Route::get('/get-kota', [MainController::class, 'kota']);

// ajax
// Route::get('/get-registrasi', [UserController::class, 'registrasi']);

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
// Route::get('/education/edit/{id}', [EducationController::class, 'edit']);
// Route::post('/education/update/{id}', [EducationController::class, 'update']);
// Route::get('/create', [UserController::class, 'create']);

// Route::get('/add', [UserController::class, 'insertRecord']);

// Route::get('/user', [UserController::class, 'user']);