@extends('template')
@section('title','Profile')
<div class="navbar bg-gradient-to-r from-purple-700 to-slate-600 ">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl text-white" href="{{ route('home') }}">BSM</a>
    </div>
    <div class="flex-none">
        <!-- <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="badge badge-sm indicator-item">8</span>
                </div>
            </label> -->
            <!-- <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                <div class="card-body">
                    <span class="font-bold text-lg">8 Items</span>
                    <span class="text-info">Subtotal: $999</span>
                    <div class="card-actions">
                        <button class="btn btn-primary btn-block">View cart</button>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="{{ $user[0]->profile_picture }}" />
                </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <a class="justify-between" href="{{ route('profile') }}">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <li :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <a>Logout</a>
                    </li>
                </form>
            </ul>
        </div>
    </div>
</div>
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
    <!-- cover image and profile photo -->
    <div class="bg-gray-100">
        <!-- Cover image -->
        <div class="relative">
            <!-- <img class="w-full h-80 object-cover" src="{{ asset('media/profile/shaikat-cover.jpeg') }}" alt="Cover image"> -->
            <div class="relative">
                <img class="w-full h-80 object-cover" src="{{ $user[0]->cover_picture }}" alt="Cover image">
                <button onclick="document.getElementById('CoverInput').click()" class="absolute top-0 right-0 m-4 bg-gray-800 p-2 rounded-full hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4m-7-7l-3 3v4h4l3-3-4-4z" />
                    </svg>
                </button>
                <input type="file" id="CoverInput" style="display:none" accept="image/*">
            </div>

            <!-- Profile photo -->
            <div class="absolute left-8 top-56">
                <a href="#" class="mb-4 inline-block rounded-full overflow-hidden border-4 border-white shadow-lg" onclick="changeProfilePhoto()">
                    <img onclick="document.getElementById('ProfileInput').click()" class="w-32 h-32 object-cover" src="{{ $user[0]->profile_picture }}" alt="Profile photo">
                    <input type="file" id="ProfileInput" style="display:none" accept="image/*">
                </a>
            </div>
        </div>
    </div>

    <!-- name and occupation -->
    <div class="bg-gray-100 dark:bg-gray-900 lg:flex">
        <!-- Left column -->
        <div class="w-2/2 lg:w-1/2 p-8 mt-2">
            <h1 class="text-2xl lg:text-2xl font-extrabold  dark:text-white text-gray-400 tracking-tight mb-2 mt-2">{{$user[0]->name}}</h1>
            <h2 class="text-xs lg:text-xl font-bold dark:text-white text-gray-400 tracking-tight mb-4">{{$user[0]->headlines}}</h2>
            <p class="text-xs dark:text-white text-gray-500 mb-4">{{$user[0]->address}}</p>
        </div>
        <!-- Right column -->
        <div class="w-2/2 lg:w-1/2 p-8">
            <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Work at:</h2>
            <p class="text-lg dark:text-white text-gray-400 mb-4">CSE Society,BAUST</p>
            <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Studying at:</h2>
            <p class="text-lg dark:text-white text-gray-400 mb-4">Bangladesh Army University of Science and Technology (BAUST), Saidpur</p>
        </div>
    </div>
    <button class="btn btn-info"><a href="{{ route('profile.update-details') }}">Edit Details</a></button>
    </div>
</div>
    <!-- About section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
        <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
            <h2 class="text-3xl font-bold mb-4 dark:text-white">About Me</h2>
            <p class="dark:text-gray-400 text-lg leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum porttitor felis vel bibendum. In hac habitasse platea dictumst. Maecenas ac tortor in mauris mattis faucibus. Nam eget arcu nulla. Sed malesuada nulla vel ipsum ultrices, non dictum sapien euismod. Aliquam vel neque nec massa eleifend interdum.</p>
            <p class="dark:text-gray-400 text-lg leading-relaxed mb-6">Nulla fermentum enim sit amet malesuada efficitur. Nullam blandit ultricies leo, vitae tincidunt tortor aliquet eget. Sed vestibulum dolor euismod neque egestas, eu accumsan sapien fermentum. Suspendisse eget felis vel ex mollis mattis. Nam eget leo nec justo malesuada lobortis. Aenean pulvinar faucibus luctus.</p>
        </div>
    </div>

    <!-- Skill Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 ">
        <div class="shadow-xl rounded-md bg-gray-100 dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
            <h2 class="text-3xl font-bold mb-4">Skills</h2>
            <div class="grid grid-cols-4 gap-6">
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-blue-600 rounded-full h-6 w-1/2 text-center text-white">
                        <p>C/C++</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-green-600 rounded-full h-6 w-3/4 text-center text-white">
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-purple-600 rounded-full h-6 w-1/4 text-center text-white">
                        <p>React</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-red-600 rounded-full h-6 w-2/3 text-center text-white">
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-yellow-600 rounded-full h-6 w-1/3 text-center text-white">
                        <p>MySQL</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-pink-600 rounded-full h-6 w-1/2 text-center text-white">
                        <p>NoSQL</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-teal-600 rounded-full h-6 w-3/4 text-center text-white">
                        <p>PHP</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-full h-6">
                    <div class="bg-indigo-600 rounded-full h-6 w-3/5 text-center text-white">
                        <p>Python</p>
                    </div>
                </div>
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">See More</button>
        </div>
    </div>

    <!-- Education section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 ">
        <div class="shadow-xl rounded-md bg-gray-100 dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
            <h2 class="text-3xl font-bold mb-4 text-black dark:text-white">Education</h2>
            <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                @foreach($user_education as $user_education)
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 flex-shrink-0 mr-4">
                        <span class="text-3xl"><i class="fas fa-graduation-cap"></i></span>
                    </div>
                    @if($user_education == '/');
                    <div>
                        <h3 class="text-lg font-bold text-black dark:text-white">Institute Name</h3>
                        <p class="text-gray-800 dark:text-white">Department/Subject</p>
                        <p class="text-gray-500 dark:text-white">Active year</p>
                    </div>
                    @else
                    <div>
                        <h3 class="text-lg font-bold text-black dark:text-white">Institute Name</h3>
                        <p class="text-gray-800 dark:text-white">Department/Subject</p>
                        <p class="text-gray-500 dark:text-white">From : </p>
                        <p class="text-gray-500 dark:text-white">To : </p>
                    </div>
                    @endif
                </div>
                @endforeach
                
            </div>
            <a href="#" class="text-blue-500 hover:underline block mt-6">See More</a>
        </div>
    </div>

</div>
@endsection