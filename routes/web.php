<?php

use App\Models\Company;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $companies = Company::all();
    return view('home',compact('companies'));
});
Route::get("/about",function(){
    return view("about");
});


Route::get("/contact",function(){
    return view("contact");
});

Route::get("/courses",function(){
    $courses = Course::all();
    return view("course",compact('courses'));
});

Route::get("/service",function(){
    return view("service");
});

Route::post("/company/store",function(Request $request){

    $company = new Company();

    $company->name = $request->name;
    $company->email = $request->email;
    $company->phone = $request->phone;
    $company->address = $request->address;

    $company->save();
    return redirect("/");
});

Route::post("/course/store",function(Request $request){
   $course = new Course();

   $course->name = $request->name;
   $course->category = $request->category;
   $course->price = $request->price;
   $course->description = $request->description;
   $file = $request->image;
   if($file){
    $file_name = uniqid().".".$file->getClientOriginalExtension();
    $file->move("photos",$file_name);
    $course->image = "photos/$file_name";
   }
   $course->save();
   return redirect("/courses");
});

Route::get("/course/edit/{id}",function($id){
    $course = Course::find($id);

    return view("courseEdit",compact("course"));
});

Route::patch("/course/edit/{id}",function(Request $request,$id){
    $course = Course::find($id);
    $course->name = $request->name;
    $course->category = $request->category;
    $course->price = $request->price;
    $course->description = $request->description;
    $file = $request->image;
    if($file){
        $file_name = uniqid().".".$file->getClientOriginalExtension();
        $file->move("photos",$file_name);
        $course->image = "photos/$file_name";
    }
    $course->save();
    return redirect("/courses");
});

Route::delete("/course/delete/{id}",function($id){
    $course = Course::find($id);

    $course->delete();
    return redirect("/courses");
});

Route::get("/delete",function(){
    return view("delete_pop_up");
});
