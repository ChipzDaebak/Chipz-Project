<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products(){
        return view('adminItem');
    }

    public function productupload(Request $request){
        $data = new Product();
        $image = $request->file;
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage', $image_name);
        $data->image = $image_name;
        $data->name = $request->title;
        $data->price = $request->price;
        $data->description = $request->desc;
        $data->quantity = $request->qty;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
}
