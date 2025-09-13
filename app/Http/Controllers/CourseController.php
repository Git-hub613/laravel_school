<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course(){
    $courses = Course::all();
    return view("course",compact('courses'));
 }

 public function store(Request $request){
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
   toast("Course Created Successfully","success");
   $course->save();
   return redirect("/courses");
}

public function edit($id){
    $course = Course::find($id);

    return view("courseEdit",compact("course"));
 }

 public function update(Request $request,$id){
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
 }

 public function delete($id){
    $course = Course::find($id);

    $course->delete();
    return redirect("/courses");
 }
}
