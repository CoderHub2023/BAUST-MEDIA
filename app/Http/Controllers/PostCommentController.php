<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Stack;
use App\Models\User;
use App\Models\Stack;
use App\Models\PostComment;
class PostCommentController extends Controller
{
    // Function to store a new comment on a post
    public function store(Request $request, $postId)
    {
        // Logic to store a new comment on a post
        // This method handles the creation of a new comment based on the incoming request

        // Example: Create a new comment associated with a post
        $comment = new PostComment();
        $comment->post_id = $postId;
        $comment->comment = $request->input('comment');
        $comment->user_id = auth()->id(); // Assuming the user is authenticated
        $comment->save();
        return redirect()->back();
        // Redirect or return a response indicating success
    }

    // Function to update an existing comment on a post
    public function update(Request $request, $postId, $commentId)
    {
        // Logic to update an existing comment on a post
        // This method handles updating an existing comment based on the incoming request

        // Example: Update an existing comment
        $comment = PostComment::where('post_id', $postId)
            ->where('id', $commentId)
            ->where('user_id', auth()->id()) // Assuming the user owns the comment
            ->firstOrFail();

        $comment->comment = $request->input('comment');
        $comment->save();

        // Redirect or return a response indicating success
    }

    // Function to delete a comment from a post
    public function destroy($postId, $commentId)
    {
        // Logic to delete a comment from a post
        // This method handles the deletion of a comment based on the given post ID and comment ID

        // Example: Delete a comment
        $comment = PostComment::where('post_id', $postId)
            ->where('id', $commentId)
            ->where('user_id', auth()->id()) // Assuming the user owns the comment
            ->firstOrFail();

        $comment->delete();

        // Redirect or return a response indicating success
    }

    public function showAllComments($request)
    {
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
                $formattedStackTime = $stack_time->format('jS F Y');
                $stack_user = DB::table('users')->select('name','profile_picture')->where('id', '=', $stack->users_id)->get();
                $stack->name = $stack_user->first()->name;
                $stack->profile_picture = $stack_user->first()->profile_picture;
                // Create an array with data for the current stack
                $stack_data[] = [
                    'stack' => $stack,
                    'name' => $stack_user->first()->name,
                    'profile_picture' => $stack_user->first()->profile_picture,
                    'formattedStackTime' => $formattedStackTime,
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
        // Retrieve all comments associated with the specified post, sorted by time
        $postComments = PostComment::where('post_id', $postId)
            ->orderBy('created_at', 'DESC')
            ->get();

        // Return the view with the comments data
        return view('comments', [
            'stacks' => $stacks,
            'loggedInUserData' => $loggedInUserData,
            'stack_data' => $stack_data,
            'formattedStackTime' => $formattedStackTime,
            'allComments' => $allComments,
            'Activeusers' => $Activeusers, // Pass the array of data for each stack
            'postComments' => $postComments]);
    }
    
}
}