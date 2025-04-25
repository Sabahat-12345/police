<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ComplainAgainstPoliceController;

Route::get('/', function (){
    return view('home'); 
})->name('home'); 

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

Route::get('/gallery', function (){
    return view('gallery'); 
})->name('gallery');

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
    return view('navbar'); 
})->name('navbar');






//form post methods
Route::post('/complain', [ComplainController::class, 'complainPost'])->name('complain.post');  
Route::post('/apply', [ApplyController::class, 'applyPost'])->name('apply.post'); 
Route::post('/complainAgainstPolice', [ComplainAgainstPoliceController::class, 'complainAgainstPolicePost'])->name('complainAgainstPolice.post');
