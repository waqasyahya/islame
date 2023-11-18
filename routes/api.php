<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReadController;
use App\Http\Controllers\DetaillessonController;
use App\Http\Controllers\GuaidenessController;
use App\Http\Controllers\PracticController;
use App\Http\Controllers\TestingController;



// Lesson Api
Route::get("/lessonApp", [ReadController::class, "LessonApp"])->name("LessonApp");
Route::get("/detailApp/{id}", [DetaillessonController::class, "detailApp"])->name("detailApp");
Route::get("/GuaidenessApp/{id}/{read_id}", [GuaidenessController::class, "GuaidenessApp"])->name("GuaidenessApp");
Route::get("/practicApp/{id}", [PracticController::class, "practicApp"])->name("practicApp");
Route::get("/TestApp/{id}", [TestingController::class, "TestingApp"])->name("TestingApp");
// Lesson Api



