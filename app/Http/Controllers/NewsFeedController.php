<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use App\Models\User;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsFeedController extends Controller
{
    //
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $stacks = Stack::all();
        $stacks = json_decode($stacks);
        $stack_data = []; // Array to store data for each stack
        if (!$stacks) {
            dd($stacks);
            return view('welcome', [
                'loggedInUserData' => $loggedInUserData,
                'stacks' => $stacks,
            ]);
        } else {

            foreach ($stacks as $stack) {
                $imagePaths = $stack->images; // Store image paths for the current stack
                $stack_time = \Carbon\Carbon::parse($stack->created_at);
               
                // $formattedStackTime = $stack_time->format('jS F Y, h:i A');                 dd($formattedStackTime);
                $stack_user = DB::table('users')->select('name','profile_picture')->where('id', '=', $stack->users_id)->get();
                $stack->name = $stack_user->first()->name;
                $stack->profile_picture = $stack_user->first()->profile_picture;
                $stack->time = $stack_time->format('jS F Y, h:i A');
                // Create an array with data for the current stack
                $stack_data[] = [
                    'stack' => $stack,
                    'name' => $stack_user->first()->name,
                    'profile_picture' => $stack_user->first()->profile_picture,
                    'imagePaths' => $imagePaths, // Add image paths for the current stack
                ];
            }
            // dd($stack_data);
            // dd($stack_user);
        $allComments = DB::table('stack')->select('comments')->get();
            // dd($allComments);  
            // Detect online user
        $Activeusers = DB::table('users')->select('*')->where('id', '!=', $userId)->get();
        // $Activeusers = User::select("*")->whereNotNull('last_seen')->orderBy('last_seen', 'DESC'); 
        // dd($Activeusers->name);    
        return view('welcome', [
                'stacks' => $stacks,
                'loggedInUserData' => $loggedInUserData,
                'stack_data' => $stack_data,
                'allComments' => $allComments,
                'Activeusers' => $Activeusers, // Pass the array of data for each stack
            ]);
        }
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image individually
        ]);

        // Create a new stack
        $stack = new Stack();
        $stack->users_id = $request->user()->id;
        $stack->stack = $request->has('stack') ? $request->input('stack') : "";

        // Check if any images were uploaded
        if ($request->hasFile('images')) {
            $imageLocations = [];

            // Upload and associate images with the stack
            foreach ($request->file('images') as $uploadedFile) {
                $extension = $uploadedFile->getClientOriginalExtension();
                $uniqueFileName = 'stack-img_' . Str::uuid() . '.' . $extension; // Generate a unique file name
                $location = '/uploads/stack/';
                $uploadedFile->move(public_path() . $location, $uniqueFileName);
                $imageLocation = $location . $uniqueFileName;
                $imageLocations[] = $imageLocation;
            }

            // Store image locations as a comma-separated string
            $stack->images = implode(',', $imageLocations);
        }

        $stack->save();

        return back()->with('success', "Stack Posted Successfully");
    }

    public function likePost(Request $request)
    {
        // Retrieve the post ID from the request.
        $postId = $request->input('postId');

        // Update the like count in your database. You may use Eloquent or your preferred method.
        // For example, if you have a 'likes' column in your 'posts' table, you can increment it.
        $post = Stack::find($postId);
        $post->likes++;
        $post->save();

        return response()->json(['likes' => $post->likes]);
    }

    public function addComment(Request $request)
    {
        $stack = new Stack();
        $stack->users_id = $request->user()->id;
        $GetPostId = Stack::where('id', $request->input('post_id'))->get();
        if ($GetPostId) {
            if($GetPostId->count()>1){

            }
            else
            $success = Stack::where('id', $request->input('post_id'))->update(['comments' => $request->input('comments')]);

            return back();
        } else {
            dd('Failed to add comment');
        }
    }

    public function viewComments(Request $request,$id){
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $stacks =   DB::table('stack')->select('*')->where('stack.id' , '=', $id)->get();
        $stacks = json_decode($stacks);
        $stack_data = []; // Array to store data for each stack
        if (!$stacks) {
            dd($stacks);
            return view('welcome', [
                'loggedInUserData' => $loggedInUserData,
                'stacks' => $stacks,
            ]);
        } else {

            foreach ($stacks as $stack) {
                $imagePaths = $stack->images; // Store image paths for the current stack
                $stack_time = \Carbon\Carbon::parse($stack->created_at);
                $formattedStackTime = $stack_time->format('jS F Y');
                $stack_user = DB::table('users')->select('*')->where('id', '=', $stack->users_id)->get();

                // Create an array with data for the current stack
                $stack_data[] = [
                    'stack' => $stack,
                    'stack_user' => $stack_user,
                    'formattedStackTime' => $formattedStackTime,
                    'imagePaths' => $imagePaths, // Add image paths for the current stack
                ];
            }
            // dd($stack_data[2]['stack']->likes);
            // dd($stack_data);
            // dd($stack_user);
            $allComments = DB::table('stack')->select('comments')->where('stack.id','=',$id)->get();        
            // dd($allComments);
            return view('comments', [
                'stacks' => $stacks,
                'loggedInUserData' => $loggedInUserData,
                'stack_data' => $stack_data,
                'stack_user' => $stack_user,
                'formattedStackTime' => $formattedStackTime, // Pass the array of data for each stack
                'allComments' => $allComments,
            ]);
        }
    }


}
