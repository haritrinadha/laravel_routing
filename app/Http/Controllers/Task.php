<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student; 
use app\Http\Controllers\Task;

class Task extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $post = new student;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->languages = $request->languages;
        $post->gender = $request->gen;
        $post->phone_num = $request->phone;
        $post->description = $request->subject;
        $post->country = $request->country;
        $post->state = $request->state;
        $post->city = $request->city;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('uploads/images/',$filename);
            $post->img=$filename;
        }
        $post->save();
        return redirect('task')->with('status', 'Data Inserted Successfully !! ');
    }
}