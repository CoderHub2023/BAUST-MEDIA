<?php

namespace App\Http\Controllers;

use App\Models\Stack;
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
        $stacks = Stack::all()->shuffle();
        $stacks = json_decode($stacks);

        $imagePaths = [];
        $stack_users = []; // Array to store user data for each stack

        foreach ($stacks as $stack) {
            $imagePaths[] = $stack->images;
            $stack_time = \Carbon\Carbon::parse($stack->created_at);
            $formattedStackTime = $stack_time->format('jS F Y');
            $stack_user = DB::table('users')->select('*')->where('id', '=', $stack->users_id)->get();
            $stack_users[] = $stack_user;
        }
        dd($stack_users);
        return view('welcome', [
            'stacks' => $stacks,
            'loggedInUserData' => $loggedInUserData,
            'stack_users' => $stack_users, // Pass the array of user data for each stack
            'formattedStackTime' => $formattedStackTime,
        ]);
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
        $GetPostId = Stack::where('id', $request->input('postId'))->get();
        if ($GetPostId) {
            $success = Stack::insert([
               'comments' => $request->input('comments')
            ]);
            
            return response()->json($success);
        }
        else{
            dd('Failed to add comment');
        }
    }
}
