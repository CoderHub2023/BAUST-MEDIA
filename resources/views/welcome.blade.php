@extends('template')
@section('title','Home')
@include('layouts.public-nav')
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
@section('content')



<div class="mt-6 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-2/3 mx-auto">
  <!-- Image -->
  <img src="{{ ('/uploads/post/vc-sir.jpg') }}" alt="Post image" class="w-full h-auto object-cover">

  <!-- Content -->
  <div class="p-4 lg:p-6">
    <div class="flex items-center mb-4">
      <h2 class="text-lg font-medium text-cyan-400"><b>Department of CSE, BAUST</b></h2>
    </div>
    <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">বিশ্ববিদ্যালয়ের নতুন ভাইস চ্যান্সেলর মহোদয় কে স্বাগতম:
Bangladesh Army University of Science and Technology(BAUST) এর নতুন যোগদানকৃত ভিসি মহোদয় Brig Gen Md Sanuwar Uddin, ndc, psc, PhD, PEng কে কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং  (CSE) বিভাগের পক্ষ থেকে ফুলেল শুভেচ্ছা ও শুভকামনা।</p>
    <div class="flex justify-between items-center">
      <p class="text-gray-500 text-xs">Posted on April 18, 2023</p>
      
      <div class="flex items-center justify-center">
    <svg class="h-12 w-12 text-yellow-400 dark:text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
      <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
    </svg>
  </div>
    </div>
=======
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
>>>>>>> 04c922771351ac445e858e92fd42d9d71e722ca0
  </div>
</div>


<<<<<<< HEAD
<!-- Post-2 without photos -->
<div class="mt-6 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-2/3 mx-auto">
  <!-- Image -->
  <img src="{{ ('/uploads/post/icpc.jpg') }}" alt="Post image" class="w-full h-auto object-cover">
=======
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-1/3 mx-auto">
  <!-- Image -->
  <img src="https://via.placeholder.com/600x400" alt="Post image" class="w-full h-auto object-cover">
>>>>>>> 04c922771351ac445e858e92fd42d9d71e722ca0

  <!-- Content -->
  <div class="p-4 lg:p-6">
    <div class="flex items-center mb-4">
<<<<<<< HEAD
      <h2 class="text-lg font-medium text-cyan-400">Department of CSE, BAUST</h2>
    </div>
    <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">Big Congratulations to "BAUSTian_Ciphers" for being selected for the ICPC onsite contest hosted by Green University, Bangladesh! Your hard work and dedication have paid off, and we wish you all the best as you prepare for the prestigious competition. Good luck!
      Team Name: BAUSTian_Ciphers
      Coach: Md. Al-Hasan, Assistant Professor, Dept of CSE, BAUST
      Team Members:
      1. Abu Shadat Shaikat - CSE 10th Batch
      2. Md Rayhan Ali - CSE 10th Batch
      3. Rafid Al Wahid - CSE 10th Batch</p>
    <div class="flex justify-between items-center">
      <p class="text-gray-500 text-xs">Posted on March 6, 2023</p>
      
      <div class="flex items-center justify-center">
    <svg class="h-12 w-12 text-yellow-400 dark:text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
      <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
    </svg>
  </div>
    </div>
  </div>
</div>


<!-- post-3 -->
<div class="mt-6 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-2/3 mx-auto">
  <!-- Image -->
  <img src="{{ ('/uploads/post/ieb.jpg') }}" alt="Post image" class="w-full h-auto object-cover">

  <!-- Content -->
  <div class="p-4 lg:p-6">
    <div class="flex items-center mb-4">
      <h2 class="text-lg font-medium text-cyan-400">Department of CSE, BAUST</h2>
    </div>
    <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">Department of CSE, BAUST is now IEB accredited 💚
This is really a great achievement for us, for BAUSTians!
 <a href="https://www.baetebangladesh.org/programs.php">https://www.baetebangladesh.org/programs.php</a></p>
    <div class="flex justify-between items-center">
      <p class="text-gray-500 text-xs">Posted on April 19, 2023</p>
      
      <div class="flex items-center justify-center">
    <svg class="h-12 w-12 text-yellow-400 dark:text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
      <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
    </svg>
  </div>
    </div>
  </div>
</div>


<!-- Post-4 -->
<div class="mt-6 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-2/3 mx-auto">
  <!-- Image -->
  <img src="{{ ('/uploads/post/allumni.jpg') }}" alt="Post image" class="w-full h-auto object-cover">

  <!-- Content -->
  <div class="p-4 lg:p-6">
    <div class="flex items-center mb-4">
      <h2 class="text-lg font-medium text-cyan-400"><b>Department of CSE, BAUST</b></h2>
    </div>
    <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">CSE graduates are doing great in every sector like; university faculty, engineering, and higher study abroad.
Here are some graduates among them</p>
    <div class="flex justify-between items-center">
      <p class="text-gray-500 text-xs">Posted on March 13, 2023</p>
      
      <div class="flex items-center justify-center">
    <svg class="h-12 w-12 text-yellow-400 dark:text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
      <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
    </svg>
  </div>
=======
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
>>>>>>> 04c922771351ac445e858e92fd42d9d71e722ca0
    </div>
  </div>
</div>


@endsection
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> 04c922771351ac445e858e92fd42d9d71e722ca0
