@extends('template')
@section('title','Home')
@section('content')



<div class="mt-6 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-2/6 mx-auto">
  <!-- Image -->
  <img src="{{ ('/uploads/post/vc-sir.jpg') }}" alt="Post image" class="w-full h-auto object-cover">

  <!-- Content -->
  <div class="p-4 lg:p-6">
    <div class="flex items-center mb-4">
      <h2 class="text-lg font-medium text-cyan-400"><b>Department of CSE, BAUST</b></h2>
    </div>
    <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">বিশ্ববিদ্যালয়ের নতুন ভাইস চ্যান্সেলর মহোদয় কে স্বাগতম:
      Bangladesh Army University of Science and Technology(BAUST) এর নতুন যোগদানকৃত ভিসি মহোদয় Brig Gen Md Sanuwar Uddin, ndc, psc, PhD, PEng কে কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং (CSE) বিভাগের পক্ষ থেকে ফুলেল শুভেচ্ছা ও শুভকামনা।</p>
    <div class="flex justify-between items-center">
      <p class="text-gray-500 text-xs">Posted on April 18, 2023</p>
      <div class="flex items-center justify-center">
        <svg class="h-12 w-12 text-yellow-400 dark:text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
        </svg>
      </div>
    </div>
  </div>
</div>


<div class="mt-4 bg-white dark:bg-gray-800 mx-auto w-full lg:w-2/6 rounded-lg shadow-lg  overflow-hidden">
  
  <div class="p-4 sm:p-6 md:p-8">
  <h2 class="text-lg font-medium text-cyan-400"><b>Department of CSE, BAUST</b></h2>
    <p class="text-gray-700 dark:text-gray-300 mb-4">Check out my latest article on how to use Tailwind CSS for responsive web design.</p>
    <a href="#" class="text-yellow-500 dark:text-yellow-600 hover:text-yellow-600 dark:hover:text-yellow-500 font-semibold text-sm">Read more</a>
  </div>

  <div class="bg-yellow-500 dark:bg-yellow-600 h-20 flex items-center justify-center">
    <svg class="h-12 w-12 text-white dark:text-gray-900" viewBox="0 0 20 20" fill="currentColor">
      <path d="M10 15.972l-6.162 3.766 1.568-6.849L.528 7.262l6.907-.593L10 .798l2.565 6.87 6.907.593-4.878 4.627 1.568 6.85z" />
    </svg>
  </div>
</div>


@endsection