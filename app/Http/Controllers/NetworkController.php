<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

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
        ->paginate(12,['users.*']); // Paginate with 12 users per page (you can adjust this number as needed)
        return view('Networks.Network', compact('usersNotInNetwork', 'loggedInUserData'));
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

    public function followers(Request $request){
        $loggedInUserId = Auth::user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $loggedInUserId)->get();
        $AuthUser = $request->user()->id;
        $followers = DB::table('users_network')->select("*")->where('network_id', $AuthUser)->get();
        $ids = $followers->pluck('users_id'); // Use 'users_id' instead of 'id'
        $idsArray = $ids->all();
        // $followersInUserTable = DB::table('users')->select("*")->whereIn('id', $idsArray)->get();
        // $beUnfollow = DB::table('users_network')->select('*')->where('',)->get 
        $following = User::join('users_network', 'users.id', '=', 'users_network.network_id')
        ->where('users_network.users_id', '=', $loggedInUserId) // Match the network_id with logged-in user's id
        ->get(['users.*']);
        // dd($following[0]->name);
        $following = $following->pluck('id');
        $following = $following->all();
        $commonFollow = array_intersect($following,$idsArray);
        $followBack = array_values(array_diff($idsArray, $commonFollow));
        $matual = DB::table('users')->select("id", "name", "profile_picture", "headlines")->whereIn('id', $commonFollow)->get();
        $fans = DB::table('users')->select("id", "name", "profile_picture", "headlines")->whereIn('id', $followBack)->get();


        // dd($followers);
        // dd($commonFollow);
        // dd($followBack);
        return view('Networks.Followers',compact('loggedInUserData','matual', 'fans','following','idsArray','followBack', 'commonFollow'));
    }
      
    /**
     *  People who are in your network
     */
    public function following(Request $request){

        $loggedInUserId = Auth::user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $loggedInUserId)->get();

        $loggedInUserId = Auth::user()->id;
        $following = User::join('users_network', 'users.id', '=', 'users_network.network_id')
        ->where('users_network.users_id', '=', $loggedInUserId) // Match the network_id with logged-in user's id
        ->get(['users.*']);
        return view('Networks.Following',compact('loggedInUserData','following'));
    }
    
    public function remove_network(Request $request,$id){
        $authUser = $request->user()->id;
        $networkId = $id;
        // Find and delete the network entry where the logged-in user is the owner and the friend is in the network
        Network::where('users_id', $authUser)
            ->where('network_id', $networkId)
            ->delete();
        // Redirect back or perform any other action
        return redirect()->back()->with('success', 'Friend removed successfully.');
    }

    public function search_network(Request $request){
        $loggedInUserId = Auth::user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $loggedInUserId)->get();
        $users = User::where('id', '<>', $loggedInUserId)->paginate(5);
        return view('Networks.live-search',compact('loggedInUserData','users'));
    }

    public function searching(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $loggedInUserId)->get();
        $query = $request->input('query');
        $users = DB::table('users')
        ->where('name', 'like', '%' . $query . '%')
        ->paginate(5);
        return view('Networks.live-search', ['users' => $users,'loggedInUserData' => $loggedInUserData]);
    }

}
