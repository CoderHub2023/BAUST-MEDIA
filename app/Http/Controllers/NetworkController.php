<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NetworkController extends Controller
{
    /**
     *  Showing available people list to add them into your network
     */
    public function my_network(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        // Performing left join query
        $usersNotInNetwork = DB::table('users')
        ->leftJoin('users_network', 'users.id', '=', 'users_network.network_id')
        ->whereNull('users_network.network_id') // Filters out rows where the user has a corresponding entry in the users_network table
        ->where('users.id', '!=', $loggedInUserId)
        ->select('users.*')
        ->get();
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $loggedInUserId)->get();
        return view('Network', compact('usersNotInNetwork','loggedInUserData'));
    }

    /**
     *  For add friend or add new network
     */
    public function add_network(Request $request,$id){
        $AuthUser =  $request->user()->id;
        $NetworkId = $id;
        Network::create([
            'users_id' => $AuthUser,
            'network_id' => $NetworkId
        ]);
        // Redirect back or perform any other action
        return redirect()->back()->with('success', 'Friend added successfully.');
    }
      
    /**
     *  People who are in your network
     */
    public function my_friends(Request $request){
        $friends = DB::table('users')
        ->join('users_network', 'users.id', '=', 'users_network.network_id')
        ->select('users.*')
        ->get();
        dd($friends);
    }    
}
