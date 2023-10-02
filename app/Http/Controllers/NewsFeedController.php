<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsFeedController extends Controller
{
    //
    public function index(){

    }

    public function store(Request $request){
        $stack = new Stack();
        $userId = $request->user()->id;
        $stack->users_id = $userId;
        $stack->stack = $request->has('stack') ? $request->get('stack') : "";
        if($request->hasFile('images')){
            $request->validate([
                'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the max size as needed
            ]);
            $files = $request->file('images');
            $imageLocation= array();
            $i=0;
                $extension = $files->getClientOriginalExtension();
                $fileName= 'stack-img_'. time() . ++$i . '.' . $extension;
                $location= '/uploads/stack/';
                $files->move(public_path() . $location, $fileName);
                $imageLocation= $location. $fileName;
            $stack_success = DB::table('stack')->where('id', $request->user()->id)->update([
                'images'=>$imageLocation
            ]);
            // if($stack_success)
            dd($stack_success);
            // return back()->with('success',"Stack Posted Successfully");
            // else
            // return back()->with('failure',"Stack Failure");
        }
        return redirect()->back();
    }

}
