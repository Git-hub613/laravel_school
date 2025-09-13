<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageContraller;
use App\Models\Admission;
use App\Models\Company;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageContraller::class,'home'])->name('home');
Route::get("/about",[PageContraller::class,"about"])->name("about");

Route::get("/contact",[PageContraller::class,"contact"])->name("contact");

Route::get("/courses",[CourseController::class,"course"])->name("course");

Route::get("/service",[PageContraller::class,"service"])->name("service");

Route::post("/company/store",[CompanyController::class,"store"]);

Route::post("/course/store",[CourseController::class,"store"]);

Route::get("/course/edit/{id}",[CourseController::class,"edit"]);

Route::patch("/course/edit/{id}",[CourseController::class,"update"]);

Route::delete("/course/delete/{id}",[CourseController::class,"delete"]);

Route::resource("admission",AdmissionController::class)->names("admission");
