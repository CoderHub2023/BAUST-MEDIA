@extends('template')
@section('title','Home')
@include('layouts.public-nav')
@section('content')

<div class="w-full flex">
  <div class="w-1/6 h-screen  p-4 text-white hidden md:block shadow-lg">
    <ul class="space-y-2 overflow-y-auto" style="max-height: 80vh;">
      <a href="/profile" class="block hover:text-blue-500">
        <li class="flex items-center space-x-2 p-2">
          <div class="avatar">
            <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="{{ $loggedInUserData[0]->profile_picture }}" />
            </div>
          </div>
          <p class="text-sm p-2 text-black dark:text-white">{{ $loggedInUserData[0]->name }}</p>
        </li>
      </a>

      <a href="/following" class="block hover:text-blue-500">
        <li class="flex items-center space-x-2 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
            <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
          </svg>
          <p class="text-sm p-2 text-black dark:text-white">Following</p>
        </li>
      </a>

    </ul>
  </div>


      
</div>




<div class="shadow-lg w-1/6 h-screen p-4 text-black dark:text-white hidden md:block">
  <!-- Active People -->
  <div class="mt-4">
    <h3 class="text-lg font-semibold mb-2">Active People</h3>
    @foreach($Activeusers as $user)
    <ul class="">
      <li class="flex items-center space-x-2 p-2">
        <!-- Green dot to indicate active -->
        @if(Cache::has('user-is-online-' . $user->id))
        <span class="w-3 h-3 bg-green-500 rounded-full"></span>
        <!-- Active person's avatar using Tailwind Avatar component -->
        <div class="avatar">
          <div class="w-5 h-5 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="{{ $user->profile_picture }}" />
          </div>
        </div>
        <a href="{{ url('/messages/'.$user->id) }}">
          <span class="block text-sm">{{ $user->name }}</span>
        </a>
        @endif
      </li>
      <!-- Add more active people as needed -->
    </ul>
    @endforeach
  </div>
</div>
</div>
<script>
  // Function for like a Stack
  function likePost(postId) {
    $.ajax({
      type: 'POST',
      url: '/like-post',
      data: {
        postId: postId,
        _token: '{{ csrf_token() }}',
      },
      success: function(data) {
        // Update the like count on success.
        $('#like-count-' + postId).text(data.likes);
      },
    });
  }
  // Function for comments in a Stack
  // function addComment(postId) {
  //   var comments = $('#comments').val();
  //   $.ajax({
  //     type: 'POST',
  //     dataType: "json",
  //     data: {
  //       postId: postId,
  //       comments: comments,
  //     },
  //     url: "/add-comment",
  //     success: function(data) {
  //       console.log("You have been commented");
  //     }
  //   })
  // }
</script>
@endsection