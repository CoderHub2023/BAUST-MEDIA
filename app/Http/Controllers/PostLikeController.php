<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostLike;

class PostLikeController extends Controller
{
    public function likePost(Request $request)
    {
        $postId = $request->input('postId');
        $userId = auth()->user()->id; // Assuming the user is authenticated

        // Check if the user already liked the post
        $existingLike = PostLike::where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();

            if ($existingLike) {
                // User already liked the post, remove the like
                $existingLike->delete();
            } else {
                // User has not liked the post, add a like
                $newLike = new PostLike();
                $newLike->post_id = $postId;
                $newLike->user_id = $userId;
                $newLike->save();
            }
        
            // Get the total likes count for the post
            $likesCount = PostLike::where('post_id', $postId)->count();
        
            // Determine if the user liked the post (1 for liked, 0 for not liked)
            $userLiked = ($existingLike) ? 1 : 0;
        
            return response()->json(['likes' => $likesCount, 'userLiked' => $userLiked]);
    }
}
