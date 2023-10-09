@extends('template')
@section('title','Home')
@include('layouts.public-nav')
@section('content')

<div class="w-full flex">
  <div class="w-1/6 h-screen bg-gray-800 p-4 text-white hidden md:block">
    <h2 class="text-2xl font-semibold mb-4">Navigation</h2>
    <ul class="space-y-2 overflow-y-auto" style="max-height: 80vh;">
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

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>


      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>


      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>


      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>


      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
      </li>

      <li class="flex items-center space-x-2 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
          <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd" />
        </svg>
        <a href="#" class="block hover:text-blue-500">Item 2</a>
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
  </div>



  <!-- Post Creation -->
  <div class="w-full md:w-3/6 lg:w-3/6 container mx-auto mt-8 overflow-y-auto" style="max-height: 80vh;">
    <form action="{{ url('/stack/post') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="bg-white dark:bg-slate-800 p-4 shadow-md rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Create a Post</h2>
        <textarea placeholder="Write a stack" name="stack" class="w-full p-2 border rounded-lg"></textarea>
        <div class="flex justify-between items-center mt-4">
          <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Post</button>
          <input type="file" id="images" name="images[]" class="hidden" multiple>
          <label for="images" class="cursor-pointer text-blue-600 hover:underline">Add Image</label>
        </div>
    </form>
  </div>
  <!-- End Post Creation -->

  <!-- Post viewing -->

  @foreach ($stacks as $stack)
  <div class="max-w-3/6  mx-auto mt-8 bg-white rounded-lg shadow-md">
    <!-- Post Header -->
    <div class="flex items-center justify-between p-4 border-b border-gray-300">
      <div class="flex items-center space-x-4">
        <img src="avatar.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
        <div>
          <p class="text-lg font-semibold">John Doe</p>
          <p class="text-gray-600">2 hours ago</p>
        </div>
      </div>
      <div class="text-gray-400 hover:text-blue-500 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </div>
    </div>
    <!-- Photo and Caption -->
    <div class="p-4">
    <div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <img src="/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full">
    <img src="/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full">
    <img src="/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full">
    <img src="/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
    <p class="mt-2 text-gray-800">
    {{ $stack->stack }}
      </p>
    </div>
    <!-- Like and Comment Buttons -->
    <div class="flex justify-between p-4 border-t border-gray-300">
      <div class="flex space-x-4">
        <div class="flex items-center space-x-2 cursor-pointer hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
          <span>Like</span>
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
      <p>12 likes</p>
      <p>5 comments</p>
    </div>
  </div>
</div>
  @endforeach
  <!--End  Post viewing -->


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
  $(document).ready(function(){
    alert("Welcome");
  })
</script>
@endsection