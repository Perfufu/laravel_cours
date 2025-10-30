<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/projects', function () {
    
    
    $projects = Project::All();

    return view('projects.index', compact('projects'));
})->name('projects');


Route::get('/projects/{id}', function ($id) {


    $project = Project::find($id);

    return view('projects.show', compact('project'));
})->name('projects.show');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

