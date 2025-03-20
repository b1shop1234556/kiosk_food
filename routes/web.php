<?php

use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FoodController;
// use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/greetings', function () {
//     return view('greetings');
// });

// Route::get('/greetings', function () {
//     $name = "Juan dela Cruz";
//     return view('greetings', compact('name'));
// });

Route::get('/greetings', function () {
    $name = "Juan dela Cruz";
    $enrolled = true;
    $subjects = [
        "Advanced Database Systems",
        "Human Computer Interaction 2",
        "System Analysis and Design"
    ];
    $classes = [
        (object) ["subject"=>"Advanced Database Systems", "professor"=>"Mel Miranda", "units"=>3],
        (object) ["subject"=>"Human Computer Interaction", "professor"=>"Mel Miranda", "units"=>3],
        (object) ["subject"=>"System Analysis and Design", "professor"=>"Noreen Miranda", "units"=>3]
    ];
    
    return view('greetings', compact('name', 'enrolled', 'subjects', 'classes'));
});

Route::get('/classes',[ClassController::class,'index']);
Route::get('/class/{id}',[ClassController::class,'show']);

Route::resource('rooms',RoomController::class);
Route::get('/rooms/{room}/edit',[RoomController::class,'edit'])->name('rooms.edit');
Route::get('/rooms/{room}',[RoomController::class,'update'])->name('rooms.update');

// Route::get('/tasks', function () {
//     return view('tasks', ['tasks' => Task::all()]);
// });

Route::resource('foods',FoodController::class);
Route::get('/foods/{food}/edit',[FoodController::class,'edit'])->name('foods.edit');
Route::get('/foods/{food}',[FoodController::class,'update'])->name('foods.update');

Route::get('/order',[FoodController::class,'order']);
Route::get('/payment',[FoodController::class,'payment']);
Route::get('/menu',[FoodController::class,'menu']);