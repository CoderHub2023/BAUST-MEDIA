<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PublicProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$userId)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $countUserEducation = count($user_education);
        $array_len = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user);
        $friends = User::join('users_network', 'users.id', '=', 'users_network.network_id')
        ->where('users_network.users_id', '=', $loggedInUserId) // Match the network_id with logged-in user's id
        ->get(['users.*']);
        $CountFriends = count($friends);
        return view('profile.public-profile', compact('loggedInUserData','user_education','user_about','count','countUserEducation','users_works_count','users_works','CountFriends','friends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        $loggedInUserId = Auth::user()->id;
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $PublicProfile = DB::table('users')->select('*')->where('users.id', '=', $id)->get();
        $user_education = DB::table('users_education')->where('users_id',$id)->get();
        $user_about = DB::table('users_details')->where('users_id',$id)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$id)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $countUserEducation = count($user_education);
        $array_len = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user);
        $friends = User::join('users_network', 'users.id', '=', 'users_network.network_id')
        ->where('users_network.users_id', '=', $loggedInUserId) // Match the network_id with logged-in user's id
        ->get(['users.*']);
        $CountFriends = count($friends);
        $user_details = DB::table('users_details')->where('users_id',$userId)->select('*')->get();
        return view('profile.public-profile',compact('loggedInUserData','PublicProfile','user_education','user_about','count','countUserEducation','users_works_count','users_works','CountFriends','friends','user_details'));   
    }

    public function showResume(Request $request,$id){
        $userId = $request->user()->id;
        $user = new User();
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        // dd($loggedInUserData);
        $public_resume = DB::table('users_details')->where('users_id',$id)->select('resume')->get();
        return view('profile.viewPublic-resume',compact('loggedInUserData','public_resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
