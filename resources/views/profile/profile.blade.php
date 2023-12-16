@extends('template')
@section('title','Profile')
@include('layouts.public-nav')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <!-- cover image and profile photo -->
        <div class="bg-gray-100">
            <!-- Cover image -->
            <div class="relative">
                <!-- <img class="w-full h-80 object-cover" src="{{ asset('media/profile/shaikat-cover.jpeg') }}" alt="Cover image"> -->
                <div class="relative">
                    <a href="{{ route('profile.update_cover_photo') }}">
                        <img class="w-full h-80 object-cover" src="{{ $loggedInUserData[0]->cover_picture }}" alt="Cover image">
                    </a>
                </div>

                <!-- Profile photo -->
                <div class="absolute left-8 top-56">
                    <a href="{{ route('profile.update_profile_photo') }}">
                        <div class="mb-4 inline-block rounded-full overflow-hidden border-4 border-white shadow-lg" onclick="ClickProfilePhoto()">
                            <img class="w-32 h-32 object-cover" src="{{ $loggedInUserData[0]->profile_picture }}" alt="Profile photo">
                        </div>
                    </a>
                </div>




            </div>
        </div>


        <!-- name and occupation -->
        <div class="bg-gray-100 dark:bg-gray-900 lg:flex">
            <!-- Left column -->
            <div class="w-2/2 lg:w-1/2 p-8 mt-2">
                <h1 class="text-2xl lg:text-2xl font-extrabold  dark:text-green-600 text-blue-800 tracking-tight mb-2 mt-2">{{$loggedInUserData[0]->name}}</h1>
                <h2 class="text-xs lg:text-xl font-bold dark:text-white text-blue-800 tracking-tight mb-4">{{$loggedInUserData[0]->headlines}}</h2>
                <p class="text-xl dark:text-white text-blue-800 mb-4">{{$loggedInUserData[0]->address}}</p>
                <p class="text-xl dark:text-white text-blue-800 mb-4">Friends: {{$CountFriends}}</p>
            </div>

            <!-- Right column -->
            <div class="w-2/2 lg:w-1/2 p-8">
                <!-- Work Section -->
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold dark:text-white text-blue-800 tracking-tight mb-4">Work at:</h2>
                        @if($users_works_count !=0)
                        <p class="text-lg dark:text-white text-black mb-4">{{ $users_works[0]->position }} at {{ $users_works[0]->work_at }}</p>
                        <p class="text-sm dark:text-white text-black mb-4">Started at: {{ $users_works[0]->start }}</p>
                        @endif
                    </div>
                    <div>
                        @if($users_works_count !=0)
                        <div class="inline">
                            <div class="p-2">
                                <a href="{{ url('/profile/update-works/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="{{ url('/profile/add-works/') }}" class="text-blue-500 hover:text-blue-600">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        @else
                        <a href="{{ url('/profile/add-works/') }}" class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus"></i>
                        </a>
                        @endif
                    </div>
                </div>
                <!-- End Work Section -->

                <!-- Studying Section -->
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold text-blue-800 dark:text-white tracking-tight mb-4">Studies at:</h2>
                        @if($countUserEducation !=0)
                        <p class="text-lg dark:text-white text-black mb-4">{{ $user_education[0]->subject }} in {{ $user_education[0]->institution }}</p>
                        <p class="text-sm dark:text-white text-black mb-4">Started at: {{ $user_education[0]->start }}</p>
                        @endif
                    </div>
                    <div>
                        @if($countUserEducation !=0)
                        <div class="inline">
                            <div class="p-2">
                                <a href="{{ url('/profile/update-education/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="{{ url('/profile/add-education/') }}" class="text-blue-500 hover:text-blue-600">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        @else
                        <a href="{{ url('/profile/add-education/') }}" class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus"></i>
                        </a>
                        @endif
                    </div>
                </div>
                <!-- End Studying Section -->
            </div>
            <!-- End Right column -->
        </div>
        <!-- End name and occupation -->

        <!-- Button group -->
        <div class="flex">
            <a href="{{ route('profile.ViewResume') }}">
            <button class="btn btn-success w-32 flex items-center mr-4">
                    <p class="text-sm">View Resume</p>
                </button>
            </a>

            <button class="btn btn-success w-32 flex items-center">
                <a href="{{ route('profile.update-resume') }}">
                    <p class="text-sm">Update Resume</p>
                </a>
            </button>
        </div>

    </div>
</div>

<!-- Network Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <div class="flex flex-col md:flex-row justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-2 md:mb-0">Networks</h2>
            <a href="{{ url('/following') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">See All</a>
        </div>
        @if($CountFriends==0)
        <p class="text-red-600">No people in your network</p>
        <p>Go to <a href="/my-network"><button class="btn btn-success">Network</button></p>
        @else
        <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            @foreach($friends as $friend)
            <a href="{{ url('/view/profile/'.$friend->id) }}">
                <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-md shadow-sm flex flex-col justify-center items-center">
                    <img src="{{ $friend->profile_picture }}" alt="Friend 1" class="w-16 h-16 rounded-full mb-2">
                    <p class="text-sm text-gray-700 dark:text-gray-300">{{ $friend->name }}</p>
                </div>
            </a>
            @endforeach
            @endif
        </div>
    </div>
</div>


<!-- About section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-4 text-black dark:text-white">About</h2>
            </div>
            @if($count != 0)
            <a href="{{ url('/profile/update-about/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                <i class="fas fa-pen"></i>
            </a>
            @else
            <a href="{{ url('/profile/add-about/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                <i class="fas fa-plus"></i>
            </a>
            @endif
        </div>

        @if($count != 0)
        <p class="text-black dark:text-white">{{ $user_about[0]->about }}</p>
        @else
        <p class="text-black dark:text-white">Hello there! 👋 Welcome to my profile.</p>
        @endif
    </div>
</div>
</div>
@endsection