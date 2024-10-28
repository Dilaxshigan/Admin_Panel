<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function product()
    {
        $product = Product::paginate(6);
        return view('product', compact('product'));
    }
    public function add_product()
    {
        return view('add_product');
    }
    public function store_product(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg'
        ]);

        $data = new Product;

        $data->title = $request->title;
        $data->link = $request->link;
        $data->description = $request->description;
        
        $image = $request->image;
    
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message', 'Your product has been successfully added!');

    }
    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();

        return redirect()->back();
    }
}
