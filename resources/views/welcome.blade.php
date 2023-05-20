@extends('template')
@section('title','Home')
@include('layouts.public-nav')
@section('content')

<div class="bg-white dark:bg-gray-800 mx-auto max-w-md rounded-lg shadow-lg overflow-hidden">
  <div class="bg-yellow-500 dark:bg-yellow-600 h-20 flex items-center justify-center">
    <svg class="h-12 w-12 text-white dark:text-gray-900" viewBox="0 0 20 20" fill="currentColor">
      <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
    </svg>
  </div>
  <div class="p-4 sm:p-6 md:p-8">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">New post on my blog!</h2>
    <p class="text-gray-700 dark:text-gray-300 mb-4">Check out my latest article on how to use Tailwind CSS for responsive web design.</p>
    <a href="#" class="text-yellow-500 dark:text-yellow-600 hover:text-yellow-600 dark:hover:text-yellow-500 font-semibold text-sm">Read more</a>
  </div>
</div>


<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-1/3 mx-auto">
  <!-- Image -->
  <img src="https://via.placeholder.com/600x400" alt="Post image" class="w-full h-auto object-cover">

  <!-- Content -->
  <div class="p-4 lg:p-6">
    <div class="flex items-center mb-4">
      <!-- Star icon -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-yellow-400 w-6 h-6 mr-2">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 17.27l5.18 3.55-1.96-6.05 5.02-3.64-6.61-.06L12 5.4 8.37 10.1l-6.61.06L7.78 13.8l-1.96 6.05L12 17.27z"/>
      </svg>
      <h2 class="text-lg font-medium">Post title goes here</h2>
    </div>
    <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis cursus metus, vel hendrerit arcu blandit nec. Nullam sit amet orci auctor, posuere arcu non, tincidunt felis.</p>
    <div class="flex justify-between items-center">
      <p class="text-gray-500 text-xs">Posted on April 27, 2023</p>
      <button class="bg-yellow-400 text-white py-1 px-3 rounded-full hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">Like</button>
    </div>
  </div>
</div>


@endsection
