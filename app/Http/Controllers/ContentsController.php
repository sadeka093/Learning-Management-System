<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentsController extends Controller
{
	public function content_list()
	{
		$contents = Content::orderBy ('id','desc')->paginate(2);
		return view('contents.index')->with('contents',$contents);
	}

	public function content_create()
	{
		return view('contents.create');
	}
	public function content_store(Request $request)
	{

           /* $device =Content::create([
            	'course_name' => $request->course_name,
            	'title' => $request->title,
            	'status' => $request->status,
   
            	

            ]);*/



/////////

            $content = new Content();
            $content->course_id= $request->course_id;
            $content->title = $request->title;
            $content->status = $request->status;




            if($request->hasFile('additionalfile')){

            	$additionalfile= $request->file('additionalfile');
            	$adfile= time().'.'.$additionalfile->getClientOriginalExtension();
            	$additionalfile->move('contents/additionalfile/',$adfile);

            	$content->additionalfile=$adfile;
            }


            if($request->hasFile('lecturevideo')){

            	$lecturevideo= $request->file('lecturevideo');
            	$lavdo= time().'.'.$lecturevideo->getClientOriginalExtension();
            	$lecturevideo->move('contents/lecturevideo/',$lavdo);

            	$content->lecturevideo=$lavdo;
            }
            $content->save();
            session()->flash('success','A new content has added successfully !!');
            return redirect()->route('content.create'); 

        }
        public function content_edit($id)
        {
        	$content = Content::find($id);
        	return view('contents.edit')->with('content',$content);
        }



        public function content_update(Request $request,$id)
        {



        	$device = \DB::table('contents')
        	->where('id', $id)
        	->update([
        		
        		'title' => $request->title,
        		'status' => $request->status,


        	]);


        	return redirect()->route('content_list');




        }


        public function content_delete($id)
        {

        	Content::destroy($id);
        	return redirect()->route('content_list');



        }
    }
