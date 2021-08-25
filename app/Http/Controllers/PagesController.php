<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{
   public function index()
	{
		  return view('index');
	}
	public function category_list()
	{
		  /*$data= Flashcard::all();
		  return view('qa',['qas'=>$data]);*/
		  $categories = Category::orderBy ('id','desc')->paginate(2);
		return view('categories.index')->with('categories',$categories);
	}

	public function category_create()
	{
		return view('categories.create');
	}
	public function category_store(Request $request)
	{

		/****************format for this version*************
		$device = DeviceModel::create([
                'model' => $request->model,
                'category_id' => $request->category_id,
                'manufacturer_id' => $request->manufacturer_id,
                'feature_id' =>  $feature_id,
                'status' => $request->status,
                'created_by' => auth()->user()->id,
            ]);*/



            /*$product=new Product;
		$product->title = $request->title;
		$product->description = $request->description;
		$product->price = $request->price;
		$product->quantity = $request->quantity;

		$product->slug = str_slug($request->title);
		$product->category_id = 1;
		$product->brand_id = 1;
		$product->admin_id= 1;
		$product->save();
		// return redirect()->route('admin.product.create');*/
	
//dd($request);
            $device =Category::create([
            	'title' => $request->title,
            	'status' => $request->status,
            	

            ]);


session()->flash('success','A new categorry has added successfully !!');
            return redirect()->route('category.create');



      
		
	}
	public function category_edit($id)
	{
		$category = Category::find($id);
		return view('categories.edit')->with('category',$category);;
	}



	public function category_update(Request $request,$id)
	{

          /*  $device =Product::update([
            	'title' => $request->title,
            	'description' => $request->description,
            	'price' => $request->price,
            	'quantity' => $request->quantity,
            	

            ]);
*/

            /*$affected = DB::table('users')
              ->where('id', 1)
              ->update(['options->enabled' => true]);

       return redirect()->route('admin.products');
*/

       $device = \DB::table('categories')
              ->where('id', $id)
              ->update([
            	'title' => $request->title,
            	'status' => $request->status,
            
            	

            ]);


       return redirect()->route('category_list');


      
		
	}


	public function category_delete($id)
	{

		Category::destroy($id);
	 return redirect()->route('category_list');
   

    
	}


}
