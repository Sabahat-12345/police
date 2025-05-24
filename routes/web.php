<?php

use App\Http\Controllers\ApplicationStatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CollaborateController;
use App\Http\Controllers\ComplainAgainstPoliceController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TouristRegistrationController;
use App\Models\admin\Slider;
use GuzzleHttp\Middleware;

// use App\Models\ApplicationStatus;




Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/apply', function (){
    return view('apply'); 
})->name('apply');

Route::get('/job', function (){
    return view('jobs'); 
})->name('job');

Route::get('/collaborate', function (){
    return view('collaborate'); 
})->name('collaborate');

Route::get('/project', function (){
    return view('projects'); 
})->name('projects');

Route::get('/complain', function (){
    return view('complain'); 
})->name('complain');

Route::get('/missing', function (){
    return view('missing_report'); 
})->name('missing');

Route::get('/fronted-gallery', function (){
    return view('gallery'); 
})->name('fronted-gallery');

Route::get('/education', function (){
    return view('education-traning'); 
})->name('education');

Route::get('/goal', function (){
    return view('goals'); 
})->name('goal');

Route::get('/helpline', function (){
    return view('helpline'); 
})->name('helpline');

Route::get('/history', function (){
    return view('history'); 
})->name('history');

Route::get('/inspector_police', function (){
    return view('inspector_police'); 
})->name('inspector_police');

Route::get('/organization', function (){
    return view('organization'); 
})->name('organization');

Route::get('/martyrs', function (){
    return view('martyrs'); 
})->name('martyrs');

Route::get('/press_release', function (){
    return view('press_release'); 
})->name('press_release');

Route::get('/tourist-safety', function (){
    return view('tourist-safety'); 
})->name('tourist-safety');

Route::get('/public-safety', function (){
    return view('public-safety'); 
})->name('public-safety');

Route::get('/employment-services', function (){
    return view('employment-services'); 
})->name('employment-services');

Route::get('/tender', function (){
    return view('tender'); 
})->name('tender');

Route::get('/tourist_helpline', function (){
    return view('tourist_helpline'); 
})->name('tourist_helpline');

Route::get('/safety_tips', function (){
    return view('safety_tips'); 
})->name('safety_tips');

Route::get('/women_child_safety', function (){
    return view('women_child_safety'); 
})->name('women_child_safety');

Route::get('/driving_license', function (){
    return view('driving_license'); 
})->name('driving_license');

Route::get('/complain_against_police', function (){
    return view('complain_against_police'); 
})->name('complain_against_police');

Route::get('/special_branch', function (){
    return view('special_branch'); 
})->name('special_branch');

Route::get('/un', function (){
    return view('un'); 
})->name('un');

Route::get('/former', function (){
    return view('former'); 
})->name('former');

Route::get('/shuhada', function (){
    return view('shuhada'); 
})->name('shuhada');

Route::get('/crime', function (){
    return view('crime'); 
})->name('crime');

Route::get('/police_control_room', function (){
    return view('police_control_room'); 
})->name('police_control_room');

Route::get('/tender-details', function (){
    return view('tender-details'); 
})->name('tender-details');

Route::get('/tender-details2', function (){
    return view('tender-details2'); 
})->name('tender-details2');
Route::get('/slider', function (){
    return view('slider'); 
})->name('slider');
Route::get('/navbar', function (){
    return view('partial.navbar'); 
})->name('navbar');
Route::get('/footer', function (){
    return view('partial.footer'); 
})->name('footer');
Route::get('/igp', function (){
    return view('igp'); 
})->name('igp');








//form post methods
Route::post('/complain', [ComplainController::class, 'complainPost'])->name('complain.post');  



Route::post('/apply', [ApplyController::class, 'applyPost'])->name('apply.post'); 
Route::post('/complainAgainstPolice', [ComplainAgainstPoliceController::class, 'complainAgainstPolicePost'])->name('complainAgainstPolice.post');

Route::post('/collaborate', [CollaborateController::class, 'store'])->name('collaborate.post');

Route::post('/formm', [ApplicationStatusController::class, 'checkStatus'])->name('status.check');
Route::post('/tourist-safety', [TouristRegistrationController::class, 'register'])->name('tourist.register');



// Admin
Route::get('/dashboard', function (){
    return view('admin.index'); 
})->name('dashboard');
Route::get('/buttons', function (){
    return view('admin.buttons'); 
})->name('buttons');

Route::get('/cards', function (){
    return view('admin.cards'); 
})->name('cards');

Route::get('/utilities-color', function (){
    return view('admin.utilities-color'); 
})->name('utilities-color');

Route::get('/utilities-border', function (){
    return view('admin.utilities-border'); 
})->name('utilities-border');

Route::get('/utilities-animation', function (){
    return view('admin.utilities-animation'); 
})->name('utilities-animation');

Route::get('/utilities-other', function (){
    return view('admin.utilities-other'); 
})->name('utilities-other');
Route::get('/login', function (){
    return view('admin.login'); 
})->name('login');
Route::get('/register', function (){
    return view('admin.register'); 
})->name('register');
Route::get('/forgot-password', function (){
    return view('admin.forgot-password'); 
})->name('forgot-password');
Route::get('/404', function (){
    return view('admin.404'); 
})->name('404');
Route::get('/blank', function (){
    return view('admin.blank'); 
})->name('blank');
Route::get('/charts', function (){
    return view('admin.charts'); 
})->name('charts');
Route::get('/tables', function (){
    return view('admin.tables'); 
})->name('tables');
Route::get('/admin-gallery', function (){
    return view('admin.gallery'); 
})->name('gallery');

Route::get('/admin apply form', function (){
    return view('admin.apply'); 
})->name('admin-apply');


Route::prefix('/admin')->controller(AdminSliderController::class)->group(function () {
    Route::get('/slider', 'index')->name('admin.slider');
    Route::post('/slider/add-image', 'imageUpload')->name('juu');
  Route::post('/slider/delete/{id}','delete' )->name('admin.slider.delete');

});



