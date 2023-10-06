<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request){
        $ExtactUserdata = new User();
        $userId = $request->user()->id;
        $ExtactUserdata = DB::table('users')->where('id','!=',$userId)->where('usertype',0)->get();
        if($request->user()->usertype == '2'){
        return view('admin.welcome',compact('ExtactUserdata'));
        }
    }
    
    // Profile creation acceptance
    public function accept_request(Request $request,$id){
        DB::update('UPDATE users SET usertype = ? WHERE id = ?', [1, $id]);
        return redirect()->back();
    }
    // Profile rejecting
    public function reject_request(Request $request,$id){
        DB::update('UPDATE users SET usertype = ? WHERE id = ?', [3, $id]);
        return redirect()->back();
    }

    public function accept_user(Request $request){
        // $ExtactUserdata = new User();
        $userId = $request->user()->id;
        $ExtactUserdata = DB::table('users')->where('id','!=',$userId)->where('usertype',1)->get();
        if($request->user()->usertype == '2'){
            return view('admin.accept-user',compact('ExtactUserdata'));
        }
        
    }

    public function reject_user(Request $request){
        $userId = $request->user()->id;
        $ExtactUserdata = DB::table('users')->where('id','!=',$userId)->where('usertype',3)->get();
        if($request->user()->usertype == '2'){
            return view('admin.reject-user',compact('ExtactUserdata'));
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

    public function loader(){
        return view('skeleton-loader');
    }

}
