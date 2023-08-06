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
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $loggedInUserId)->get();
        $usersNotInNetwork = User::leftJoin('users_network', function ($join) use ($loggedInUserId) {
            $join->on('users.id', '=', 'users_network.network_id')
                 ->where('users_network.users_id', '=', $loggedInUserId);
        })
        ->whereNull('users_network.users_id') // Filters out users already in the network
        ->where('users.id', '<>', $loggedInUserId) // Exclude the logged-in user from the list
        ->get(['users.*']); // Fetch all columns from the users table
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
