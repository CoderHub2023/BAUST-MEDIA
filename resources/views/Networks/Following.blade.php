@extends('template')

@section('title','Network')
@include('layouts.public-nav')

@section('content')
<div class="w-full flex">
    <div class="w-1/6 h-screen  p-4 text-white hidden md:block shadow-lg">
        <ul class="space-y-2 overflow-y-auto" style="max-height: 80vh;">
            <a href="/my-network" class="block hover:text-blue-500">
                <li class="flex items-center space-x-2 p-2">
                    <p class="text-sm p-2 text-black dark:text-white">Home</p>
                </li>
            </a>

            <a href="/following" class="block hover:text-blue-500 ">
                <li class="flex items-center space-x-2 p-2 bg-slate-400 rounded-lg">
                    <p class="text-sm p-2 text-black dark:text-white">Following</p>
                </li>
            </a>

            <a href="/followers" class="block hover:text-blue-500">
                <li class="flex items-center space-x-2 p-2">
                    <p class="text-sm p-2 text-black dark:text-white">Followers</p>
                </li>
            </a>
        </ul>
    </div>


    <div class="xl:w-3/4 2xl:w-4/5 w-full mx-auto">
        <div class="px-4 sm:px-6 md:px-8 lg:px-10 py-4 md:py-7">
            <div class="flex flex-wrap items-center justify-between">
                <div>
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-black  dark:text-white w-full sm:w-auto">Connect With People</p>
                    <div class=" lg:hidden xl:hidden 2xl:hidden text-sm breadcrumbs text-black">
                        <ul>
                            <li>
                                <a href="/my-network">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/following" class="underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                    </svg>
                                    Following
                                </a>
                            </li>
                            <li>
                                <a href="/followers">
                                    <span class="inline-flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                        </svg>
                                        Followers
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <!-- Pagination -->
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 ml-10">
            @foreach($following as $user)
            <div class="max-w-xs bg-white shadow-lg rounded-md overflow-hidden">
                <div class="p-3">
                    <img src="{{ $user->profile_picture }}" alt="Current profile photo" class="w-full h-16vh mb-2 rounded-md">
                    <p class="font-semibold text-gray-800 text-sm">{{ $user->name }}</p>
                    <p class="text-gray-600 text-xs mb-2">{{ $user->headlines }}</p>

                    <div class="p-2 border-t border-gray-200">
                        <a href="{{ url('/remove-network/'.$user->id) }}"><button class="bg-red-500 text-white px-3 py-1 rounded-md text-sm md:text-base">Unfollow</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="lg:hidden md:hidden 2xl:hidden">
            <!-- Pagination -->
        </div>

    </div>
</div>
@endsection