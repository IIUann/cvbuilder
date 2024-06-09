<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cvbuildController;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', [RegisterController::class, 'welcome'])->name('welcomeview');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register-function', [RegisterController::class, 'register'])->name('registeroute');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-function', [LoginController::class, 'login'])->name('loginroute');
Route::get('/dashborduser', [LoginController::class, 'showuserdashbord'])->name('userdash');
Route::get('/aboutyou', [cvbuildController::class, 'showaboutyoupage'])->name('aboutyou');
Route::post('/aboutyou-function', [cvbuildController::class, 'createboutyoupage'])->name('aboutyoucrate');
Route::get('/edecation', [cvbuildController::class, 'showecectionyoupage'])->name('edecation');
Route::post('/edecation-function', [cvbuildController::class, 'createedecationpage'])->name('edecationcrate');
Route::get('/skill', [cvbuildController::class, 'showskillpage'])->name('skill');
Route::post('/skill-function', [cvbuildController::class, 'createskillpage'])->name('skillcrate');
Route::get('/work', [cvbuildController::class, 'showworkpage'])->name('work');
Route::post('/work-function', [cvbuildController::class, 'createworkpage'])->name('workcrate');
Route::get('/contact', [cvbuildController::class, 'showcontactpage'])->name('contact');
Route::post('/contact-function', [cvbuildController::class, 'createcotactpage'])->name('cotactcrate');
Route::get('/theCv', [cvbuildController::class, 'cv'])->name('theCV');
Route::get('/certificate', [\App\Http\Controllers\CertificateController::class, 'certificateshow'])->name('certificate');
Route::post('/certificate-function', [\App\Http\Controllers\CertificateController::class, 'certificteposition'])->name('certificateroute');
Route::get('/certificatuser', [\App\Http\Controllers\CertificateController::class, 'certificateusershow'])->name('certificateuser');
Route::get('/dashbord', [LoginController::class, 'showadmindashbord'])->name('admindash');
Route::get('generate-pdf',[App\Http\Controllers\CertificateController::class,'PDF']);
Route::post('/install-pdf', [\App\Http\Controllers\CertificateController::class, 'PDF'])->name('install-pdf');



