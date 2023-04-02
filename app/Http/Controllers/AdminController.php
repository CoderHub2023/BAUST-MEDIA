<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.welcome');
    }

    public function user_request(Request $request){
        $all_data = $request->user()->all();
        return view('admin.user-request',compact('all_data'));
    }
}
