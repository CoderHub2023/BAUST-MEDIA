@extends('template')
@section('title','Home')
@include('layouts.public-nav')
@section('content')

<div class="w-full flex">
  <div class="w-1/6 h-screen bg-gray-800 p-4 text-white hidden md:block">
    <ul class="space-y-2 overflow-y-auto" style="max-height: 80vh;">
      <a href="/profile" class="block hover:text-blue-500">
        <li class="flex items-center space-x-2 p-2">
          <div class="avatar">
            <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="{{ $loggedInUserData[0]->profile_picture }}" />
            </div>
          </div>
          <p class="text-sm p-2">{{ $loggedInUserData[0]->name }}</p>
        </li>
      </a>

      <a href="/network-range" class="block hover:text-blue-500">
        <li class="flex items-center space-x-2 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
            <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
          </svg>
          <p class="text-sm p-2">Friends</p>
        </li>
      </a>

    </ul>
  </div>



  <!-- Post Creation -->
  <div class="w-full md:w-3/6 lg:w-3/6 container mx-auto mt-8 overflow-y-auto" style="max-height: 80vh;">
    <form action="{{ url('/stack/post') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="bg-white dark:bg-slate-800 p-4 shadow-md rounded-lg">
        <h2 class="text-xl text-black dark:text-white font-semibold mb-4">Create a Stack</h2>
        <textarea placeholder="Write a stack" name="stack" class="w-full p-2 border rounded-lg bg-slate-700"></textarea>
        <div class="flex justify-between items-center mt-4">
          <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Post</button>
          <input type="file" id="images" name="images[]" class="hidden" multiple>
          <label for="images" class="cursor-pointer text-blue-600 hover:underline">Add Image</label>
        </div>
    </form>
  </div>
  <!-- End Post Creation -->
  <div class="loader"></div>
  
    <!-- Post viewing -->
    @foreach ($stacks as $stack)
  <div class="max-w-3/6 mx-auto mt-8 bg-white rounded-lg shadow-md">
    <div class="max-w-3/6 mx-auto mt-8 bg-slate-700 rounded-lg shadow-md">

      <!-- Post Header -->
      <div class="flex items-center justify-between p-4 border-b border-gray-300">
        <div class="flex items-center space-x-4">
          <img src="{{ $stack_user[0]->profile_picture }}" alt="User Avatar" class="w-10 h-10 rounded-full">
          <div>
            <p class="text-black dark:text-white text-lg font-semibold">{{ $stack_user[0]->name }}</p>
            <p class="text-black dark:text-white">{{ $formattedStackTime }}</p>
          </div>
        </div>
        <div class="text-gray-400 hover:text-blue-500 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </div>
      </div>
      <!-- End Post Header -->

      <!-- Photo and Caption -->
      <div class="p-4">
        <!-- carousel Start -->
        <div class="carousel w-full" id="carousel-{{ $stack->id }}">
          @foreach (explode(',', $stack->images) as $index => $image)
          <div id="slide-{{ $stack->id }}-{{ $index + 1 }}" class="carousel-item relative w-full">
            <img src="{{ asset(trim($image)) }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
              <a href="#slide-{{ $stack->id }}-{{ $index === 0 ? count(explode(',', $stack->images)) : $index }}" class="btn btn-circle">❮</a>
              <a href="#slide-{{ $stack->id }}-{{ $index === count(explode(',', $stack->images)) - 1 ? 1 : $index + 2 }}" class="btn btn-circle">❯</a>
            </div>
          </div>
          @endforeach

          @if (count(explode(',', $stack->images)) == 1)
          <!-- If there's only one image, no need for a carousel -->
          <div id="slide-{{ $stack->id }}-2" class="carousel-item relative w-full">
            <img src="{{ asset(trim($stack->images)) }}" class="w-full" />
          </div>
          @endif
        </div>
        <!-- carousel end -->
        <p class="mt-2 text-black dark:text-white">
          {{ $stack->stack }}
        </p>
      </div>
      <!-- Photo and Caption end-->

      <!-- Like and Comment Buttons -->
      <div class="flex justify-between p-4 border-t border-gray-300">
        <div class="flex space-x-4">
          <div class="flex items-center space-x-2 cursor-pointer hover:text-blue-500">
            <a href="javascript:void(0);" onclick="likePost({{ $stack->id }})">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
              <span>Like</span>
            </a>
          </div>
          <div class="flex items-center space-x-2 cursor-pointer hover:text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4a4 4 0 100 8 4 4 0 000-8z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 00-7-7m0 0a7 7 0 00-7 7m7-7v7m0-7a7 7 0 007 7"></path>
            </svg>
            <span>Comment</span>
          </div>
        </div>
        <div class="flex items-center space-x-2 cursor-pointer hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
          </svg>
          <span>Share</span>
        </div>
      </div>
      <!-- Like and Comment Counts -->
      <div class="p-4 text-gray-500">
        <p id="like-count-{{ $stack->id }}" class="text-black dark:text-yellow-500">{{ $stack->likes }} likes</p>
        <p class="text-black dark:text-yellow-500">5 comments</p>
      </div>
      <!-- Comment Form -->
      <div class="p-4 border-t border-gray-300">
        <div class="p-4 border-t border-gray-300">
          <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-2">Add a Comment</h2>
          <form action="" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $stack->id }}">
            <textarea name="body" class="w-5/6 h-10 p-2 border rounded-md focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Add your comment..." required></textarea>
            <button type="submit" class="mt-2 btn btn-blue">Submit Comment</button>
          </form>
        </div>
      </div>
      <!-- End Comment Form -->

      <!-- Display Comments -->
      <div class="p-4 border-t border-gray-300">
        <h2 class="text-lg font-semibold text-gray-700 dark:text-white">Comments</h2>
        <!-- foreach ($stack->comments as $comment) -->
        <div class="mb-2 flex items-start">
          <img src="" alt=" Avatar" class="w-8 h-8 rounded-full mr-2">
          <div>
            <strong></strong>
            <p class="text-gray-600"></p>
          </div>
        </div>

        <a href="" class="text-blue-500 hover:underline">View All Comments</a>
      </div>
    </div>
  </div>
  @endforeach
