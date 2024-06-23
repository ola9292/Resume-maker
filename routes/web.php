<?php

use App\Http\Controllers\ResumeDownloadController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;
use Spatie\Browsershot\Browsershot;
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

// Route::get('/', function () {
//     return view('Home');
// });



Route::get('login', [App\Http\Controllers\LoginController::class, 'create'])->name('login');
Route::post('login', [App\Http\Controllers\LoginController::class, 'store'])->name('store');
Route::post('logout', [App\Http\Controllers\LoginController::class, 'destroy'])->middleware('auth');
Route::get('register', [App\Http\Controllers\RegisterController::class, 'create']);
Route::post('register', [App\Http\Controllers\RegisterController::class, 'store']);

Route::middleware('auth')->group(function(){

Route::get('/', function () {

    $profile = Auth::user()->load('personalDetails');
    // dd($profile);
    if($profile->personalDetails != null){
        $name = $profile->personalDetails->first_name;
    }else{
        $name = '';
    }


    return Inertia::render('Home',[
        'name' => $name,
    ]);
});
//personal details
Route::get('personal-details', [App\Http\Controllers\PersonalDetailsController::class, 'index'])->name('basic.index');
Route::get('personal-details/create', [App\Http\Controllers\PersonalDetailsController::class, 'create'])->name('basic.create');
Route::post('personal-details', [App\Http\Controllers\PersonalDetailsController::class, 'store'])->name('basic.store');
Route::get('personal-details/edit/{id}', [App\Http\Controllers\PersonalDetailsController::class, 'show'])->name('basic.show');
Route::put('personal-details/edit/{id}', [App\Http\Controllers\PersonalDetailsController::class, 'update'])->name('basic.update');
Route::delete('personal-details/delete/{id}', [App\Http\Controllers\PersonalDetailsController::class, 'destroy'])->name('basic.destroy');

//Education
Route::get('education', [App\Http\Controllers\EducationController::class, 'index'])->name('education.index');
Route::get('education/create', [App\Http\Controllers\EducationController::class, 'create'])->name('education.create');
Route::post('education', [App\Http\Controllers\EducationController::class, 'store'])->name('education.store');
Route::get('education/edit/{id}', [App\Http\Controllers\EducationController::class, 'show'])->name('education.show');
Route::put('education/edit/{id}', [App\Http\Controllers\EducationController::class, 'update'])->name('education.update');
Route::delete('education/delete/{id}', [App\Http\Controllers\EducationController::class, 'destroy'])->name('education.destroy');

//work history
Route::get('work-history', [App\Http\Controllers\WorkHistoryController::class, 'index'])->name('work.index');
Route::get('work-history/create', [App\Http\Controllers\WorkHistoryController::class, 'create'])->name('work.create');
Route::post('work-history', [App\Http\Controllers\WorkHistoryController::class, 'store'])->name('work.store');
Route::get('work-history/edit/{id}', [App\Http\Controllers\WorkHistoryController::class, 'show'])->name('work.show');
Route::put('work-history/edit/{id}', [App\Http\Controllers\WorkHistoryController::class, 'update'])->name('work.update');
Route::delete('work-history/delete/{id}', [App\Http\Controllers\WorkHistoryController::class, 'destroy'])->name('work.destroy');

//preview
Route::get('/preview', function () {
    $userDetailData = Auth::user()->load('personalDetails');
    $userDetail = $userDetailData->personalDetails;

    $educationData = Auth::user()->load('education');
    $education = $educationData->education;

    $workHistoryData =Auth::user()->load('workHistory');
    $workHistory = $workHistoryData->workHistory;



    return Inertia::render('Preview',[
        'userDetail' => $userDetail,
        'education' => $education,
        'workHistory' => $workHistory
    ]);
});
Route::get('/test', function(){
    $userDetailData = Auth::user()->load('personalDetails');
    $userDetail = $userDetailData->personalDetails;

    $educationData = Auth::user()->load('education');
    $education = $educationData->education;

    $workHistoryData =Auth::user()->load('workHistory');
    $workHistory = $workHistoryData->workHistory;
    // dd($userDetail);
    $dompdf = new Dompdf();
   return view('preview',[
        'userDetail' => $userDetail,
        'education' => $education,
        'workHistory' => $workHistory
    ]);
});
Route::get('/download', function () {
    $userDetailData = Auth::user()->load('personalDetails');
    $userDetail = $userDetailData->personalDetails;

    $educationData = Auth::user()->load('education');
    $education = $educationData->education;

    $workHistoryData =Auth::user()->load('workHistory');
    $workHistory = $workHistoryData->workHistory;
    // dd($userDetail);
    $dompdf = new Dompdf();
    $view = View::make('preview',[
        'userDetail' => $userDetail,
        'education' => $education,
        'workHistory' => $workHistory
    ]);
// $dompdf->loadHtml('preview');
$dompdf->loadHtml($view);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A3', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
    $dompdf->stream('example.pdf');
    // exit();
 });

});
