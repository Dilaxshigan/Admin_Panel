<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class reviewController extends Controller
{
    public function review()
    {
        return view('review');
    }

    public function add_review()
    {
        return view('add_review');
    }

    public function store_review(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'review'=>'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg'
        ]);

        $data = new Review;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->review = $request->review;

        $image = $request->image;
    
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('profiles', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message', 'Your review has been successfully added!');

    }
}