</div>


<div class="w-1/6 h-screen bg-gray-800 p-4 text-white hidden md:block">
  <h2 class="text-2xl font-semibold mb-4">Navigation</h2>
  <ul class="space-y-2 overflow-y-auto" style="max-height: 60vh;"> <!-- Adjust max-height as needed -->
    <li class="flex items-center space-x-2 p-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
        <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
      </svg>
      <a href="#" class="block hover:text-blue-500">Item 1</a>
    </li>
    <li class="flex items-center space-x-2 p-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
        <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
      </svg>
      <a href="#" class="block hover:text-blue-500">Item 2</a>
    </li>
    <!-- Add more items as needed -->
  </ul>

  <!-- Active People -->
  <div class="mt-4">
    <h3 class="text-lg font-semibold mb-2">Active People</h3>
    <ul class="space-y-2">
      <li class="flex items-center space-x-2 p-2">
        <!-- Green dot to indicate active -->
        <span class="w-3 h-3 bg-green-500 rounded-full"></span>
        <!-- Active person's avatar using Tailwind Avatar component -->
        <div class="avatar">
          <div class="w-5 h-5 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="{{ $loggedInUserData[0]->profile_picture }}" />
          </div>
        </div>
        <span class="block text-sm">Active Person 1</span>
      </li>
      <li class="flex items-center space-x-2 p-2">
        <!-- No green dot (not active) -->
        <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
        <!-- Active person's avatar using Tailwind Avatar component -->
        <div class="avatar">
          <div class="w-5 h-5 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="{{ $loggedInUserData[0]->profile_picture }}" />
          </div>
        </div>
        <span class="block text-sm">Active Person 2</span>
      </li>
      <!-- Add more active people as needed -->
    </ul>
  </div>
</div>
</div>
<script>
  function likePost(postId) {
        $.ajax({
            type: 'POST',
            url: '/like-post',
            data: {
                postId: postId,
                _token: '{{ csrf_token() }}',
            },
            success: function (data) {
                // Update the like count on success.
                $('#like-count-' + postId).text(data.likes);
            },
        });
    }
</script>
@endsection