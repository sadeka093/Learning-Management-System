<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
     
	public function course_list()
	{
		  $courses = Course::orderBy ('id','desc')->paginate(2);
		return view('courses.index')->with('courses',$courses);
	}

	public function course_create()
	{
		return view('courses.create');
	}
	public function course_store(Request $request)
	{

            $device =Course::create([
            	'name' => $request->name,
            	'description' => $request->description,
            	'details' => $request->details,
            	'level' => $request->level,
            	'status' => $request->status,
   
            	

            ]);
            session()->flash('success','A new course has added successfully !!');
            return redirect()->route('course.create');  
		
	}
	public function course_edit($id)
	{
		$course = Course::find($id);
		return view('courses.edit')->with('course',$course);
	}



	public function course_update(Request $request,$id)
	{

         

       $device = \DB::table('courses')
              ->where('id', $id)
              ->update([
                'name' => $request->name,
            	'description' => $request->description,
            	'details' => $request->details,
            	'level' => $request->level,
            	'status' => $request->status,
            	

            ]);


       return redirect()->route('course_list');


      
		
	}


	public function course_delete($id)
	{

		Course::destroy($id);
	 return redirect()->route('course_list');
   

    
	}
}
