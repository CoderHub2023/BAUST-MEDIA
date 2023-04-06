<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request){
        if($request->user()->usertype == '2'){
        return view('admin.welcome');
        }
    }

    public function user_request(Request $request){
        if($request->user()->usertype == '2'){
        $all_data = $request->user()->all();
        return view('admin.user-request',compact('all_data'));
        }
    }

    public function post_user_request( Request $request){
        if($request->user()->usertype == '2'){
        $authuserid = $request->user()->id;
        dd($authuserid);
        }
        // return redirect()->back();
    }

}
